<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbBestProductsBestIdSeq Model
 *
 * @method \App\Model\Entity\DtbBestProductsBestIdSeq get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbBestProductsBestIdSeq newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbBestProductsBestIdSeq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbBestProductsBestIdSeq|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbBestProductsBestIdSeq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBestProductsBestIdSeq[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBestProductsBestIdSeq findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbBestProductsBestIdSeqTable extends Table
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

        $this->setTable('dtb_best_products_best_id_seq');
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
