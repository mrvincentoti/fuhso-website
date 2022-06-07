<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Refs Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\BelongsTo $Employees
 *
 * @method \App\Model\Entity\Ref get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ref newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ref[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ref|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ref saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ref patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ref[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ref findOrCreate($search, callable $callback = null, $options = [])
 */
class RefsTable extends Table
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

        $this->setTable('refs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('reffullname')
            ->maxLength('reffullname', 64)
            ->requirePresence('reffullname', 'create')
            ->notEmptyString('reffullname');

        $validator
            ->scalar('refemail')
            ->maxLength('refemail', 63)
            ->requirePresence('refemail', 'create')
            ->notEmptyString('refemail');

        $validator
            ->scalar('refphone')
            ->maxLength('refphone', 16)
            ->allowEmptyString('refphone');

        $validator
            ->scalar('refjobtitle')
            ->maxLength('refjobtitle', 32)
            ->requirePresence('refjobtitle', 'create')
            ->notEmptyString('refjobtitle');

        $validator
            ->scalar('refcompany')
            ->maxLength('refcompany', 64)
            ->requirePresence('refcompany', 'create')
            ->notEmptyString('refcompany');

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
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));

        return $rules;
    }
}
