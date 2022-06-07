<?php
namespace App\Controller;
use Cake\Event\Event;
use App\Controller\AppController;


/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $articles = $this->paginate($this->Articles);

        $this->set(compact('articles'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => ['Users', 'Tags'],
        ]);

        $this->set('article', $article);
    }*/

    public function view($slug = null)
    {
        $article = $this->Articles->findBySlug($slug)->contain(['Tags'])->firstOrFail();
        $neighbors = $this->Articles->find('neighbors', ['id' => $article->id]);
        $this->set(compact('article'));
        $this->set(compact('neighbors'));
        $this->viewBuilder()->setLayout('ui');

        //debug(json_encode( $neighbors, JSON_PRETTY_PRINT)); exit;
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $imagearray = $this->request->getData('image_file');
            if (!empty($imagearray['tmp_name'])) {
              $image_name = $this->addimage($imagearray);
            }else{
              $image_name = 'none';
            }

            $article = $this->Articles->patchEntity($article, $this->request->getData());
            $article->user_id = $this->Auth->user('id');
            $article->image_file = $image_name;

            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $users = $this->Articles->Users->find('list', ['limit' => 200]);
        $tags = $this->Articles->Tags->find('list', ['limit' => 200]);
        $this->set(compact('article', 'users', 'tags'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => ['Tags'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $users = $this->Articles->Users->find('list', ['limit' => 200]);
        $tags = $this->Articles->Tags->find('list', ['limit' => 200]);
        $this->set(compact('article', 'users', 'tags'));
    }*/
    public function edit($slug)
    {
        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $imagearray = $this->request->getData('image_file');
            //debug(json_encode( $imagearray, JSON_PRETTY_PRINT)); exit;
            if (!empty($imagearray['tmp_name'])) {
              $image_name = $this->addimage($imagearray);
            }else{
              $image_name = $this->request->getData('imagex');
            }
            $this->Articles->patchEntity($article, $this->request->getData());
            $article->image_file = $image_name;
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }

        // Get a list of tags.
        $tags = $this->Articles->Tags->find('list');
        // Set tags to the view context
        $this->set('tags', $tags);
        $users = $this->Articles->Users->find('list', ['limit' => 200]);
        $this->set('users', $users);
        $this->set('article', $article);
        $this->viewBuilder()->setLayout('be');
    }

    public function blogs(){
      /*$this->paginate = [
          'contain' => ['Users','Tags'],
      ];

      $articles = $this->paginate($this->Articles);*/

      $articles = $this->paginate(
          $this->Articles->find('all', [])
          ->contain(['Tags'])
          ->where(['published' => false])
          ->order(['Articles.id'=>'DESC'])
      );
      //debug(json_encode( $articles, JSON_PRETTY_PRINT)); exit;
      $this->set(compact('articles'));

      $features = $this->Articles->find('all')
      ->where(['Articles.published'=> 1])
      ->order(['RAND()'=>'DESC', 'Articles.created'=>'DESC'])
      ->limit(4);
      $this->set(compact('features'));

      $latests = $this->Articles->find('all')
      ->contain(['Tags'])
      ->order(['Articles.id'=>'DESC'])
      ->limit(1)
      ->first();
      $this->set(compact('latests'));
      //debug(json_encode( $articles, JSON_PRETTY_PRINT)); exit;
      $this->viewBuilder()->setLayout('ui');
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }*/
    public function delete($slug)
    {
        $this->request->allowMethod(['post', 'delete']);

        $article = $this->Articles->findBySlug($slug)->firstOrFail();
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The {0} article has been deleted.', $article->title));
            return $this->redirect(['action' => 'index']);
        }
    }

    public function saveimage(){
    // Get image name
        $image = $_FILES['post_image']['name'];

        // image file directory
        $target = "img/blog/" . basename($image);

        if (move_uploaded_file($_FILES['post_image']['tmp_name'], $target)) {
            echo BASE_URL ."/". $target;
            exit();
        }else{
            echo "Failed to upload image";
            exit();
        }
    }

    public function getPost(){
      	if (isset($_POST['getData']) && !empty($_POST['getData'])) {
          $start = $this->request->getData('start');
          $limit = $this->request->getData('limit');

          $articles = $this->Articles->find('all', array('limit'=>$limit, 'offset'=>$start))->contain(['Tags']);
          $this->set(compact('articles'));
          //debug(json_encode($result, JSON_PRETTY_PRINT)); exit;
        }
    }


    //function for adding image to a property
    public function addimage($imagearray) {
       $folder_upload = "img/blog/";
       $extension = array("jpeg", "jpg", "png", "gif", "PNG", "JPG", "JPEG", "GIF");
       if (empty($imagearray['tmp_name'])) {
           return;
       }
       //$message = " ";
       $size = \getimagesize($imagearray['tmp_name']);
       // $mimetype = stripslashes($size['mime']);
       if ((empty($size) || ($size[0] === 0) || ($size[1] === 0))) {
           throw new \Exception('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb.');
       }
       $finfo = new \finfo(FILEINFO_MIME_TYPE);
    //     //$filename = "company_staff_ids/".$staff_id;
       $file_type = $finfo->file(h($imagearray['tmp_name']), FILEINFO_MIME_TYPE);
    //
    //    echo $file_type; exit;
       if (!(($file_type == "image/gif") || ($file_type == "image/png") || ($file_type == "image/jpeg") ||
               ($file_type == "image/pjpeg") || ($file_type == "image/x-png"))) {
           throw new \Exception('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb .');
       }

       $file_name = $imagearray['name'];
       $ext = pathinfo($file_name, PATHINFO_EXTENSION);

       if (in_array($ext, $extension)) {
           $file_name = md5(uniqid($imagearray['name'], true)) . time();

           if (!file_exists($folder_upload . $file_name . '.' . $ext)) {
               $file_name = $file_name . '.' . $ext;
               move_uploaded_file($imagearray["tmp_name"], $folder_upload . $file_name);

               chmod($folder_upload . $file_name, 0644);
               return $message = $file_name;
           } else {
               $filename = basename($file_name, $ext);
               $newFileName = crypt($filename . time()) . "." . $ext;
               // echo $file_name; exit;
               move_uploaded_file($imagearray["tmp_name"], $folder_upload . $newFileName);
               chmod($folder_upload . $newFileName, 0644);
               return $message = $file_name;
           }
       } else {
           return $message = 'Unable to upload image, please ensure you are uploading a jpg,png,gif or Jpeg file. ';
           // debug(json_encode( $error, JSON_PRETTY_PRINT)); exit;
       }


       return $message = "images upload successful";
    }

    public function beforeFilter(Event $event) {
      $this->Auth->allow(['saveimage','blogs','view','getPost']);
      if (!$this->Auth->user()) {
          $this->Auth->setConfig('authError', false);
      }
    }
}
