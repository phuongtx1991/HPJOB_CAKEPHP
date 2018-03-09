<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbHolidayHolidayIdSeq Model
 *
 * @method \App\Model\Entity\DtbHolidayHolidayIdSeq get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbHolidayHolidayIdSeq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbHolidayHolidayIdSeq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbHolidayHolidayIdSeq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbHolidayHolidayIdSeq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbHolidayHolidayIdSeq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbHolidayHolidayIdSeq findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbHolidayHolidayIdSeqTable extends Table
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

        $this->setTable('dtb_holiday_holiday_id_seq');
        $this->setDisplayField('sequence');
        $this->setPrimaryKey('sequence');
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
            ->integer('sequence')
            ->allowEmpty('sequence', 'create');

        return $validator;
    }
}
