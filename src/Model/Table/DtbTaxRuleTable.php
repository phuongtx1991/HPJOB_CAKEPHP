<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbTaxRule Model
 *
 * @property \App\Model\Table\CountriesTable|\Cake\ORM\Association\BelongsTo $Countries
 * @property \App\Model\Table\PrevesTable|\Cake\ORM\Association\BelongsTo $Preves
 * @property \App\Model\Table\ProductsTable|\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\ProductClassesTable|\Cake\ORM\Association\BelongsTo $ProductClasses
 * @property \App\Model\Table\MembersTable|\Cake\ORM\Association\BelongsTo $Members
 *
 * @method \App\Model\Entity\DtbTaxRule get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbTaxRule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbTaxRule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbTaxRule|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbTaxRule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbTaxRule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbTaxRule findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbTaxRuleTable extends Table
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

        $this->setTable('dtb_tax_rule');
        $this->setDisplayField('tax_rule_id');
        $this->setPrimaryKey('tax_rule_id');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Preves', [
            'foreignKey' => 'pref_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ProductClasses', [
            'foreignKey' => 'product_class_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Members', [
            'foreignKey' => 'member_id',
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
            ->integer('tax_rule_id')
            ->allowEmpty('tax_rule_id', 'create');

        $validator
            ->requirePresence('calc_rule', 'create')
            ->notEmpty('calc_rule');

        $validator
            ->decimal('tax_rate')
            ->requirePresence('tax_rate', 'create')
            ->notEmpty('tax_rate');

        $validator
            ->decimal('tax_adjust')
            ->requirePresence('tax_adjust', 'create')
            ->notEmpty('tax_adjust');

        $validator
            ->dateTime('apply_date')
            ->requirePresence('apply_date', 'create')
            ->notEmpty('apply_date');

        $validator
            ->requirePresence('del_flg', 'create')
            ->notEmpty('del_flg');

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
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['pref_id'], 'Preves'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));
        $rules->add($rules->existsIn(['product_class_id'], 'ProductClasses'));
        $rules->add($rules->existsIn(['member_id'], 'Members'));

        return $rules;
    }
}
