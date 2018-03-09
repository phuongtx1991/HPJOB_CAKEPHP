<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbMakerCount Model
 *
 * @method \App\Model\Entity\DtbMakerCount get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbMakerCount newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbMakerCount[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbMakerCount|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbMakerCount patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMakerCount[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMakerCount findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbMakerCountTable extends Table
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

        $this->setTable('dtb_maker_count');
        $this->setDisplayField('maker_id');
        $this->setPrimaryKey('maker_id');
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
            ->integer('maker_id')
            ->allowEmpty('maker_id', 'create');

        $validator
            ->integer('product_count')
            ->requirePresence('product_count', 'create')
            ->notEmpty('product_count');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        return $validator;
    }
}
