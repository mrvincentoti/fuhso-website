<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Abouts Controller
 *
 * @property \App\Model\Table\AboutsTable $Abouts
 *
 * @method \App\Model\Entity\About[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AboutsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $abouts = $this->paginate($this->Abouts);

        $this->set(compact('abouts'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * View method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $about = $this->Abouts->get($id, [
            'contain' => [],
        ]);

        $this->set('about', $about);
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $about = $this->Abouts->newEntity();
        if ($this->request->is('post')) {
            $about = $this->Abouts->patchEntity($about, $this->request->getData());
            if ($this->Abouts->save($about)) {
                $this->Flash->success(__('The about has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about could not be saved. Please, try again.'));
        }
        $this->set(compact('about'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Edit method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $about = $this->Abouts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $about = $this->Abouts->patchEntity($about, $this->request->getData());
            if ($this->Abouts->save($about)) {
                $this->Flash->success(__('Saved Successfully'));

                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('The about could not be saved. Please, try again.'));
        }
        $this->set(compact('about'));
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Delete method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $about = $this->Abouts->get($id);
        if ($this->Abouts->delete($about)) {
            $this->Flash->success(__('The about has been deleted.'));
        } else {
            $this->Flash->error(__('The about could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
