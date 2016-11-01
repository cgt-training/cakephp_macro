<?php
// src/Model/Table/PostsTable.php

namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('title')
            ->notEmpty('description');

        return $validator;
    }
    public function isOwnedBy($postId, $userId)
    {
        return $this->exists(['id' => $postId, 'user_id' => $userId]);
    }
   public function findOwnedBy(Query $query, array $options)
    {
       // pr($options);
        $user = $options['user'];
        //pr($user['id']);
        return $query->where(['user_id' => $user['id']]);
    }
}