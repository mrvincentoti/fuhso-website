<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lgas Controller
 *
 * @property \App\Model\Table\LgasTable $Lgas
 *
 * @method \App\Model\Entity\Lga[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LgasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States'],
        ];
        $lgas = $this->paginate($this->Lgas);

        $this->set(compact('lgas'));
    }

    /**
     * View method
     *
     * @param string|null $id Lga id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lga = $this->Lgas->get($id, [
            'contain' => ['States', 'Applicants'],
        ]);

        $this->set('lga', $lga);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lga = $this->Lgas->newEntity();
        if ($this->request->is('post')) {
            $lga = $this->Lgas->patchEntity($lga, $this->request->getData());
            if ($this->Lgas->save($lga)) {
                $this->Flash->success(__('The lga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lga could not be saved. Please, try again.'));
        }
        $states = $this->Lgas->States->find('list', ['limit' => 200]);
        $this->set(compact('lga', 'states'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lga id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lga = $this->Lgas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lga = $this->Lgas->patchEntity($lga, $this->request->getData());
            if ($this->Lgas->save($lga)) {
                $this->Flash->success(__('The lga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lga could not be saved. Please, try again.'));
        }
        $states = $this->Lgas->States->find('list', ['limit' => 200]);
        $this->set(compact('lga', 'states'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lga id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lga = $this->Lgas->get($id);
        if ($this->Lgas->delete($lga)) {
            $this->Flash->success(__('The lga has been deleted.'));
        } else {
            $this->Flash->error(__('The lga could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
