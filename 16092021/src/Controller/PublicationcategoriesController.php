<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Publicationcategories Controller
 *
 * @property \App\Model\Table\PublicationcategoriesTable $Publicationcategories
 *
 * @method \App\Model\Entity\Publicationcategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PublicationcategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $publicationcategories = $this->paginate($this->Publicationcategories);

        $this->set(compact('publicationcategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Publicationcategory id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publicationcategory = $this->Publicationcategories->get($id, [
            'contain' => [],
        ]);

        $this->set('publicationcategory', $publicationcategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publicationcategory = $this->Publicationcategories->newEntity();
        if ($this->request->is('post')) {
            $publicationcategory = $this->Publicationcategories->patchEntity($publicationcategory, $this->request->getData());
            if ($this->Publicationcategories->save($publicationcategory)) {
                $this->Flash->success(__('The publicationcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicationcategory could not be saved. Please, try again.'));
        }
        $this->set(compact('publicationcategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Publicationcategory id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publicationcategory = $this->Publicationcategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publicationcategory = $this->Publicationcategories->patchEntity($publicationcategory, $this->request->getData());
            if ($this->Publicationcategories->save($publicationcategory)) {
                $this->Flash->success(__('The publicationcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicationcategory could not be saved. Please, try again.'));
        }
        $this->set(compact('publicationcategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Publicationcategory id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publicationcategory = $this->Publicationcategories->get($id);
        if ($this->Publicationcategories->delete($publicationcategory)) {
            $this->Flash->success(__('The publicationcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The publicationcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
