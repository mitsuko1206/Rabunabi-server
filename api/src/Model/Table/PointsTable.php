<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Points Model
 *
 * @property \App\Model\Table\AccountsTable|\Cake\ORM\Association\BelongsTo $Accounts
 *
 * @method \App\Model\Entity\Points get($primaryKey, $options = [])
 * @method \App\Model\Entity\Points newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Points[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Points|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Points patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Points[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Points findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PointsTable extends Table
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

        $this->setTable('points');
        $this->setDisplayField('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('male')
            ->allowEmpty('male');

        $validator
            ->scalar('initialPoints')
            ->allowEmpty('initialPoints');

        $validator
            ->integer('sendMessage')
            ->allowEmpty('sendMessage');

        $validator
            ->integer('readMessage')
            ->allowEmpty('readMessage');

        $validator
            ->integer('sendImage')
            ->allowEmpty('sendImage');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
  
}
