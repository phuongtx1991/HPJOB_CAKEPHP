<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbBestProducts Model
 *
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbBestProduct get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbBestProduct newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbBestProduct[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbBestProduct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbBestProduct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBestProduct[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBestProduct findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbBestProductsTable extends Table
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

        $this->setTable('dtb_best_products');
        $this->setDisplayField('title');
        $this->setPrimaryKey('best_id');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
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
            ->integer('best_id')
            ->allowEmpty('best_id', 'create');

        $validator
            ->integer('rank')
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        $validator
            ->scalar('title')
            ->allowEmpty('title');

        $validator
            ->scalar('comment')
            ->allowEmpty('comment');

        $validator
            ->scalar('comment_vn')
            ->allowEmpty('comment_vn');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['creator_id'], 'Creators'));

        return $rules;
    }
}
