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
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Event\Event;
use Cake\Utility\Security;

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
        $eventtable = TableRegistry::get('Events');
        $teamtable = TableRegistry::get('Teams');
        $aboutstable = TableRegistry::get('Abouts');
        $events = $eventtable->find('all', [
            'limit'=>3,
            'order' => ['id' => 'DESC']
        ]);
        $singleevent = $eventtable->find('all', [
            'limit'=>5,
            'order' => ['RAND()' => 'DESC']
        ])->first();

        $teams = $teamtable->find('all', [
            'limit'=>9,
            'order' => ['id' => 'ASC']
        ]);

        $threeevents = $eventtable->find('all', [
            'limit'=>3,
            'order' => ['id' => 'DESC', 'RAND()'=>'DESC']
        ]);
        $abouts = $aboutstable->find('all')->first();
        $this->set('abouts', $abouts);

        $pageTile = 'home';
        $this->set(compact('pageTile'));
        $this->set(compact('events','singleevent','threeevents','teams'));
        //debug(json_encode( $abouts, JSON_PRETTY_PRINT)); exit;
        $this->viewBuilder()->setLayout('general');
    }


    public function application(){
        $pageTile = 'application';
        $this->set(compact('pageTile'));
        $this->viewBuilder()->setLayout('general');
    }

    public function about(){
        $eventtable = TableRegistry::get('Events');
        $aboutstable = TableRegistry::get('Abouts');
        $events = $eventtable->find('all', [
            'limit'=>3,
            'order' => ['id' => 'DESC']
        ]);
        $singleevent = $eventtable->find('all', [
            'limit'=>5,
            'order' => ['RAND()' => 'DESC']
        ])->first();

        $threeevents = $eventtable->find('all', [
            'limit'=>3,
            'order' => ['id' => 'DESC', 'RAND()'=>'DESC']
        ]);
        $abouts = $aboutstable->find('all')->first();
        $id = 1;
        $about = $aboutstable->get($id, [
            'contain' => [],
        ]);

        $pageTile = 'about';
        $this->set(compact('pageTile'));
         $this->set(compact('events','singleevent','threeevents'));
         $this->set('abouts', $abouts);
        //debug(json_encode( $abouts, JSON_PRETTY_PRINT)); exit;
        $this->viewBuilder()->setLayout('general');
    }

    public function department(){
        $eventtable = TableRegistry::get('Events');
        $events = $eventtable->find('all', [
            'limit'=>3,
            'order' => ['id' => 'DESC']
        ]);
        $singleevent = $eventtable->find('all', [
            'limit'=>5,
            'order' => ['RAND()' => 'DESC']
        ])->first();

        $threeevents = $eventtable->find('all', [
            'limit'=>3,
            'order' => ['id' => 'DESC', 'RAND()'=>'DESC']
        ]);

        $pageTile = 'department';
        $this->set(compact('pageTile'));
         $this->set(compact('events','singleevent','threeevents'));
        //debug(json_encode( $threeevents, JSON_PRETTY_PRINT)); exit;
        $this->viewBuilder()->setLayout('general');
    }

    public function contact(){
        $email = new Email('default');
        if ($this->request->is('post')) {
          $destination = "fuhsootukpo@gmail.com";
          $sender = $this->request->getData('email');
          $phone = $this->request->getData('phone');
          $fullname = $this->request->getData('name');
          $subject = $this->request->getData('subject');
          $message = $this->request->getData('messege');

          $data = array(
            'sender' => $this->request->getData('email'),
	          'phone' => $this->request->getData('phone'),
            'fullname' => $this->request->getData('name'),
            'subject' => $this->request->getData('subject'),
            'massage' => $this->request->getData('messege'),
          );
          //debug(json_encode($data, JSON_PRETTY_PRINT)); exit;
          $email->setFrom(['no-reply@fuhso.ng' => 'FUHSO Contact'])
          ->setEmailFormat('html')
          ->setTo('fuhsootukpo@gmail.com')
          ->setSubject($subject)
          ->setviewVars($data)
          ->viewBuilder()
          ->setTemplate('screen');
         // $email->send();
          $this->Flash->success(__('Email sent successfully.'));
          return $this->redirect($this->referer());
          //debug(json_encode( $this->request->getData(), JSON_PRETTY_PRINT)); exit;
        }
        $pageTile = 'contact';
        $this->set(compact('pageTile'));
        $this->viewBuilder()->setLayout('general');
    }

    public function requirements(){
        $this->viewBuilder()->setLayout('general');
    }

    public function principal(){
        $teamtable = TableRegistry::get('Teams');

        $teams = $teamtable->find('all', [
            'order' => ['id' => 'ASC']
        ]);
        $pageTile = 'principal';
        $this->set('teams', $teams);
        $this->set(compact('pageTile'));
        $this->viewBuilder()->setLayout('general');
    }

    public function beforeFilter(Event $event) {
        $this->Auth->allow(['requirements','contact','department','about','application','landing','principal']);
        if (!$this->Auth->user()) {
            $this->Auth->setConfig('authError', false);
        }
      }

}
