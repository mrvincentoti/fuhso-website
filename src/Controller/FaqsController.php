<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
/**
 * Faqs Controller
 *
 * @property \App\Model\Table\FaqsTable $Faqs
 *
 * @method \App\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FaqsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function faq(){
        $teamtable = TableRegistry::get('Teams');
        $officers = $teamtable->find('all')
        ->limit(2);
        $this->set('officers', $officers);

        $eventstable = TableRegistry::get('Events');
        $relatedEvents = $eventstable->find('all')
        ->where()
        ->contain([])
        ->limit(5);
         $this->set('relatedevents', $relatedEvents);

        $faqs = $this->paginate($this->Faqs);
        $pageTitle = 'faq';
        $this->set(compact('pageTitle'));
        $this->set(compact('faqs'));
        $this->viewBuilder()->setLayout('fe');
    }

    public function index()
    {
        $faqs = $this->paginate($this->Faqs);

        $this->set(compact('faqs'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * View method
     *
     * @param string|null $id Faq id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $faq = $this->Faqs->get($id, [
            'contain' => [],
        ]);

        $this->set('faq', $faq);
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $faq = $this->Faqs->newEntity();
        if ($this->request->is('post')) {
            $faq = $this->Faqs->patchEntity($faq, $this->request->getData());
            if ($this->Faqs->save($faq)) {
                $this->Flash->success(__('The faq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The faq could not be saved. Please, try again.'));
        }
        $this->set(compact('faq'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Edit method
     *
     * @param string|null $id Faq id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $faq = $this->Faqs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $faq = $this->Faqs->patchEntity($faq, $this->request->getData());
            if ($this->Faqs->save($faq)) {
                $this->Flash->success(__('The faq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The faq could not be saved. Please, try again.'));
        }
        $this->set(compact('faq'));
        $this->viewBuilder()->setLayout('be');
    }

    /**
     * Delete method
     *
     * @param string|null $id Faq id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $faq = $this->Faqs->get($id);
        if ($this->Faqs->delete($faq)) {
            $this->Flash->success(__('The faq has been deleted.'));
        } else {
            $this->Flash->error(__('The faq could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(Event $event) {
        $this->Auth->allow(['faq']);
        if (!$this->Auth->user()) {
            $this->Auth->setConfig('authError', false);
        }
    }
}
