<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbApiAccountApiAccountIdSeq Model
 *
 * @method \App\Model\Entity\DtbApiAccountApiAccountIdSeq get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbApiAccountApiAccountIdSeq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbApiAccountApiAccountIdSeq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbApiAccountApiAccountIdSeq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbApiAccountApiAccountIdSeq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbApiAccountApiAccountIdSeq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbApiAccountApiAccountIdSeq findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbApiAccountApiAccountIdSeqTable extends Table
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

        $this->setTable('dtb_api_account_api_account_id_seq');
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
