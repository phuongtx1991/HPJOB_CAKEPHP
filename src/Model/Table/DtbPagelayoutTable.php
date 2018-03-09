<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbPagelayout Model
 *
 * @property \App\Model\Table\DeviceTypesTable|\Cake\ORM\Association\BelongsTo $DeviceTypes
 * @property \App\Model\Table\PagesTable|\Cake\ORM\Association\BelongsTo $Pages
 *
 * @method \App\Model\Entity\DtbPagelayout get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbPagelayout newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbPagelayout[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbPagelayout|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbPagelayout patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPagelayout[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbPagelayout findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbPagelayoutTable extends Table
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

        $this->setTable('dtb_pagelayout');
        $this->setDisplayField('device_type_id');
        $this->setPrimaryKey(['device_type_id', 'page_id']);

        $this->belongsTo('DeviceTypes', [
            'foreignKey' => 'device_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pages', [
            'foreignKey' => 'page_id',
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
            ->scalar('page_name')
            ->allowEmpty('page_name');

        $validator
            ->scalar('url')
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->scalar('filename')
            ->allowEmpty('filename');

        $validator
            ->allowEmpty('header_chk');

        $validator
            ->allowEmpty('footer_chk');

        $validator
            ->allowEmpty('edit_flg');

        $validator
            ->scalar('author')
            ->allowEmpty('author');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('keyword')
            ->allowEmpty('keyword');

        $validator
            ->scalar('update_url')
            ->allowEmpty('update_url');

        $validator
            ->dateTime('create_date')
            ->requirePresence('create_date', 'create')
            ->notEmpty('create_date');

        $validator
            ->dateTime('update_date')
            ->requirePresence('update_date', 'create')
            ->notEmpty('update_date');

        $validator
            ->scalar('meta_robots')
            ->allowEmpty('meta_robots');

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
        $rules->add($rules->existsIn(['device_type_id'], 'DeviceTypes'));
        $rules->add($rules->existsIn(['page_id'], 'Pages'));

        return $rules;
    }
}
