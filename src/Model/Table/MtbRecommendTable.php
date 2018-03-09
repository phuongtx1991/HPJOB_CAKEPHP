<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbRecommend Model
 *
 * @method \App\Model\Entity\MtbRecommend get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbRecommend newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbRecommend[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbRecommend|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbRecommend patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbRecommend[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbRecommend findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbRecommendTable extends Table
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

        $this->setTable('mtb_recommend');
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
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        return $validator;
    }
}
