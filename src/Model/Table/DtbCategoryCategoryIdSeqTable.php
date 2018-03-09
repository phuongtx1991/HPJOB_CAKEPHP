<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbCategoryCategoryIdSeq Model
 *
 * @method \App\Model\Entity\DtbCategoryCategoryIdSeq get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbCategoryCategoryIdSeq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbCategoryCategoryIdSeq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbCategoryCategoryIdSeq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbCategoryCategoryIdSeq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCategoryCategoryIdSeq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbCategoryCategoryIdSeq findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbCategoryCategoryIdSeqTable extends Table
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

        $this->setTable('dtb_category_category_id_seq');
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
