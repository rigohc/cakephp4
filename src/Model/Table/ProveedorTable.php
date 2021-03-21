<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proveedor Model
 *
 * @method \App\Model\Entity\Proveedor newEmptyEntity()
 * @method \App\Model\Entity\Proveedor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proveedor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Proveedor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proveedor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProveedorTable extends Table
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

        $this->setTable('proveedor');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('razon_social')
            ->maxLength('razon_social', 250)
            ->requirePresence('razon_social', 'create')
            ->notEmptyString('razon_social');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', [
                'email' => [
                    'rule' => ['email'],
                    'message' => 'Ingrese un correo electronico valido.  Ej: proveedoremail@gmail.com',
                ]
            ]);

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 20)
            ->requirePresence('telefono', 'create')
            ->maxLength('telefono', 10,'Ingrese un numero telefónico valido.')
            ->minLength('telefono', 10,'Ingrese un numero telefónico valido.')
            ->naturalNumber('telefono','Este campo solo admite numeros')
            ->notEmptyString('telefono','Llene este campo');

        $validator
            ->scalar('codigo_postal')
            ->maxLength('codigo_postal', 10)
            ->naturalNumber('phone','Este campo solo admite numeros')
            ->requirePresence('codigo_postal', 'create')
            ->naturalNumber('codigo','Este campo solo admite numeros')
            ->notEmptyString('codigo_postal','Llene este campo');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 250)
            ->requirePresence('direccion', 'create')
            ->notEmptyString('direccion','Llene este campo');

        $validator
            ->scalar('sitio_web')
            ->maxLength('sitio_web', 150)
            ->requirePresence('sitio_web', 'create')
            ->notEmptyString('sitio_web','Llene este campo');

        return $validator;
    }
}
