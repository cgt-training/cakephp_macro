<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * BlogPosts Controller
 *
 * @property \App\Model\Table\BlogPostsTable $BlogPosts
 */
class DashboardsController extends AppController
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
    
    public function display()
    {
       $this->set('PostsCount', TableRegistry::get('BlogPosts')->find('all')->count());       
       $this->set('Posts', TableRegistry::get('BlogPosts')->find('all')->limit('5'));       
       $this->set('ProductsCount', TableRegistry::get('Products')->find('all')->count());       
       $this->set('UsersCount', TableRegistry::get('Users')->find('all')->count());       
    }

    
}
