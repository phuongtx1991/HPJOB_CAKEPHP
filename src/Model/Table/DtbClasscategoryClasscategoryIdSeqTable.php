<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbClasscategoryClasscategoryIdSeq Model
 *
 * @method \App\Model\Entity\DtbClasscategoryClasscategoryIdSeq get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbClasscategoryClasscategoryIdSeq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbClasscategoryClasscategoryIdSeq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbClasscategoryClasscategoryIdSeq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbClasscategoryClasscategoryIdSeq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbClasscategoryClasscategoryIdSeq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbClasscategoryClasscategoryIdSeq findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbClasscategoryClasscategoryIdSeqTable extends Table
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

        $this->setTable('dtb_classcategory_classcategory_id_seq');
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
