<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
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
        // var_dump($this->request->isAjax());
        if($this->request->isAjax())
        {
            $this->viewBuilder()->layout('ajax');
        }
        else
        {
            $this->viewBuilder()->layout('frontend');
        }

    }
    public function beforeFilter(Event $event)
    {
          parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']);
    }
    public function login()
    {
        //pr($this->request->is);
       // echo $this->Auth->redirectUrl();
        if(isset($this->request->data['remember_me']) && $this->request->data['remember_me']=='Y')
        {
             $user = $this->Auth->identify();
             if ($user)
             {
                 $cookieId = $user['id'];
                 $cookieName = $user['username'];
                 $cookiePass = $this->request->data['password'];
                 $this->Cookie->configKey('UserNew', 'path', '/');
                 $this->Cookie->configKey('UserNew', [
                    'expires' => '+1 days',
                    'httpOnly' => true
                 ]);
                 $this->Cookie->write('UserNew',['id'=>$cookieId,'name'=>$cookieName,'pass'=>$cookiePass]);
                 //pr($user);   exit;
                 //$this->Cookie->read('UserNew.name');
                
                 $this->Auth->setUser($user);
                 return $this->redirect($this->Auth->redirectUrl());
                 
             }
             
            $this->Flash->error(__('Invalid username or password, try again'));    
        }
        elseif ($this->request->is('post')) {
            //pr($this->request->data['remember_me']);
            $user = $this->Auth->identify();
           // pr($user);
            //exit;
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        
    }

    public function logout()
    {
        $this->Cookie->delete('UserNew');
        $this->Flash->success(__('Logout Successful'));
        return $this->redirect($this->Auth->logout());
    }
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->created = date("Y-m-d H:i:s");
            $user->modified = date("Y-m-d H:i:s");
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['controller'=>'users','action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->modified = date("Y-m-d H:i:s");
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['controller'=>'users','action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
?>
