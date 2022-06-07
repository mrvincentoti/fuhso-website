<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Publications Controller
 *
 * @property \App\Model\Table\PublicationsTable $Publications
 *
 * @method \App\Model\Entity\Publication[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PublicationsController extends AppController
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
        $publications = $this->paginate($this->Publications);

        $this->set(compact('publications'));
    }

    /**
     * View method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publication = $this->Publications->get($id, [
            'contain' => ['Publicationcategories'],
        ]);

        $this->set('publication', $publication);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publication = $this->Publications->newEntity();
        if ($this->request->is('post')) {
            $publication = $this->Publications->patchEntity($publication, $this->request->getData());
            if ($this->Publications->save($publication)) {
                $this->Flash->success(__('The publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publication could not be saved. Please, try again.'));
        }
        $publicationcategories = $this->Publications->Publicationcategories->find('list', ['limit' => 200]);
        $this->set(compact('publication', 'publicationcategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publication = $this->Publications->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publication = $this->Publications->patchEntity($publication, $this->request->getData());
            if ($this->Publications->save($publication)) {
                $this->Flash->success(__('The publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publication could not be saved. Please, try again.'));
        }
        $publicationcategories = $this->Publications->Publicationcategories->find('list', ['limit' => 200]);
        $this->set(compact('publication', 'publicationcategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publication = $this->Publications->get($id);
        if ($this->Publications->delete($publication)) {
            $this->Flash->success(__('The publication has been deleted.'));
        } else {
            $this->Flash->error(__('The publication could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
