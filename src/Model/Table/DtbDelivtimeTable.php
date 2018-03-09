<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbDelivtime Model
 *
 * @property \App\Model\Table\DelivsTable|\Cake\ORM\Association\BelongsTo $Delivs
 * @property \App\Model\Table\TimesTable|\Cake\ORM\Association\BelongsTo $Times
 *
 * @method \App\Model\Entity\DtbDelivtime get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbDelivtime newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbDelivtime[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbDelivtime|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbDelivtime patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbDelivtime[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbDelivtime findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbDelivtimeTable extends Table
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

        $this->setTable('dtb_delivtime');
        $this->setDisplayField('deliv_id');
        $this->setPrimaryKey(['deliv_id', 'time_id']);

        $this->belongsTo('Delivs', [
            'foreignKey' => 'deliv_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Times', [
            'foreignKey' => 'time_id',
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
            ->scalar('deliv_time')
            ->requirePresence('deliv_time', 'create')
            ->notEmpty('deliv_time');

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
        $rules->add($rules->existsIn(['time_id'], 'Times'));

        return $rules;
    }
}
