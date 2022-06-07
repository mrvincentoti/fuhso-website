<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Publicationtypes Controller
 *
 * @property \App\Model\Table\PublicationtypesTable $Publicationtypes
 *
 * @method \App\Model\Entity\Publicationtype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PublicationtypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Publicationcategories'],
        ];
        $publicationtypes = $this->paginate($this->Publicationtypes);

        $this->set(compact('publicationtypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Publicationtype id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publicationtype = $this->Publicationtypes->get($id, [
            'contain' => ['Publicationcategories'],
        ]);

        $this->set('publicationtype', $publicationtype);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publicationtype = $this->Publicationtypes->newEntity();
        if ($this->request->is('post')) {
            $publicationtype = $this->Publicationtypes->patchEntity($publicationtype, $this->request->getData());
            if ($this->Publicationtypes->save($publicationtype)) {
                $this->Flash->success(__('The publicationtype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicationtype could not be saved. Please, try again.'));
        }
        $publicationcategories = $this->Publicationtypes->Publicationcategories->find('list', ['limit' => 200]);
        $this->set(compact('publicationtype', 'publicationcategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Publicationtype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publicationtype = $this->Publicationtypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publicationtype = $this->Publicationtypes->patchEntity($publicationtype, $this->request->getData());
            if ($this->Publicationtypes->save($publicationtype)) {
                $this->Flash->success(__('The publicationtype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publicationtype could not be saved. Please, try again.'));
        }
        $publicationcategories = $this->Publicationtypes->Publicationcategories->find('list', ['limit' => 200]);
        $this->set(compact('publicationtype', 'publicationcategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Publicationtype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publicationtype = $this->Publicationtypes->get($id);
        if ($this->Publicationtypes->delete($publicationtype)) {
            $this->Flash->success(__('The publicationtype has been deleted.'));
        } else {
            $this->Flash->error(__('The publicationtype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
