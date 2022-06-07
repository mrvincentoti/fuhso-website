<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(...$path)
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function landing(){
        $aboutstable = TableRegistry::get('Abouts');
        $eventtable = TableRegistry::get('Events');
        $teamtable = TableRegistry::get('Teams');
        $bannertable = TableRegistry::get('Banners');
        $faqtable = TableRegistry::get('Faqs');

        $abouts = $aboutstable->find('all')->first();
        $this->set('abouts', $abouts);

        $events = $eventtable->find()
        ->where(['type' => 1])
        ->limit(3)
        ->order(['id' => 'DESC']);
        $this->set('events', $events);
        

        $news = $eventtable->find()
        ->where(['type' => 2])
        ->limit(3)
        ->order(['id' => 'DESC']);
        $this->set('news', $news);

        $features = $eventtable->find()
        ->where(['featured' => 1])
        ->limit(4)
        ->order(['id' => 'DESC']);
        $this->set('features', $features);

        $officers = $teamtable->find('all')
        ->limit(2);
        $this->set('officers', $officers);
        
        $banners = $bannertable->find()
        ->limit(5)
        ->order(['id' => 'DESC']);
        $this->set('banners', $banners);

        $faqs = $faqtable->find()
        ->limit(10)
        ->order(['date_added' => 'DESC']);
        $this->set('faqs', $faqs);

        $pageTitle = 'home';
        $this->set(compact('pageTitle'));
        $this->viewBuilder()->setLayout('fe');
    }

    public function about(){
        $aboutstable = TableRegistry::get('Abouts');
        $abouts = $aboutstable->find('all')->first();
        $this->set(compact('abouts'));

        $eventstable = TableRegistry::get('Events');
        $relatedEvents = $eventstable->find('all')
        ->where()
        ->contain([])
        ->limit(5);
         $this->set('relatedevents', $relatedEvents);

         $teamtable = TableRegistry::get('Teams');
         $officers = $teamtable->find('all')
        ->limit(2);
        $this->set('officers', $officers);


        $pageTitle = 'about';
        $this->set(compact('pageTitle'));
        $this->viewBuilder()->setLayout('fe');
    }

    public function principal(){
        $eventstable = TableRegistry::get('Events');
        $relatedEvents = $eventstable->find('all')
        ->where()
        ->contain([])
        ->limit(5);

        $teamtable = TableRegistry::get('Teams');
         $officers = $teamtable->find('all')->where(['category'=>1]);
        $this->set('officers', $officers);
        //debug(json_encode( $officers, JSON_PRETTY_PRINT)); exit;
        $pageTitle = '';
        $this->set(compact('pageTitle'));
        $this->set('relatedevents', $relatedEvents);
        $this->viewBuilder()->setLayout('fe');
    }

    public function members(){
        $eventstable = TableRegistry::get('Events');
        $relatedEvents = $eventstable->find('all')
        ->where()
        ->contain([])
        ->limit(5);

        $teamtable = TableRegistry::get('Teams');
         $officers = $teamtable->find('all')->where(['category'=>2]);
        $this->set('members', $officers);
        //debug(json_encode( $officers, JSON_PRETTY_PRINT)); exit;
        $pageTitle = '';
        $this->set(compact('pageTitle'));
        $this->set('relatedevents', $relatedEvents);
        $this->viewBuilder()->setLayout('fe');
    }

    public function vc(){
        $pageTitle = '';
        $this->set(compact('pageTitle'));
        $this->viewBuilder()->setLayout('fe');
    }

    public function faculty(){
        $teamtable = TableRegistry::get('Teams');
        $officers = $teamtable->find('all')
        ->limit(2);
        $this->set('officers', $officers);

        $eventstable = TableRegistry::get('Events');
        $relatedEvents = $eventstable->find('all')
        ->where()
        ->contain([])
        ->limit(5);
         $this->set('relatedevents', $relatedEvents);

        $pageTitle = 'faculties';
        $this->set(compact('pageTitle'));
        $this->viewBuilder()->setLayout('fe');
    }

    public function news(){
        $teamtable = TableRegistry::get('Teams');
        $officers = $teamtable->find('all')
        ->limit(2);
        $this->set('officers', $officers);

        $eventtable = TableRegistry::get('Events');
        $events = $eventtable->find('all')
        ->order(['date'=>'ASC']);
        $this->set('events', $this->paginate($events));
       
        $pageTitle = 'news';
        $this->set(compact('pageTitle'));
        $this->viewBuilder()->setLayout('fe');
    }

    public function faq(){
        $teamtable = TableRegistry::get('Teams');
        $officers = $teamtable->find('all')
        ->limit(2);
        $this->set('officers', $officers);

        $eventstable = TableRegistry::get('Events');
        $relatedEvents = $eventstable->find('all')
        ->where()
        ->contain([])
        ->limit(5);
         $this->set('relatedevents', $relatedEvents);

        $pageTitle = 'faq';
        $this->set(compact('pageTitle'));
        $this->viewBuilder()->setLayout('fe');
    }

    public function contact(){
        $notifice = new Email();
        if ($this->request->is('post')) {
             $this->Flash->success(__('Message sent'));
                return $this->redirect($this->referer());
            $vc = $this->request->getData('captcha');
            if(trim($vc) != '6'){
            $this->Flash->error(__('The verification number you entered is incorrect'));
                return $this->redirect(['action' => 'contact']);
            }else{
                $mail = $this->request->getData('email');
                $fullname = $this->request->getData('name');
                $message = $this->request->getData('message');

                $notification = '<!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Activation Link</title>
                        <style>
                            .wrapper {
                            padding: 20px;
                            color: #444;
                            font-size: 1.3em;
                            }
                            a {
                            text-decoration: none;
                            padding: 8px 15px;
                            color: #blue;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="wrapper">
                            <p>Hello.</p>
                            <p>You have a new message</p>
                            <p>Name: '.$fullname.'</p>
                            <p>Email: '.$mail.'</p>
                            <p>Message: '.$message.'</p>
                            <p>Thank You</p>
                        </div>
                    </body>
                </html>';
 
                $notifice->setTransport('mail');
                $notifice->setEmailFormat('html');
                $notifice->setFrom(['noreply@fuhso.edu.ng' => 'FUHSO'])
                ->addTo("info@fuhso.edu.ng")
                ->setSubject('Contact')
                ->send($notification);
                $this->Flash->success(__('Message sent'));
                return $this->redirect($this->referer());
            }   
        }
        $teamtable = TableRegistry::get('Teams');
        $officers = $teamtable->find('all')
        ->limit(2);
        $this->set('officers', $officers);

        $eventstable = TableRegistry::get('Events');
        $relatedEvents = $eventstable->find('all')
        ->where()
        ->contain([])
        ->limit(5);
         $this->set('relatedevents', $relatedEvents);

        $pageTitle = 'contacts';
        $this->set(compact('pageTitle'));
        $this->viewBuilder()->setLayout('fe');
    }



    public function beforeFilter(Event $event) {
        $this->Auth->allow(['landing','about','principal','vc','faculty','news','faq','contact','members']);
        if (!$this->Auth->user()) {
            $this->Auth->setConfig('authError', false);
        }
    }
}
