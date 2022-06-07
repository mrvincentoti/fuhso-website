<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Refs Controller
 *
 * @property \App\Model\Table\RefsTable $Refs
 *
 * @method \App\Model\Entity\Ref[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RefsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees'],
        ];
        $refs = $this->paginate($this->Refs);

        $this->set(compact('refs'));
    }

    /**
     * View method
     *
     * @param string|null $id Ref id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ref = $this->Refs->get($id, [
            'contain' => ['Employees'],
        ]);

        $this->set('ref', $ref);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ref = $this->Refs->newEntity();
        if ($this->request->is('post')) {
            $ref = $this->Refs->patchEntity($ref, $this->request->getData());
            if ($this->Refs->save($ref)) {
                $this->Flash->success(__('The ref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ref could not be saved. Please, try again.'));
        }
        $employees = $this->Refs->Employees->find('list', ['limit' => 200]);
        $this->set(compact('ref', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ref id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ref = $this->Refs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ref = $this->Refs->patchEntity($ref, $this->request->getData());
            if ($this->Refs->save($ref)) {
                $this->Flash->success(__('The ref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ref could not be saved. Please, try again.'));
        }
        $employees = $this->Refs->Employees->find('list', ['limit' => 200]);
        $this->set(compact('ref', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ref id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ref = $this->Refs->get($id);
        if ($this->Refs->delete($ref)) {
            $this->Flash->success(__('The ref has been deleted.'));
        } else {
            $this->Flash->error(__('The ref could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
