<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usertab Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TabTable|\Cake\ORM\Association\BelongsTo $Tab
 *
 * @method \App\Model\Entity\Usertab get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usertab newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usertab[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usertab|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usertab|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usertab patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usertab[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usertab findOrCreate($search, callable $callback = null, $options = [])
 */
class UsertabTable extends Table
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

        $this->setTable('usertab');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey(['user_id', 'tab_id']);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tab', [
            'foreignKey' => 'tab_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['tab_id'], 'Tab'));

        return $rules;
    }
}
