<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Applicants'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Applicants', 'Roles'],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $applicants = $this->Users->Applicants->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'applicants', 'roles'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $applicants = $this->Users->Applicants->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'applicants', 'roles'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function admindashboard(){
        $emptable = TableRegistry::get('Employees');
        $employees = $emptable->find('all')->count();
        $users = $this->Users->find('all')->count();

        $teamtable = TableRegistry::get('Teams');
        $teams = $teamtable->find('all')->count();

        $positiontable = TableRegistry::get('Positions');
        $positions = $positiontable->find('all')->count();


        //debug(json_encode( $positions, JSON_PRETTY_PRINT)); exit;
        $this->set(compact('employees'));
        $this->set(compact('users'));
        $this->set(compact('teams'));
        $this->set(compact('positions'));
        $this->viewBuilder()->setLayout('admin');
    }

    public function login(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            //debug(json_encode( $user, JSON_PRETTY_PRINT)); exit;
            if ($user) {
                $this->Auth->setUser($user);
                $this->request->getSession()->write('usersinfo', $user);
                return $this->redirect(['controller' => 'Users', 'action' => 'admindashboard']);
            } else {
                $this->Flash->error('Invalid username/password');
            }
        }
        $this->set(compact('user'));
        $this->viewBuilder()->setLayout('login');
      }
  
      public function logout() {
        $this->request->getSession()->destroy();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
      }
}
