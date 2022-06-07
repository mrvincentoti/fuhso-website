<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Teams Controller
 *
 * @property \App\Model\Table\TeamsTable $Teams
 *
 * @method \App\Model\Entity\Team[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TeamsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $teams = $this->paginate($this->Teams);
        //dd($teams);
        $this->set(compact('teams'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * View method
     *
     * @param string|null $id Team id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $team = $this->Teams->get($id, [
            'contain' => [],
        ]);

        $this->set('team', $team);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $team = $this->Teams->newEntity();
        if ($this->request->is('post')) {
            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }else{
                $image_name = "none.png";
            }
            $team = $this->Teams->patchEntity($team, $this->request->getData());
            $team->category = $this->request->getData('category');
            $team->image = $image_name;

            //dd($team);
            if ($this->Teams->save($team)) {
                $this->Flash->success(__('The team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team could not be saved. Please, try again.'));
        }
        $this->set(compact('team'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Edit method
     *
     * @param string|null $id Team id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $team = $this->Teams->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }else{
                $image_name = $team->image;
            }
            $team = $this->Teams->patchEntity($team, $this->request->getData());
            $team->image = $image_name;
            $team->category = $this->request->getData('category');
            //dd($team);
            if ($this->Teams->save($team)) {
                $this->Flash->success(__('The team has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The team could not be saved. Please, try again.'));
        }
        $this->set(compact('team'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Delete method
     *
     * @param string|null $id Team id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $team = $this->Teams->get($id);
        if ($this->Teams->delete($team)) {
            $this->Flash->success(__('The team has been deleted.'));
        } else {
            $this->Flash->error(__('The team could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
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
}
