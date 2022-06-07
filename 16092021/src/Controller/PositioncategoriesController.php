<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Positioncategories Controller
 *
 * @property \App\Model\Table\PositioncategoriesTable $Positioncategories
 *
 * @method \App\Model\Entity\Positioncategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PositioncategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $positioncategories = $this->paginate($this->Positioncategories);

        $this->set(compact('positioncategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Positioncategory id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $positioncategory = $this->Positioncategories->get($id, [
            'contain' => ['Positions'],
        ]);

        $this->set('positioncategory', $positioncategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $positioncategory = $this->Positioncategories->newEntity();
        if ($this->request->is('post')) {
            $positioncategory = $this->Positioncategories->patchEntity($positioncategory, $this->request->getData());
            if ($this->Positioncategories->save($positioncategory)) {
                $this->Flash->success(__('The positioncategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positioncategory could not be saved. Please, try again.'));
        }
        $this->set(compact('positioncategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Positioncategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $positioncategory = $this->Positioncategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $positioncategory = $this->Positioncategories->patchEntity($positioncategory, $this->request->getData());
            if ($this->Positioncategories->save($positioncategory)) {
                $this->Flash->success(__('The positioncategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The positioncategory could not be saved. Please, try again.'));
        }
        $this->set(compact('positioncategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Positioncategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $positioncategory = $this->Positioncategories->get($id);
        if ($this->Positioncategories->delete($positioncategory)) {
            $this->Flash->success(__('The positioncategory has been deleted.'));
        } else {
            $this->Flash->error(__('The positioncategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
