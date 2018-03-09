<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbReminder Model
 *
 * @method \App\Model\Entity\MtbReminder get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbReminder newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbReminder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbReminder|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbReminder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbReminder[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbReminder findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbReminderTable extends Table
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

        $this->setTable('mtb_reminder');
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
            ->scalar('name_vn')
            ->allowEmpty('name_vn');

        $validator
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        return $validator;
    }
}
