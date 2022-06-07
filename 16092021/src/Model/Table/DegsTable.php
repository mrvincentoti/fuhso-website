<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Degs Model
 *
 * @method \App\Model\Entity\Deg get($primaryKey, $options = [])
 * @method \App\Model\Entity\Deg newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Deg[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Deg|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deg saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Deg patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Deg[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Deg findOrCreate($search, callable $callback = null, $options = [])
 */
class DegsTable extends Table
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

        $this->setTable('degs');
        $this->setDisplayField('name');
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('code')
            ->maxLength('code', 8)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->scalar('name')
            ->maxLength('name', 16)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
