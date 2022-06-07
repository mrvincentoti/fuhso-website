<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Utility\Security;
use Cake\Mailer\Email;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 *
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Genders', 'Positions', 'States', 'Lgas'],
        ];
        $employees = $this->paginate($this->Employees);
        $positioncategories = $this->Employees->Positioncategories->find('list', ['limit' => 200]);
        $positions = $this->Employees->Positions->find('list', ['limit' => 200]);

        $this->set(compact('employees','positioncategories','positions'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Genders', 'Positions', 'States', 'Lgas','PositionCategories'],
        ]);

        $degreetable = TableRegistry::get('Degrees');
        $degrees = $degreetable->find('all')
        ->where(['employee_id'=>$id])
        ->contain(['Degs'])
        ->first();

        $qualificationtable = TableRegistry::get('Qualifications');
        $qualifications = $qualificationtable->find('all')
        ->where(['employee_id'=>$id]);

        $experiencetable = TableRegistry::get('Experiences');
        $experiences = $experiencetable->find('all')
        ->where(['employee_id'=>$id]);

        $publicationtable = TableRegistry::get('Publications');
        $publications = $publicationtable->find('all')
        ->where(['employee_id'=>$id])
        ->contain(['Publicationcategories']);

        $recommendationtable = TableRegistry::get('Recommendations');
        $recommendations = $recommendationtable->find('all')
        ->where(['employee_id'=>$id])
        ->contain([]);
        
        $this->set(compact('recommendations'));
        $this->set(compact('publications'));
        $this->set(compact('experiences'));
        $this->set(compact('qualifications'));
        $this->set('employee', $employee);
        $this->set('degrees', $degrees);
        //debug(json_encode( $recommendations, JSON_PRETTY_PRINT));exit;
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $genders = $this->Employees->Genders->find('list', ['limit' => 200]);
        $positions = $this->Employees->Positions->find('list', ['limit' => 200]);
        $degrees = $this->Employees->Degrees->find('list', ['limit' => 200]);
        $states = $this->Employees->States->find('list', ['limit' => 200]);
        $lgas = $this->Employees->Lgas->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'genders', 'positions', 'degrees', 'states', 'lgas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $genders = $this->Employees->Genders->find('list', ['limit' => 200]);
        $positions = $this->Employees->Positions->find('list', ['limit' => 200]);
        $degrees = $this->Employees->Degrees->find('list', ['limit' => 200]);
        $states = $this->Employees->States->find('list', ['limit' => 200]);
        $lgas = $this->Employees->Lgas->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'genders', 'positions', 'degrees', 'states', 'lgas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function application(){
        $email = new Email('default');
        $employee = $this->Employees->newEntity();
        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug(json_encode( $this->request->getData(), JSON_PRETTY_PRINT)); exit;
            // return $this->redirect(['action' => 'confirmation']);
             $imagearray = $this->request->getData('upload');

            // check image before proceeding
            $extension = array("jpeg", "jpg", "png", "PNG", "JPG", "JPEG");
            if (empty($imagearray['tmp_name'])) {
                $this->Flash->error(__('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb .'));
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

            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }else{
                $image_name = "none.png";
            }

            $email = $this->Employees->find('all')->where([
                'Employees.email' => $this->request->getData('email')
            ])->count();

            if($email > 0){
                //debug(json_encode( "Exists", JSON_PRETTY_PRINT)); exit;
                $this->Flash->error(__('This email is already in use.'));
                return $this->redirect($this->referer());
            }
            

            // end file check
            $countemp = $this->Employees->find('all')
            ->where(
                [
                    'AND'=>[
                        'positioncategory_id'=>$this->request->getData('positioncategory_id'),
                        'position_id'=>$this->request->getData('position_id')
                    ]
                ]
            )->count();
            $concat = $countemp + 1;
            $positioncattable = TableRegistry::get('Positioncategories');
            $positioncatcode = $positioncattable->find('all')->where(['id'=>$this->request->getData('positioncategory_id')])->first();
            //debug(json_encode(  $positioncatcode, JSON_PRETTY_PRINT)); exit;
            $catcode = $positioncatcode->code;

            $positiontable = TableRegistry::get('Positions');
            $positioncode = $positiontable->find('all')->where(['id'=>$this->request->getData('position_id')])->first();
            //debug(json_encode(  $positioncode, JSON_PRETTY_PRINT)); exit;
            $postcode = $positioncode->code;

            $code = $catcode."/".$postcode."/".$concat;
            //debug(json_encode( $code, JSON_PRETTY_PRINT)); exit;

            $employee = $this->Employees->patchEntity($employee, $this->request->getData());
            $employee->code = $code;
            $employee->photo = $image_name;
            $employee->dob = $this->request->getData('date');
            $employee->email = $this->request->getData('email');
            $employee->remark = "";
            $employee->positioncategory_id = $this->request->getData('positioncategory_id');
            $employee->faculty_id = $this->request->getData('faculty_id');

            if ($this->Employees->save($employee)) {
                //$this->Flash->success(__('The employee has been saved.'));
                // save class of degree
                $degreetable = TableRegistry::get('Degrees');
                $degreeEnt = $degreetable->newEntity();
                $degree = $degreetable->patchEntity($degreeEnt, $this->request->getData());
                $degree->employee_id = $employee->id;
                $degree->deg_id = $this->request->getData('deg_id');
                $degreetable->save($degree);

                // save education if any
                if (!empty($this->request->getData('qualificationname'))) {
                    // list is empty.
                    $array = $this->request->getData('qualificationname');
                    $array2 = $this->request->getData('qualificationyear');

                    $qualificationtable = TableRegistry::get('Qualifications');
                    foreach($array as $index => $char) {
                        $qualificationEnt = $qualificationtable->newEntity();
                        $qualification = $qualificationtable->patchEntity($qualificationEnt, $this->request->getData());
                        $qualification->employee_id = $employee->id;
                        $qualification->qualificationname = $char;
                        $qualification->qualificationyear = $array2[$index];
                        $qualificationtable->save($qualification);
                    }
                } // end Qualification

                if (!empty($this->request->getData('experiencename'))) {
                    $array = $this->request->getData('experiencename');
                    $array2 = $this->request->getData('experienceyearstart');
                    $array3 = $this->request->getData('experienceyearend');

                    $experiencetable = TableRegistry::get('Experiences');
                    foreach($array as $index => $char) {
                        $experienceEnt = $experiencetable->newEntity();
                        $experience = $experiencetable->patchEntity($experienceEnt, $this->request->getData());
                        $experience->employee_id = $employee->id;
                        $experience->experiencename = $char;
                        $experience->experienceyearstart = $array2[$index];
                        $experience->experienceyearend = $array3[$index];
                        $experiencetable->save($experience);
                        //debug(json_encode( $char."-".$array2[$index]."-".$array3[$index], JSON_PRETTY_PRINT)); exit;
                    }
                }

                if (!empty($this->request->getData('publicationcategory_id'))) {
                    $array = $this->request->getData('publicationcategory_id');
                    $array2 = $this->request->getData('publicationothers');
                    $array3 = $this->request->getData('publicationnumber');
                    //debug(json_encode( $array, JSON_PRETTY_PRINT));
                    //debug(json_encode( $array2, JSON_PRETTY_PRINT));
                    //debug(json_encode( $array3, JSON_PRETTY_PRINT)); exit;
                    $publicationtable = TableRegistry::get('Publications');
                    foreach($array as $index => $char) {
                        $publicationEnt = $publicationtable->newEntity();
                        $publication = $publicationtable->patchEntity($publicationEnt, $this->request->getData());
                        $publication->employee_id = $employee->id;
                        $publication->publicationcategory_id = $char;
                        $publication->others = $array2[$index];
                        $publication->publicationnumber = $array3[$index];
                        $publicationtable->save($publication);
                    }
                }

                if (!empty($this->request->getData('reffullname'))) {
                    $array = $this->request->getData('refemail');
                    $array2 = $this->request->getData('refphone');
                    $array3 = $this->request->getData('refjobtitle');
                    $array4 = $this->request->getData('refcompany');
                    $array5 = $this->request->getData('reffullname');
                    $reftable = TableRegistry::get('Refs');
                    foreach($array as $index => $char) {
                        $refEnt = $reftable->newEntity();
                        $ref = $reftable->patchEntity($refEnt, $this->request->getData());
                        $ref->employee_id = $employee->id;
                        $ref->reffullname = $array5[$index];
                        $ref->refemail = $array[$index];
                        $ref->refphone = $array2[$index];
                        $ref->refjobtitle = $array3[$index];
                        $ref->refcompany = $array4[$index];
                        $reftable->save($ref);
                        // send email here
                        $to = $array[$index] != "" ? $array[$index] : "example@domain.com";
                        $data = array(
                            'fullname' => $array5[$index],
                            'employeename' => $employee->firstname." ".$employee->surname,
                            'link' => BASE_URL.'employees/reference/'.$ref->id,
                        );
                        $email->setFrom(['no-reply@fuhso.ng' => 'FUHSO Reference'])
                        ->setEmailFormat('html')
                        ->setTo($to)
                        ->setSubject('Reference Letter')
                        ->setviewVars($data)
                        ->viewBuilder()
                        ->setTemplate('ref');
                        $email->send();
                    }
                }
                
                //return $this->redirect($this->referer());
                $this->request->session()->write('userData', $employee);
                return $this->redirect(['action' => 'confirmation']);
            }
            $this->Flash->error(__('Your application could not be submitted, please check the form and try again.'));
            //debug(json_encode( $this->request->getData(), JSON_PRETTY_PRINT)); exit;
        }
        $factable = TableRegistry::get('Faculties');
        $degs = $this->Employees->Degs->find('list', ['limit' => 200]);
        $genders = $this->Employees->Genders->find('list', ['limit' => 200]);
        $positions = $this->Employees->Positions->find('list', ['limit' => 200]);
        //$degrees = $this->Employees->Degrees->find('list', ['limit' => 200]);
        $states = $this->Employees->States->find('list', ['limit' => 200]);
        $lgas = $this->Employees->Lgas->find('list', ['limit' => 200]);
        $faculties = $factable->find('list', ['limit' => 200]);
        //$courses = $this->Employees->Courses->find('list', ['limit' => 200]);
        $positioncategories = $this->Employees->Positioncategories->find('list', ['limit' => 200]);
        $publicationcategories = $this->Employees->Publicationcategories->find('list', ['limit' => 200]);
        $publicationtypes = $this->Employees->Publicationtypes->find('list', ['limit' => 200]);
        //debug(json_encode( $publicationtypes, JSON_PRETTY_PRINT)); exit;
        $pageTile = 'apply';
        $this->set(compact('pageTile'));
        $this->set(compact('employee', 'genders', 'positions', 'states', 'lgas','degs',
        'positioncategories','publicationcategories','publicationtypes','faculties'));
        $this->viewBuilder()->setLayout('form');
    }


    public function position($id){
        $positiontable = TableRegistry::get('Positions');
        $positions = $positiontable->find('list')->where(['positioncategory_id'=>$id]);
        $this->set(compact('positions'));
    }


    public function confirmation(){
        $applicantData = $this->request->session()->read('userData');
        $this->set(compact('applicantData'));
        //debug(json_encode( $this->request->session()->read('userData'), JSON_PRETTY_PRINT)); exit;
        $pageTile = 'confirmation';
        $this->set(compact('pageTile'));
        $this->viewBuilder()->setLayout('general');
    }

    public function reference($id){
        $referencetable = TableRegistry::get('Refs');
        $refs = $referencetable->find('all')
        ->where(['Refs.id'=>$id])
        ->contain(['Employees','Employees.Positions'])
        ->first();
        if ($this->request->is(['patch', 'post', 'put'])) {
            //debug(json_encode( $refs->employee->id, JSON_PRETTY_PRINT));exit;
            $rectable = TableRegistry::get('Recommendations');
            $recEnt = $rectable->newEntity();
            $recommendations = $rectable->patchEntity($recEnt, $this->request->getData());
            $recommendations->employee_id = $refs->employee->id;
            //debug(json_encode( $recommendations, JSON_PRETTY_PRINT));exit;
            if($rectable->save($recommendations)) {
                $this->Flash->success(__('Recommendation has been sent.'));
                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('Your recommendation could not be submitted, please check the form and try again.'));
        }

        //$this->set('employee', $employee);
        //debug(json_encode( $refs, JSON_PRETTY_PRINT));
        $pageTile = 'reference';
        $this->set(compact('pageTile'));
        $this->set(compact('refs'));
        $this->viewBuilder()->setLayout('general');
    }


     //function for adding image to a property
      public function addimage($imagearray) {
         $folder_upload = "img/passports/";
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

      public function addqualification(){
        $this->paginate = [
            'contain' => ['Genders', 'Positions', 'Degs', 'States', 'Lgas'],
        ];
        $employees = $this->paginate($this->Employees);
        $this->set(compact('employees'));
      }

      public function export() {
        $this->response->download('export.csv');
        $category = $this->request->getData('positioncategory_id');
        $position = $this->request->getData('position_id');
        if(empty($category) && empty($position)){
            $data = $this->Employees->find('all')
            ->contain(['Genders','Positions','States','Lgas'])
            ->toArray();
        }elseif(!empty($category) && !empty($position)){
            $data = $this->Employees->find('all')
            ->where(['Employees.positioncategory_id'=>$category])
            ->where(['Employees.position_id'=>$position])
            ->contain(['Genders','Positions','States','Lgas'])
            ->toArray();
        }elseif(!empty($category) && empty($position)){
            $data = $this->Employees->find('all')
            ->where(['Employees.positioncategory_id'=>$category])
            ->contain(['Genders','Positions','States','Lgas'])
            ->toArray();
        }elseif(empty($category) && !empty($position)){
            $data = $this->Employees->find('all')
            ->where(['Employees.position_id'=>$position])
            ->contain(['Genders','Positions','States','Lgas'])
            ->toArray();
        }
        $_serialize = 'data';
        $_header = [
            'ID', 'CODE', 'FIRSTNAME','SURNAME','OTHERNAME',
            'DATE OF BIRTH',
            'YEAR OF TEACHING','LAST POSITION',
            'ADDRESS','PHONE NUMBER','EMAIL','DATE APPLIED','GENDER','POSITION',
            'STATE','LGA'
        ];
        $_extract = [
            'id', 'code', 'firstname','surname','othername',
            'dob',
            'yearofteaching','lastposition',
            'address','phone','email','applied_on',
            'gender.name','position.name','state.name','lga.name'
        ];
        $this->set(compact('data', '_serialize','_header', '_extract'));
        $this->viewBuilder()->className('CsvView.Csv');
        return;
      }

      public function sort(){
        if ($this->request->is(['patch', 'post', 'put'])) {
            $positioncategory = $this->request->getData('positioncategory_id');
            $position = $this->request->getData('position_id');
            $faculty = $this->request->getData('faculty_id');

            if(!empty($positioncategory) && !empty($position) && !empty($faculty)){
                $result = $this->Employees->find('all')
                ->contain(['Genders', 'Positions', 'States', 'Lgas','Positioncategories'])
                ->where(['Employees.positioncategory_id'=>$positioncategory])
                ->andWhere([
                    'Employees.position_id'=>$position,
                    'Employees.faculty_id'=>$faculty
                ]);
                $this->set(compact('result'));
                //debug(json_encode( $result, JSON_PRETTY_PRINT));exit;
            }elseif(!empty($positioncategory) && empty($position) && empty($faculty)){
                $result = $this->Employees->find('all')
                ->contain(['Genders', 'Positions', 'States', 'Lgas','Positioncategories'])
                ->where(['Employees.positioncategory_id'=>$positioncategory]);
                $this->set(compact('result'));
                //debug(json_encode( $result, JSON_PRETTY_PRINT));exit;
            }elseif(!empty($positioncategory) && !empty($position) && empty($faculty)){
                $result = $this->Employees->find('all')
                ->contain(['Genders', 'Positions', 'States', 'Lgas','Positioncategories'])
                ->where(['Employees.positioncategory_id'=>$positioncategory])
                ->andWhere([
                    'Employees.position_id'=>$position
                ]);
                $this->set(compact('result'));
                //debug(json_encode( $result, JSON_PRETTY_PRINT));exit;
            }elseif (!empty($positioncategory) && empty($position) && !empty($faculty)) {
                $result = $this->Employees->find('all')
                ->contain(['Genders', 'Positions', 'States', 'Lgas','Positioncategories'])
                ->where(['Employees.positioncategory_id'=>$positioncategory])
                ->andWhere([
                    'Employees.faculty_id'=>$faculty
                ]);
                $this->set(compact('result'));
                //debug(json_encode( $result, JSON_PRETTY_PRINT));exit;
            }elseif (empty($positioncategory) && !empty($position) && !empty($faculty)) {
                $result = $this->Employees->find('all')
                ->contain(['Genders', 'Positions', 'States', 'Lgas','Positioncategories'])
                ->where(['Employees.position_id'=>$position])
                ->andWhere([
                    'Employees.faculty_id'=>$faculty
                ]);
                $this->set(compact('result'));
                //debug(json_encode( $result, JSON_PRETTY_PRINT));exit;
            }elseif (empty($positioncategory) && !empty($position) && empty($faculty)) {
                $result = $this->Employees->find('all')
                ->contain(['Genders', 'Positions', 'States', 'Lgas','Positioncategories'])
                ->where(['Employees.position_id'=>$position]);
                $this->set(compact('result'));
                //debug(json_encode( $result, JSON_PRETTY_PRINT));exit;
            }elseif (empty($positioncategory) && empty($position) && !empty($faculty)) {
                $result = $this->Employees->find('all')
                ->contain(['Genders', 'Positions', 'States', 'Lgas','Positioncategories'])
                ->where(['Employees.faculty_id'=>$faculty]);
                $this->set(compact('result'));
                //debug(json_encode( $result, JSON_PRETTY_PRINT));exit;
            }else {
                $result = $this->Employees->find('all')
                ->contain(['Genders', 'Positions', 'States', 'Lgas','Positioncategories']);
                $this->set(compact('result'));
                //debug(json_encode( $result, JSON_PRETTY_PRINT));exit;
            }
           
        }
        $factable = TableRegistry::get('Faculties');
        $this->viewBuilder()->setLayout('admin');
        $positioncategories = $this->Employees->Positioncategories->find('list', ['limit' => 200]);
        $positions = $this->Employees->Positions->find('list', ['limit' => 200]);
        $faculties = $factable->find('list', ['limit' => 200]);
        $this->set(compact('positioncategories','positions','faculties'));
      }

      public function beforeFilter(Event $event) {
        $this->Auth->allow(['application','confirmation','addqualification','position','reference']);
        if (!$this->Auth->user()) {
            $this->Auth->setConfig('authError', false);
        }
      }
}
