<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Waecs Controller
 *
 * @property \App\Model\Table\WaecsTable $Waecs
 *
 * @method \App\Model\Entity\Waec[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WaecsController extends AppController
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
        $waecs = $this->paginate($this->Waecs);

        $this->set(compact('waecs'));
    }

    /**
     * View method
     *
     * @param string|null $id Waec id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $waec = $this->Waecs->get($id, [
            'contain' => ['Applicants'],
        ]);

        $this->set('waec', $waec);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $waec = $this->Waecs->newEntity();
        if ($this->request->is('post')) {
            $waec = $this->Waecs->patchEntity($waec, $this->request->getData());
            if ($this->Waecs->save($waec)) {
                $this->Flash->success(__('The waec has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The waec could not be saved. Please, try again.'));
        }
        $applicants = $this->Waecs->Applicants->find('list', ['limit' => 200]);
        $this->set(compact('waec', 'applicants'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Waec id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $waec = $this->Waecs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $waec = $this->Waecs->patchEntity($waec, $this->request->getData());
            if ($this->Waecs->save($waec)) {
                $this->Flash->success(__('The waec has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The waec could not be saved. Please, try again.'));
        }
        $applicants = $this->Waecs->Applicants->find('list', ['limit' => 200]);
        $this->set(compact('waec', 'applicants'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Waec id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $waec = $this->Waecs->get($id);
        if ($this->Waecs->delete($waec)) {
            $this->Flash->success(__('The waec has been deleted.'));
        } else {
            $this->Flash->error(__('The waec could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
