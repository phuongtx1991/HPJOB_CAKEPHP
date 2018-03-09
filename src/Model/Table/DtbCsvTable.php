<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbCsv Model
 *
 * @property \App\Model\Table\CsvsTable|\Cake\ORM\Association\BelongsTo $Csvs
 *
 * @method \App\Model\Entity\DtbCsv get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbCsv newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbCsv[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbCsv|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbCsv patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCsv[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCsv findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbCsvTable extends Table
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

        $this->setTable('dtb_csv');
        $this->setDisplayField('no');
        $this->setPrimaryKey('no');

        $this->belongsTo('Csvs', [
            'foreignKey' => 'csv_id',
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
            ->integer('no')
            ->allowEmpty('no', 'create');

        $validator
            ->scalar('col')
            ->allowEmpty('col');

        $validator
            ->scalar('disp_name')
            ->allowEmpty('disp_name');

        $validator
            ->integer('rank')
            ->allowEmpty('rank');

        $validator
            ->allowEmpty('rw_flg');

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

        $validator
            ->scalar('mb_convert_kana_option')
            ->allowEmpty('mb_convert_kana_option');

        $validator
            ->scalar('size_const_type')
            ->allowEmpty('size_const_type');

        $validator
            ->scalar('error_check_types')
            ->allowEmpty('error_check_types');

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
        $rules->add($rules->existsIn(['csv_id'], 'Csvs'));

        return $rules;
    }
}
