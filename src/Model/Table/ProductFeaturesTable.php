<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductFeatures Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\FeaturesTable&\Cake\ORM\Association\BelongsTo $Features
 *
 * @method \App\Model\Entity\ProductFeature newEmptyEntity()
 * @method \App\Model\Entity\ProductFeature newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductFeature[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductFeature get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductFeature findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductFeature patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductFeature[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductFeature|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductFeature saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductFeature[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductFeature[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductFeature[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductFeature[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductFeaturesTable extends Table
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

        $this->setTable('product_features');
        $this->setDisplayField(['product_id', 'feature_id']);
        $this->setPrimaryKey(['product_id', 'feature_id']);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Features', [
            'foreignKey' => 'feature_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn('producty_id', 'Products'), ['errorField' => 'producty_id']);
        $rules->add($rules->existsIn('feature_id', 'Features'), ['errorField' => 'feature_id']);

        return $rules;
    }
}
