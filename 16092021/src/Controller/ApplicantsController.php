<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Applicants Controller
 *
 * @property \App\Model\Table\ApplicantsTable $Applicants
 *
 * @method \App\Model\Entity\Applicant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApplicantsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States', 'Lgas', 'Courses'],
        ];
        $applicants = $this->paginate($this->Applicants);

        $this->set(compact('applicants'));
    }

    /**
     * View method
     *
     * @param string|null $id Applicant id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $applicant = $this->Applicants->get($id, [
            'contain' => ['States', 'Lgas', 'Courses'],
        ]);

        $this->set('applicant', $applicant);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $applicant = $this->Applicants->newEntity();
        if ($this->request->is('post')) {
            $applicant = $this->Applicants->patchEntity($applicant, $this->request->getData());
            if ($this->Applicants->save($applicant)) {
                $this->Flash->success(__('The applicant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The applicant could not be saved. Please, try again.'));
        }
        $states = $this->Applicants->States->find('list', ['limit' => 200]);
        $lgas = $this->Applicants->Lgas->find('list', ['limit' => 200]);
        $courses = $this->Applicants->Courses->find('list', ['limit' => 200]);
        $this->set(compact('applicant', 'states', 'lgas', 'courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Applicant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $applicant = $this->Applicants->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $applicant = $this->Applicants->patchEntity($applicant, $this->request->getData());
            if ($this->Applicants->save($applicant)) {
                $this->Flash->success(__('The applicant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The applicant could not be saved. Please, try again.'));
        }
        $states = $this->Applicants->States->find('list', ['limit' => 200]);
        $lgas = $this->Applicants->Lgas->find('list', ['limit' => 200]);
        $courses = $this->Applicants->Courses->find('list', ['limit' => 200]);
        $this->set(compact('applicant', 'states', 'lgas', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Applicant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $applicant = $this->Applicants->get($id);
        if ($this->Applicants->delete($applicant)) {
            $this->Flash->success(__('The applicant has been deleted.'));
        } else {
            $this->Flash->error(__('The applicant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function application(){
        $applicant = $this->Applicants->newEntity();
        if ($this->request->is('post')) {
            $imagearray = $this->request->getData('upload');
            $applicant = $this->Applicants->patchEntity($applicant, $this->request->getData());
            $applicant->dob = $this->request->getData('date');
            //$applicant->faculty_id = $this->request->getData('faculty_id');
            $applicant->faculty_id = 1;
            $applicant->course_id = 1;
            $applicant->position_id = $this->request->getData('position_id');
            //debug(json_encode( $applicant, JSON_PRETTY_PRINT)); exit;

            // check image before proceeding
            $extension = array("jpeg", "jpg", "png", "gif", "PNG", "JPG", "JPEG", "GIF");
            if (empty($imagearray['tmp_name'])) {
                $this->Flash->error(__('Please upload a passport photograph'));
                return $this->redirect($this->referer());
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

            // end file check

            $email = $this->Applicants->find('all')->where([
                'Applicants.email' => $this->request->getData('email')
            ]);
            debug(json_encode( $email, JSON_PRETTY_PRINT)); exit;

            if ($this->Applicants->save($applicant)) {
                $this->Flash->success(__('The applicant has been saved.'));

                // add waec
                $waectable = TableRegistry::get('Waecs');
                $waecEnt = $waectable->newEntity();
                $waec = $waectable->patchEntity($waecEnt, $this->request->getData());
                if($this->request->getData('qnameo') != ""){
                   $waec->applicant_id = $applicant->id;
                   $waec->name = $this->request->getData('qnameo');
                   $waec->year = $this->request->getData('qyear');
                   $waec->numberofcredit = $this->request->getData('qnumber');
                   //debug(json_encode( $waec, JSON_PRETTY_PRINT)); exit;
                   $waectable->save($waec);
                }else{
                   $waec->applicant_id = $applicant->id;
                   $waec->name = $this->request->getData('qname');
                   $waec->year = $this->request->getData('qyear');
                   $waec->numberofcredit = $this->request->getData('qnumber');
                  // debug(json_encode( $waec, JSON_PRETTY_PRINT)); exit;
                   $waectable->save($waec);
                }

               


                //debug(json_encode( $waec, JSON_PRETTY_PRINT)); exit;
                // add diploma
                $diplomatable = TableRegistry::get('Diplomas');
                $diplomaEnt = $diplomatable->newEntity();
                $diploma = $diplomatable->patchEntity($diplomaEnt, $this->request->getData());
                if($this->request->getData('ddnameo') != ""){
                   $diploma->applicant_id = $applicant->id;
                   $diploma->name = $this->request->getData('ddnameo');
                   $diploma->year = $this->request->getData('ddyear');
                   $diploma->subject = $this->request->getData('ddsubject');
                   $diploma->classofdiploma = $this->request->getData('ddclass');
                   //debug(json_encode( $diploma, JSON_PRETTY_PRINT)); exit;
                   $diplomatable->save($diploma);
                }else{
                   $diploma->applicant_id = $applicant->id;
                   $diploma->name = $this->request->getData('ddname');
                   $diploma->year = $this->request->getData('ddyear');
                   $diploma->subject = $this->request->getData('ddsubject');
                   $diploma->classofdiploma = $this->request->getData('ddclass');
                  //debug(json_encode( $diploma, JSON_PRETTY_PRINT)); exit;
                    $diplomatable->save($diploma);
                }
                // add bsc
                $degreetable = TableRegistry::get('Degrees');
                $degreeEnt = $degreetable->newEntity();
                $degree = $degreetable->patchEntity($degreeEnt, $this->request->getData());
                $degree->applicant_id = $applicant->id;
                $degree->name = $this->request->getData('dname');
                $degree->year = $this->request->getData('dyear');
                $degree->subject = $this->request->getData('dsubject');
                $degree->classofbsc = $this->request->getData('dclass');
                $degreetable->save($degree);
                // add photo
                 if (!empty($imagearray['tmp_name'])) {
                     $phototable = TableRegistry::get('Photos');
                     $photoEnt = $phototable->newEntity();
                     $photo = $phototable->patchEntity($photoEnt, $this->request->getData());
                     $image_name = $this->addimage($imagearray);
                     $photo->applicant_id = $applicant->id;
                     $photo->image = $image_name;
                     $phototable->save($photo);
                 }else{
                    $phototable = TableRegistry::get('Photos');
                     $photoEnt = $phototable->newEntity();
                     $photo = $phototable->patchEntity($photoEnt, $this->request->getData());
                     $photo->applicant_id = $applicant->id;
                     $photo->image = "none.png";
                     $phototable->save($photo);
                 }
                //return $this->redirect($this->referer());
                //debug(json_encode( $applicant, JSON_PRETTY_PRINT)); exit;
                $this->request->session()->write('userData', $applicant);
                return $this->redirect(['action' => 'confirmation']);
            }
            $this->Flash->error(__('The applicant could not be saved. Please, try again.'));
        }
        $states = $this->Applicants->States->find('list', ['limit' => 200]);
        $lgas = $this->Applicants->Lgas->find('list', ['limit' => 200]);
        $courses = $this->Applicants->Courses->find('list', ['limit' => 200]);
        $faculties = $this->Applicants->Faculties->find('list', ['limit' => 200]);
        $positions = $this->Applicants->Positions->find('list', ['limit' => 200]);
        //debug(json_encode( $positions, JSON_PRETTY_PRINT)); exit;
        $this->set(compact('applicant', 'states', 'lgas', 'courses','faculties','positions'));

        $this->viewBuilder()->setLayout('general');
    }


    

    public function confirmation(){
        $applicantData = $this->request->session()->read('userData');
        $this->set(compact('applicantData'));
        //debug(json_encode( $this->request->session()->read('userData'), JSON_PRETTY_PRINT)); exit;
        $this->viewBuilder()->setLayout('general');
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
}
