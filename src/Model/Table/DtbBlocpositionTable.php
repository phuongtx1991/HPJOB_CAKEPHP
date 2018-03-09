<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbBlocposition Model
 *
 * @property \App\Model\Table\DeviceTypesTable|\Cake\ORM\Association\BelongsTo $DeviceTypes
 * @property \App\Model\Table\PagesTable|\Cake\ORM\Association\BelongsTo $Pages
 * @property \App\Model\Table\TargetsTable|\Cake\ORM\Association\BelongsTo $Targets
 * @property \App\Model\Table\BlocsTable|\Cake\ORM\Association\BelongsTo $Blocs
 *
 * @method \App\Model\Entity\DtbBlocposition get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbBlocposition newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbBlocposition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbBlocposition|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbBlocposition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBlocposition[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbBlocposition findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbBlocpositionTable extends Table
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

        $this->setTable('dtb_blocposition');
        $this->setDisplayField('device_type_id');
        $this->setPrimaryKey(['device_type_id', 'page_id', 'target_id', 'bloc_id']);

        $this->belongsTo('DeviceTypes', [
            'foreignKey' => 'device_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pages', [
            'foreignKey' => 'page_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Targets', [
            'foreignKey' => 'target_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Blocs', [
            'foreignKey' => 'bloc_id',
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
            ->integer('bloc_row')
            ->allowEmpty('bloc_row');

        $validator
            ->requirePresence('anywhere', 'create')
            ->notEmpty('anywhere');

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
        $rules->add($rules->existsIn(['target_id'], 'Targets'));
        $rules->add($rules->existsIn(['bloc_id'], 'Blocs'));

        return $rules;
    }
}
