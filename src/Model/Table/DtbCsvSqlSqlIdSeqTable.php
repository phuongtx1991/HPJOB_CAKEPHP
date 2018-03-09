<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbCsvSqlSqlIdSeq Model
 *
 * @method \App\Model\Entity\DtbCsvSqlSqlIdSeq get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbCsvSqlSqlIdSeq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbCsvSqlSqlIdSeq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbCsvSqlSqlIdSeq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbCsvSqlSqlIdSeq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCsvSqlSqlIdSeq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCsvSqlSqlIdSeq findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbCsvSqlSqlIdSeqTable extends Table
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

        $this->setTable('dtb_csv_sql_sql_id_seq');
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
