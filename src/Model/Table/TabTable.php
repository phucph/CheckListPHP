<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tab Model
 *
 * @method \App\Model\Entity\Tab get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tab newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tab[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tab|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tab|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tab patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tab[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tab findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TabTable extends Table
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

        $this->setTable('tab');
        $this->setDisplayField('tab_id');
        $this->setPrimaryKey('tab_id');

        $this->addBehavior('Timestamp');
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
            ->integer('tab_id')
            ->allowEmptyString('tab_id', 'create');

        $validator
            ->scalar('tab_name')
            ->maxLength('tab_name', 200)
            ->requirePresence('tab_name', 'create')
            ->allowEmptyString('tab_name', false);

        $validator
            ->integer('tab_parent')
            ->requirePresence('tab_parent', 'create')
            ->allowEmptyString('tab_parent', false);

        $validator
            ->dateTime('deadline')
            ->requirePresence('deadline', 'create')
            ->allowEmptyDateTime('deadline', false);

        $validator
            ->scalar('note')
            ->allowEmptyString('note');

        $validator
            ->integer('checked')
            ->requirePresence('checked', 'create')
            ->allowEmptyString('checked', false);

        return $validator;
    }
}
