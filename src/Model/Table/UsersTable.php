<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create','image');

        $validator
            ->scalar('username')
            ->maxLength('username', 20)
            ->requirePresence('username', 'create')
            ->notEmptyString('username','Llene este campo');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 10,'Ingrese un numero telefónico valido.')
            ->minLength('phone', 10,'Ingrese un numero telefónico valido.')
            ->requirePresence('phone', 'create')
            ->naturalNumber('phone','Este campo solo admite numeros')
            ->notEmptyString('phone','Llene este campo');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email','Llene este campo')
            ->add('email', [
                'email' => [
                    'rule' => ['email'],
                    'message' => 'Ingrese un correo electronico valido.  Ej: usuarioemail@gmail.com',
                ]
            ]);

        $validator
            ->scalar('password')
            ->maxLength('password', 20,'Este campo debe tener una longitud maxima de 20 caracteres')
            ->minLength('password',8,'Este campo debe tener una longitud minima de 8 caracteres')
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->allowEmptyFile('image')
            ->add( 'image', [
            'mimeType' => [
                'rule' => [ 'mimeType', [ 'image/jpg', 'image/png', 'image/jpeg' ] ],
                'message' => 'Please upload only jpg and png.',
            ],
            'fileSize' => [
                'rule' => [ 'fileSize', '<=', '1MB' ],
                'message' => 'El tamaño de la imagen debe ser menor a 1MB.',
            ],
        ] );
        
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['username']),[
            'message'=>'Este nombre de usuario ya se encuentra en uso'
        ]
        );
        $rules->add($rules->isUnique(['email']),[
            'message'=>'Este correo electrónico ya se encuentra en uso'
        ]
        );

        return $rules;
    }
}
