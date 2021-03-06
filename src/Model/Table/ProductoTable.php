<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Producto Model
 *
 * @method \App\Model\Entity\Producto newEmptyEntity()
 * @method \App\Model\Entity\Producto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Producto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Producto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Producto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Producto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Producto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductoTable extends Table
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

        $this->setTable('producto');
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
            ->scalar('nombre')
            ->maxLength('nombre', 250)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre','Llene este campo');

        $validator
            ->scalar('precio')
            ->maxLength('precio', 10)
            ->requirePresence('precio', 'create')
            ->notEmptyString('precio','Llene este campo');

        $validator
            ->scalar('tipo_bicicleta')
            ->maxLength('tipo_bicicleta', 250)
            ->requirePresence('tipo_bicicleta', 'create')
            ->notEmptyString('tipo_bicicleta','Llene este campo');

        $validator
            ->scalar('marca')
            ->maxLength('marca', 250)
            ->requirePresence('marca', 'create')
            ->notEmptyString('marca','Llene este campo');

        $validator
            ->scalar('rodada')
            ->maxLength('rodada', 20)
            ->requirePresence('rodada', 'create')
            ->notEmptyString('rodada','Llene este campo');

        $validator
            ->scalar('material_cuadro')
            ->maxLength('material_cuadro', 250)
            ->requirePresence('material_cuadro', 'create')
            ->notEmptyString('material_cuadro','Llene este campo');

        $validator
            ->scalar('tipo_suspencion')
            ->maxLength('tipo_suspencion', 250)
            ->requirePresence('tipo_suspencion', 'create')
            ->notEmptyString('tipo_suspencion','Llene este campo');

        $validator
            ->scalar('tipo_frenos')
            ->maxLength('tipo_frenos', 250)
            ->requirePresence('tipo_frenos', 'create')
            ->notEmptyString('tipo_frenos','Llene este campo');

        $validator
            ->scalar('transmision')
            ->maxLength('transmision', 250)
            ->requirePresence('transmision', 'create')
            ->notEmptyString('transmision','Llene este campo');

         $validator
            ->allowEmptyFile('image')
            ->add( 'image', [
            'mimeType' => [
                'rule' => [ 'mimeType', [ 'image/jpg', 'image/png', 'image/jpeg' ] ],
                'message' => 'Please upload only jpg and png.',
            ],
            'fileSize' => [
                'rule' => [ 'fileSize', '<=', '1MB' ],
                'message' => 'El tama??o de la imagen debe ser menor a 1MB.',
            ],
            ] );

        $validator
            ->integer('proveedor')
            ->requirePresence('proveedor', 'create')
            ->notEmptyString('proveedor','Llene este campo');

        return $validator;
    }
}
