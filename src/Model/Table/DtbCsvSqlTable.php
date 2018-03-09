<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbCsvSql Model
 *
 * @method \App\Model\Entity\DtbCsvSql get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbCsvSql newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbCsvSql[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbCsvSql|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbCsvSql patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCsvSql[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCsvSql findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbCsvSqlTable extends Table
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

        $this->setTable('dtb_csv_sql');
        $this->setDisplayField('sql_id');
        $this->setPrimaryKey('sql_id');
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
            ->integer('sql_id')
            ->allowEmpty('sql_id', 'create');

        $validator
            ->scalar('sql_name')
            ->requirePresence('sql_name', 'create')
            ->notEmpty('sql_name');

        $validator
            ->scalar('csv_sql')
            ->allowEmpty('csv_sql');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

        return $validator;
    }
}
