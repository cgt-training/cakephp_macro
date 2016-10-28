<?php
// src/Controller/PostsController.php

namespace App\Controller;
use Cake\Event\Event;

class PostsController extends AppController
{
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
    public function beforeFilter(Event $event)
    {
          parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow();
    }
    public function index()
    {
       // echo "dasd";exit;
        $posts = $this->Posts->find('all');
       // pr($posts);exit;
       // $this->set(compact('posts'));
        $this->set('post', $posts);
    }
    
    public function add()
    {
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            //pr($this->request->data);exit;
            $post = $this->Posts->patchEntity($post, $this->request->data);
            $post->created = date("Y-m-d H:i:s");
            $post->modified = date("Y-m-d H:i:s");
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
        $this->set('post', $post);
    }
    public function edit($id = null)
    {
        $post = $this->Posts->get($id);
        if ($this->request->is(['post','put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            $post->modified = date("Y-m-d H:i:s");
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Your post has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your post.'));
        }
        $this->set('post', $post);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}