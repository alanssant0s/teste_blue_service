<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * OrderProducts Model
 *
 * @property \App\Model\Table\OrderTable&\Cake\ORM\Association\BelongsTo $Order
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\OrderProduct newEmptyEntity()
 * @method \App\Model\Entity\OrderProduct newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\OrderProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\OrderProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\OrderProduct findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\OrderProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\OrderProduct[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\OrderProduct|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderProduct saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\OrderProduct[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrderProduct[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrderProduct[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\OrderProduct[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrderProductsTable extends Table
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

        $this->setTable('order_products');
        $this->setDisplayField(['order_id', 'products_id']);
        $this->setPrimaryKey(['order_id', 'products_id']);

        $this->belongsTo('Order', [
            'foreignKey' => 'order_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'products_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('qtd')
            ->requirePresence('qtd', 'create')
            ->notEmptyString('qtd');

        $validator
            ->numeric('unit')
            ->requirePresence('unit', 'create')
            ->notEmptyString('unit');

        $validator
            ->numeric('total')
            ->requirePresence('total', 'create')
            ->notEmptyString('total');

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
        $rules->add($rules->existsIn('order_id', 'Order'), ['errorField' => 'order_id']);
        $rules->add($rules->existsIn('products_id', 'Products'), ['errorField' => 'products_id']);

        return $rules;
    }
}
