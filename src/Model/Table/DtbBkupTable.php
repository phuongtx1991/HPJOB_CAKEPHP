<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbBkup Model
 *
 * @method \App\Model\Entity\DtbBkup get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbBkup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbBkup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbBkup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbBkup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBkup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBkup findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbBkupTable extends Table
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

        $this->setTable('dtb_bkup');
        $this->setDisplayField('bkup_name');
        $this->setPrimaryKey('bkup_name');
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
            ->scalar('bkup_name')
            ->allowEmpty('bkup_name', 'create');

        $validator
            ->scalar('bkup_memo')
            ->allowEmpty('bkup_memo');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        return $validator;
    }
}
