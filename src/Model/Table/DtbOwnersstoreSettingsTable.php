<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbOwnersstoreSettings Model
 *
 * @method \App\Model\Entity\DtbOwnersstoreSetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbOwnersstoreSetting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbOwnersstoreSetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbOwnersstoreSetting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbOwnersstoreSetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbOwnersstoreSetting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbOwnersstoreSetting findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbOwnersstoreSettingsTable extends Table
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

        $this->setTable('dtb_ownersstore_settings');
        $this->setDisplayField('public_key');
        $this->setPrimaryKey('public_key');
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
            ->scalar('public_key')
            ->allowEmpty('public_key', 'create');

        return $validator;
    }
}
