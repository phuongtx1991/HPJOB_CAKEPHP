<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbIndexList Model
 *
 * @method \App\Model\Entity\DtbIndexList get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbIndexList newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbIndexList[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbIndexList|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbIndexList patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbIndexList[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbIndexList findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbIndexListTable extends Table
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

        $this->setTable('dtb_index_list');
        $this->setDisplayField('table_name');
        $this->setPrimaryKey(['table_name', 'column_name']);
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
            ->scalar('table_name')
            ->allowEmpty('table_name', 'create');

        $validator
            ->scalar('column_name')
            ->allowEmpty('column_name', 'create');

        $validator
            ->requirePresence('recommend_flg', 'create')
            ->notEmpty('recommend_flg');

        $validator
            ->scalar('recommend_comment')
            ->allowEmpty('recommend_comment');

        return $validator;
    }
}
