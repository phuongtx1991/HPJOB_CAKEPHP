<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbMailmagaTemplate Model
 *
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbMailmagaTemplate get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbMailmagaTemplate newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbMailmagaTemplate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbMailmagaTemplate|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbMailmagaTemplate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMailmagaTemplate[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMailmagaTemplate findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbMailmagaTemplateTable extends Table
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

        $this->setTable('dtb_mailmaga_template');
        $this->setDisplayField('template_id');
        $this->setPrimaryKey('template_id');

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
            ->integer('template_id')
            ->allowEmpty('template_id', 'create');

        $validator
            ->scalar('subject')
            ->allowEmpty('subject');

        $validator
            ->integer('mail_method')
            ->allowEmpty('mail_method');

        $validator
            ->scalar('body')
            ->allowEmpty('body');

        $validator
            ->requirePresence('del_flg', 'create')
            ->notEmpty('del_flg');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

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
