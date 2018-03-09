<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MtbMailMagazineType Model
 *
 * @method \App\Model\Entity\MtbMailMagazineType get($primaryKey, $options = [])
 * @method \App\Model\Entity\MtbMailMagazineType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MtbMailMagazineType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MtbMailMagazineType|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MtbMailMagazineType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MtbMailMagazineType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MtbMailMagazineType findOrCreate($search, callable $callback = null, $options = [])
 */
class MtbMailMagazineTypeTable extends Table
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

        $this->setTable('mtb_mail_magazine_type');
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
            ->scalar('name_vn')
            ->allowEmpty('name_vn');

        $validator
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        return $validator;
    }
}
