<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbReview Model
 *
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbReview get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbReview newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbReview[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbReview|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbReview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbReview[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbReview findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbReviewTable extends Table
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

        $this->setTable('dtb_review');
        $this->setDisplayField('title');
        $this->setPrimaryKey('review_id');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
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
            ->integer('review_id')
            ->allowEmpty('review_id', 'create');

        $validator
            ->scalar('reviewer_name')
            ->requirePresence('reviewer_name', 'create')
            ->notEmpty('reviewer_name');

        $validator
            ->scalar('reviewer_url')
            ->allowEmpty('reviewer_url');

        $validator
            ->allowEmpty('sex');

        $validator
            ->requirePresence('recommend_level', 'create')
            ->notEmpty('recommend_level');

        $validator
            ->scalar('title')
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('comment')
            ->requirePresence('comment', 'create')
            ->notEmpty('comment');

        $validator
            ->allowEmpty('status');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

        $validator
            ->requirePresence('del_flg', 'create')
            ->notEmpty('del_flg');

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
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['creator_id'], 'Creators'));

        return $rules;
    }
}
