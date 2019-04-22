<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tabfile Model
 *
 * @property \App\Model\Table\FileTable|\Cake\ORM\Association\BelongsTo $File
 * @property \App\Model\Table\TabTable|\Cake\ORM\Association\BelongsTo $Tab
 *
 * @method \App\Model\Entity\Tabfile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tabfile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tabfile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tabfile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tabfile|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tabfile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tabfile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tabfile findOrCreate($search, callable $callback = null, $options = [])
 */
class TabfileTable extends Table
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

        $this->setTable('tabfile');
        $this->setDisplayField('file_id');
        $this->setPrimaryKey(['file_id', 'tab_id']);

        $this->belongsTo('File', [
            'foreignKey' => 'file_id',
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
        $rules->add($rules->existsIn(['file_id'], 'File'));
        $rules->add($rules->existsIn(['tab_id'], 'Tab'));

        return $rules;
    }
}
