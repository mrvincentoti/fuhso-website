<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 *
 * @method \App\Model\Entity\Banner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BannersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $banners = $this->paginate($this->Banners);

        $this->set(compact('banners'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * View method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => [],
        ]);

        $this->set('banner', $banner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }else{
                $image_name = "none.png";
            }
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            $banner->image = $image_name;
            //debug(json_encode( $relatedEvents, JSON_PRETTY_PRINT)); exit;
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banner could not be saved. Please, try again.'));
        }
        $this->set(compact('banner'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }else{
                $image_name = $banner->image;
            }
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            $banner->image = $image_name;
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banner could not be saved. Please, try again.'));
        }
        $this->set(compact('banner'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->success(__('The banner has been deleted.'));
        } else {
            $this->Flash->error(__('The banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function details($id = NULL){
        $event = $this->Banners->get($id, [
            'contain' => [],
        ]);

        $relatedEvents = $this->Banners->find('all')
        ->where(['Banners.id !=' => $id])
        ->contain([])
        ->limit(5);
         $this->set('relatedevents', $relatedEvents);

        $pageTitle = '';
        $this->set(compact('pageTitle'));
        $this->set('event', $event);
        $this->viewBuilder()->setLayout('fe');
    }


    public function addimage($imagearray) {
            $folder_upload = "img/";
            $extension = array("jpeg", "jpg", "png", "gif", "PNG", "JPG", "JPEG", "GIF");
            if (empty($imagearray['tmp_name'])) {
                return;
            }
            $size = \getimagesize($imagearray['tmp_name']);
            if ((empty($size) || ($size[0] === 0) || ($size[1] === 0))) {
                $this->Flash->error(__('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb .'));
                return $this->redirect($this->referer());
                //throw new \Exception('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb.');
            }
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $file_type = $finfo->file(h($imagearray['tmp_name']), FILEINFO_MIME_TYPE);
   
            if (!(($file_type == "image/gif") || ($file_type == "image/png") || ($file_type == "image/jpeg") ||
                    ($file_type == "image/pjpeg") || ($file_type == "image/x-png"))) {
                //throw new \Exception('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb .');
                $this->Flash->error(__('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb .'));
                return $this->redirect($this->referer());
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
                    move_uploaded_file($imagearray["tmp_name"], $folder_upload . $newFileName);
                    chmod($folder_upload . $newFileName, 0644);
                    return $message = $file_name;
                }
            } else {
                //return $message = 'Unable to upload image, please ensure you are uploading a jpg,png,gif or Jpeg file. ';
                $this->Flash->error(__('Unable to upload image, please ensure you are uploading a jpg,png,gif or Jpeg file. .'));
                return $this->redirect($this->referer());
            }
            return $message = "images upload successful";
         }

    public function beforeFilter(Event $event) {
        $this->Auth->allow(['details']);
        if (!$this->Auth->user()) {
            $this->Auth->setConfig('authError', false);
        }
    }
}
