<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbAuthority Model
 *
 * @method \App\Model\Entity\MtbAuthority get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbAuthority newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbAuthority[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbAuthority|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbAuthority patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbAuthority[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbAuthority findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbAuthorityTable extends Table
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

        $this->setTable('mtb_authority');
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
