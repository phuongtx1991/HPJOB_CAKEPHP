<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbMember Model
 *
 * @property \App\Model\Table\LoginsTable|\Cake\ORM\Association\BelongsTo $Logins
 * @property \App\Model\Table\CreatorsTable|\Cake\ORM\Association\BelongsTo $Creators
 *
 * @method \App\Model\Entity\DtbMember get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbMember newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbMember[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbMember|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbMember patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMember[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbMember findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbMemberTable extends Table
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

        $this->setTable('dtb_member');
        $this->setDisplayField('name');
        $this->setPrimaryKey('member_id');

        $this->belongsTo('Logins', [
            'foreignKey' => 'login_id',
            'joinType' => 'INNER'
        ]);
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
            ->integer('member_id')
            ->allowEmpty('member_id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->scalar('department')
            ->allowEmpty('department');

        $validator
            ->scalar('password')
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('salt')
            ->requirePresence('salt', 'create')
            ->notEmpty('salt');

        $validator
            ->requirePresence('authority', 'create')
            ->notEmpty('authority');

        $validator
            ->integer('rank')
            ->requirePresence('rank', 'create')
            ->notEmpty('rank');

        $validator
            ->requirePresence('work', 'create')
            ->notEmpty('work');

        $validator
            ->scalar('tel')
            ->allowEmpty('tel');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('workplace');

        $validator
            ->scalar('career')
            ->allowEmpty('career');

        $validator
            ->scalar('message')
            ->allowEmpty('message');

        $validator
            ->scalar('image')
            ->allowEmpty('image');

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

        $validator
            ->dateTime('login_date')
            ->allowEmpty('login_date');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['login_id'], 'Logins'));
        $rules->add($rules->existsIn(['creator_id'], 'Creators'));

        return $rules;
    }
}
