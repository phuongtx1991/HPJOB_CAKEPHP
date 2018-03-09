<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbRecommendProducts Model
 *
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\RecommendProductsTable|\Cake\ORM\Association\BelongsTo $RecommendProducts
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbRecommendProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbRecommendProduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbRecommendProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbRecommendProduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbRecommendProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbRecommendProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbRecommendProduct findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbRecommendProductsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('dtb_recommend_products');
        $this->setDisplayField('product_id');
        $this->setPrimaryKey(['product_id', 'recommend_product_id']);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('RecommendProducts', [
            'foreignKey' => 'recommend_product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Creators', [
            'foreignKey' => 'creator_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('rank')
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        $validator
            ->scalar('comment')
            ->allowEmpty('comment');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['recommend_product_id'], 'RecommendProducts'));
        $rules->add($rules->existsIn(['creator_id'], 'Creators'));

        return $rules;
    }
}
