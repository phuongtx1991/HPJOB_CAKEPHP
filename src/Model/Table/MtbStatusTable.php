<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbStatus Model
 *
 * @method \App\Model\Entity\MtbStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbStatus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbStatus findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbStatusTable extends Table
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

        $this->setTable('mtb_status');
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
