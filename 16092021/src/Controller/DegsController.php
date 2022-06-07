<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Degs Controller
 *
 * @property \App\Model\Table\DegsTable $Degs
 *
 * @method \App\Model\Entity\Deg[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DegsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $degs = $this->paginate($this->Degs);

        $this->set(compact('degs'));
    }

    /**
     * View method
     *
     * @param string|null $id Deg id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deg = $this->Degs->get($id, [
            'contain' => [],
        ]);

        $this->set('deg', $deg);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deg = $this->Degs->newEntity();
        if ($this->request->is('post')) {
            $deg = $this->Degs->patchEntity($deg, $this->request->getData());
            if ($this->Degs->save($deg)) {
                $this->Flash->success(__('The deg has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deg could not be saved. Please, try again.'));
        }
        $this->set(compact('deg'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Deg id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deg = $this->Degs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deg = $this->Degs->patchEntity($deg, $this->request->getData());
            if ($this->Degs->save($deg)) {
                $this->Flash->success(__('The deg has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deg could not be saved. Please, try again.'));
        }
        $this->set(compact('deg'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Deg id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deg = $this->Degs->get($id);
        if ($this->Degs->delete($deg)) {
            $this->Flash->success(__('The deg has been deleted.'));
        } else {
            $this->Flash->error(__('The deg could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
