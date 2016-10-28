<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Enquiry Controller
 *
 * @property \App\Model\Table\EnquiryTable $Enquiry
 */
class EnquiryController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
        if($this->request->isAjax())
        {
            $this->viewBuilder()->layout('ajax');
        }
        else
        {
            $this->viewBuilder()->layout('frontend');
        }
    }
    public function index()
    {
        $enquiry = $this->paginate($this->Enquiry);

        $this->set(compact('enquiry'));
        $this->set('_serialize', ['enquiry']);
    }

    /**
     * View method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enquiry = $this->Enquiry->get($id, [
            'contain' => []
        ]);

        $this->set('enquiry', $enquiry);
        $this->set('_serialize', ['enquiry']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enquiry = $this->Enquiry->newEntity();
        if ($this->request->is('post')) {
            $enquiry = $this->Enquiry->patchEntity($enquiry, $this->request->data);
            if ($this->Enquiry->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('enquiry'));
        $this->set('_serialize', ['enquiry']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enquiry = $this->Enquiry->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enquiry = $this->Enquiry->patchEntity($enquiry, $this->request->data);
            if ($this->Enquiry->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('enquiry'));
        $this->set('_serialize', ['enquiry']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enquiry = $this->Enquiry->get($id);
        if ($this->Enquiry->delete($enquiry)) {
            $this->Flash->success(__('The enquiry has been deleted.'));
        } else {
            $this->Flash->error(__('The enquiry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
