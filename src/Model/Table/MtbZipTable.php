<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbZip Model
 *
 * @method \App\Model\Entity\MtbZip get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbZip newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbZip[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbZip|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbZip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbZip[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbZip findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbZipTable extends Table
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

        $this->setTable('mtb_zip');
        $this->setDisplayField('zip_id');
        $this->setPrimaryKey('zip_id');
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
            ->integer('zip_id')
            ->allowEmpty('zip_id', 'create');

        $validator
            ->scalar('zipcode')
            ->allowEmpty('zipcode');

        $validator
            ->scalar('state')
            ->allowEmpty('state');

        $validator
            ->scalar('city')
            ->allowEmpty('city');

        $validator
            ->scalar('town')
            ->allowEmpty('town');

        return $validator;
    }
}
