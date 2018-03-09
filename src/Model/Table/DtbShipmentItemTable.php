<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DtbShipmentItem Model
 *
 * @property \App\Model\Table\ShippingsTable|\Cake\ORM\Association\BelongsTo $Shippings
 * @property \App\Model\Table\ProductClassesTable|\Cake\ORM\Association\BelongsTo $ProductClasses
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\BelongsTo $Orders
 *
 * @method \App\Model\Entity\DtbShipmentItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\DtbShipmentItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DtbShipmentItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DtbShipmentItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DtbShipmentItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DtbShipmentItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DtbShipmentItem findOrCreate($search, callable $callback = null, $options = [])
 */
class DtbShipmentItemTable extends Table
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

        $this->setTable('dtb_shipment_item');
        $this->setDisplayField('shipping_id');
        $this->setPrimaryKey(['shipping_id', 'product_class_id', 'order_id']);

        $this->belongsTo('Shippings', [
            'foreignKey' => 'shipping_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ProductClasses', [
            'foreignKey' => 'product_class_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Orders', [
            'foreignKey' => 'order_id',
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
            ->scalar('product_name')
            ->requirePresence('product_name', 'create')
            ->notEmpty('product_name');

        $validator
            ->scalar('product_code')
            ->allowEmpty('product_code');

        $validator
            ->scalar('classcategory_name1')
            ->allowEmpty('classcategory_name1');

        $validator
            ->scalar('classcategory_name2')
            ->allowEmpty('classcategory_name2');

        $validator
            ->decimal('price')
            ->allowEmpty('price');

        $validator
            ->decimal('quantity')
            ->allowEmpty('quantity');

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
        $rules->add($rules->existsIn(['shipping_id'], 'Shippings'));
        $rules->add($rules->existsIn(['product_class_id'], 'ProductClasses'));
        $rules->add($rules->existsIn(['order_id'], 'Orders'));

        return $rules;
    }
}
