<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $events = $this->paginate($this->Events);

        $this->set(compact('events'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => [],
        ]);

        $this->set('event', $event);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            //debug(json_encode( $this->request->getData(), JSON_PRETTY_PRINT)); exit;
            $imagearray = $this->request->getData('image');

            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }else{
                $image_name = "none.png";
            }
            $event = $this->Events->patchEntity($event, $this->request->getData());
            $event->type = $this->request->getData('type');
            $event->featured = $this->request->getData('featured');
            $event->image = $image_name;
                        
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'allevents']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $this->set(compact('event'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => [],
        ]);
        //debug(json_encode( $event, JSON_PRETTY_PRINT)); exit;
        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug(json_encode( $this->request->getData(), JSON_PRETTY_PRINT)); exit;
            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }else{
                $image_name = $event->image;
            }
            $event = $this->Events->patchEntity($event, $this->request->getData());
            $event->image = $image_name;
            $event->type = $this->request->getData('type');
            $event->featured = $this->request->getData('featured');

            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'allevents']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $this->set(compact('event'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'allevents']);
    }


    public function eventdetails($id = null)
    {
        //debug(json_encode( $id, JSON_PRETTY_PRINT)); exit;
        $event = $this->Events->get($id, [
            'contain' => [],
        ]);
        $relatedEvents = $this->Events->find('all')
        ->where(['Events.id !=' => $id])
        ->contain([])
        ->limit(5);
        $pageTitle = '';
        $this->set(compact('pageTitle'));
        $this->set('event', $event);
        $this->set('relatedevents', $relatedEvents);
        $this->viewBuilder()->setLayout('fe');
    }

    public function all(){
        $events = $this->paginate($this->Events);
        $pageTitle = 'news';
        $this->set(compact('pageTitle'));
        $this->set(compact('events'));
        $this->viewBuilder()->setLayout('fe');
    }

    public function allevents()
    {
        $events = $this->paginate($this->Events);
        $pageTitle = '';
        $this->set(compact('pageTitle'));
        $this->set(compact('events'));
        $this->viewBuilder()->setLayout('be');
        //debug(json_encode( $events, JSON_PRETTY_PRINT)); exit;
    }



             //function for adding image to a property
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
        $this->Auth->allow(['all','eventdetails']);
        if (!$this->Auth->user()) {
            $this->Auth->setConfig('authError', false);
        }
    }
}
