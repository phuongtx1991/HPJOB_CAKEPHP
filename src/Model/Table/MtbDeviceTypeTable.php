<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbDeviceType Model
 *
 * @method \App\Model\Entity\MtbDeviceType get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbDeviceType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbDeviceType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbDeviceType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbDeviceType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbDeviceType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbDeviceType findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbDeviceTypeTable extends Table
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

        $this->setTable('mtb_device_type');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        return $validator;
    }
}
