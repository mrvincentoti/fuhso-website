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

    public function landingPage(){
        $this->viewBuilder()->setLayout('ui');
    }

    public function homePage(){
        $this->viewBuilder()->setLayout('ui');
    }

    public function getColors($cat){

        $COLL = array("#33617a","#107a9f","#01729f","#3fb0de","#63cbd7","#286466","#7796ba","#788EA4","#a5c3e1",
        "#365b97","#103854","#201445;","#050a2b","#333956","#4e2b68"
        );
        $VARSITY = array("#f4d400","#d9024a","#74b71f");
        $COLLEGE = array("#f4d400","#d9024a","#74b71f");
        $CHUNKY = array("#f4d400","#d9024a","#74b71f");
        $CAMPUS = array("#f4d400","#d9024a","#74b71f");
        $ELECTRIC = array("#f4d400","#d9024a","#74b71f");
        $BASEBALL = array("#f4d400","#d9024a","#74b71f");
        $ZIP = array("#f4d400","#d9024a","#74b71f");
        $RETRO = array("#f4d400","#d9024a","#74b71f");

        $data = "";
        if($cat == "COLL"){
            $data = $COLL;
            $this->set("title", "College Hoodie");
            $this->set('description','The classic look. Our much-loved College Hoodie. Perfect for school leavers, students, societies and sports-teams.');
            $this->set(compact('data'));
        }elseif($cat == "VARSITY"){
            $data = $VARSITY;
            $this->set("title", "Varsity Hoodie");
            $this->set('description','The classic look. Our much-loved College Hoodie. Perfect for school leavers, students, societies and sports-teams.');
            $this->set(compact('data'));
        }elseif($cat == "COLLEGE"){
            $data = $COLLEGE;
            $this->set("title", "College Sweatshirt");
            $this->set('description','The classic look. Our much-loved College Hoodie. Perfect for school leavers, students, societies and sports-teams.');
            $this->set(compact('data'));
        }elseif($cat == "CHUNKY"){
            $data = $CHUNKY;
            $this->set("title", "Chunky Zip Hoodie");
            $this->set('description','The classic look. Our much-loved College Hoodie. Perfect for school leavers, students, societies and sports-teams.');
            $this->set(compact('data'));
        }elseif($cat == "CAMPUS"){
            $data = $CAMPUS;
            $this->set("title", "Campus Hoodie");
            $this->set('description','The classic look. Our much-loved College Hoodie. Perfect for school leavers, students, societies and sports-teams.');
            $this->set(compact('data'));
        }elseif($cat == "ELECTRIC"){
            $data = $ELECTRIC;
            $this->set("title", "Electric Hoodie");
            $this->set('description','The classic look. Our much-loved College Hoodie. Perfect for school leavers, students, societies and sports-teams.');
            $this->set(compact('data'));
        }elseif($cat == "BASEBALL"){
            $data = $BASEBALL;
            $this->set("title", "Baseball Hoodie");
            $this->set('description','The classic look. Our much-loved College Hoodie. Perfect for school leavers, students, societies and sports-teams.');
            $this->set(compact('data'));
        }elseif($cat == "ZIP"){
            $data = $ZIP;
            $this->set("title", "Zip Hoodie");
            $this->set('description','The classic look. Our much-loved College Hoodie. Perfect for school leavers, students, societies and sports-teams.');
            $this->set(compact('data'));
        }elseif($cat == "RETRO"){
            $data = $RETRO;
            $this->set("title", "Retro Zip Hoodie");
            $this->set('description','The classic look. Our much-loved College Hoodie. Perfect for school leavers, students, societies and sports-teams.');
            $this->set(compact('data'));
        }
        //$colors = json_encode($data);
        //var_dump(gettype($data));exit;
        //var_dump($colors["ZIP"]);exit;
    }
}
