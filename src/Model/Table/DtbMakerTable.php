<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbMaker Model
 *
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbMaker get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbMaker newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbMaker[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbMaker|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbMaker patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMaker[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMaker findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbMakerTable extends Table
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

        $this->setTable('dtb_maker');
        $this->setDisplayField('name');
        $this->setPrimaryKey('maker_id');

        $this->belongsTo('Creators', [
            'foreignKey' => 'creator_id',
            'joinType' => 'INNER'
        ]);
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
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('rank')
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

        $validator
            ->requirePresence('del_flg', 'create')
            ->notEmpty('del_flg');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['creator_id'], 'Creators'));

        return $rules;
    }
}
