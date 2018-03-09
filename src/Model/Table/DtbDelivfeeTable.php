<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbDelivfee Model
 *
 * @property \App\Model\Table\DelivsTable|\Cake\ORM\Association\BelongsTo $Delivs
 * @property \App\Model\Table\FeesTable|\Cake\ORM\Association\BelongsTo $Fees
 *
 * @method \App\Model\Entity\DtbDelivfee get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbDelivfee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbDelivfee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbDelivfee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbDelivfee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbDelivfee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbDelivfee findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbDelivfeeTable extends Table
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

        $this->setTable('dtb_delivfee');
        $this->setDisplayField('deliv_id');
        $this->setPrimaryKey(['deliv_id', 'fee_id']);

        $this->belongsTo('Delivs', [
            'foreignKey' => 'deliv_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Fees', [
            'foreignKey' => 'fee_id',
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
            ->decimal('fee')
            ->requirePresence('fee', 'create')
            ->notEmpty('fee');

        $validator
            ->allowEmpty('pref');

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
        $rules->add($rules->existsIn(['deliv_id'], 'Delivs'));
        $rules->add($rules->existsIn(['fee_id'], 'Fees'));

        return $rules;
    }
}
