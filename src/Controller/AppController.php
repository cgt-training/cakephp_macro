<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Cookie');
        $this->loadComponent('Flash');
       if(isset($this->request->prefix) && ($this->request->prefix == 'admin')){

        // if($user == 'admin'){
    
                    $this->loadComponent('Auth', [   

                        'authorize' => 'Controller',  

                        'loginRedirect' => [
                        'controller' => 'BlogPosts',
                        'action' => 'index',
                        'prefix' => 'admin',
                        // 'prefix' => false,
                        ],

                        'logoutRedirect' => [
                        'controller' => 'Users',
                        'action' => 'login',
                        'prefix' => false,
                            
                        ],

                        'authenticate' => [
                            'Form' => [
                                'fields' => ['username' => 'username', 'password' => 'password']
                            ]

                        ],
                        
                        'authorize' => ['Controller'],
                        
                    ]);
        }else{


                     $this->loadComponent('Auth', [ 

                        // 'authorize' => 'Controller',

                        'loginRedirect' => [
                        'controller' => 'Posts',
                        'action' => 'index',
                        // 'prefix' => 'admin',
                        'prefix' => false,
                        ],

                        'logoutRedirect' => [
                        'controller' => 'Posts',
                        'action' => 'hindexome',
                        'prefix' => false,
                            

                        ],

                        'authenticate' => [
                            'Form' => [
                                'fields' => ['username' => 'username', 'password' => 'password']
                            ]

                        ],
                        
                    ]);

        }
        $this->checkCookie();
    }
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'display']);
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
    function checkCookie(){

        $session = $this->request->session()->read("Auth");
        $this->loadModel('Users');
        // pr($session);//exit;
          //      exit();
        // echo "abc";
        // exit();
        if(empty($session))
        {
            // $user = $this->Auth->user();

            
                $cookieId = $this->Cookie->read('UserNew.id');

                $cookieUser = $this->Cookie->read('UserNew.name');

                $cookiePass = $this->Cookie->read('UserNew.pass');

                $cookie = ['username' => $cookieUser, 'pass'=> $cookiePass];                         
                     // pr($cookie);exit();
                if (!is_null($cookie)) 
                {
                    
                    $user1 = $this->Users->findByUsername($cookie['username'])->toArray();
                    //debug($user1);exit;
                    if (!empty($user1[0])) 
                    {
                        // $this->Session->delete('Message.auth');
                        $this->Auth->setUser($user1[0]->toArray());
                        $this->redirect($this->Auth->redirectUrl());
                    }
                    else 
                    { 
                        $this->Cookie->delete('UserNew');
                    }
                }else {

                         $this->redirect($this->Auth->redirectUrl());
                }
            
        }
        
    }
}
