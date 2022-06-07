<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recommendations Model
 *
 * @property \App\Model\Table\EmployeesTable&\Cake\ORM\Association\BelongsTo $Employees
 *
 * @method \App\Model\Entity\Recommendation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recommendation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recommendation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recommendation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recommendation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recommendation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recommendation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recommendation findOrCreate($search, callable $callback = null, $options = [])
 */
class RecommendationsTable extends Table
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

        $this->setTable('recommendations');
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

       /* $validator
            ->scalar('firstname')
            ->maxLength('firstname', 32)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 32)
            ->requirePresence('lastname', 'create')
            ->notEmptyString('lastname');

        $validator
            ->scalar('organization')
            ->maxLength('organization', 32)
            ->requirePresence('organization', 'create')
            ->notEmptyString('organization');

        $validator
            ->scalar('position')
            ->maxLength('position', 32)
            ->requirePresence('position', 'create')
            ->notEmptyString('position');

        $validator
            ->scalar('relationship')
            ->maxLength('relationship', 32)
            ->requirePresence('relationship', 'create')
            ->notEmptyString('relationship');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 32)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('country')
            ->maxLength('country', 16)
            ->requirePresence('country', 'create')
            ->notEmptyString('country');

        $validator
            ->scalar('city')
            ->maxLength('city', 16)
            ->requirePresence('city', 'create')
            ->notEmptyString('city');

        $validator
            ->scalar('postalcode')
            ->maxLength('postalcode', 16)
            ->requirePresence('postalcode', 'create')
            ->notEmptyString('postalcode');

        $validator
            ->scalar('address')
            ->maxLength('address', 32)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->integer('leadership')
            ->requirePresence('leadership', 'create')
            ->notEmptyString('leadership');

        $validator
            ->integer('creativity')
            ->requirePresence('creativity', 'create')
            ->notEmptyString('creativity');

        $validator
            ->integer('resourcefulness')
            ->requirePresence('resourcefulness', 'create')
            ->notEmptyString('resourcefulness');

        $validator
            ->integer('energy')
            ->requirePresence('energy', 'create')
            ->notEmptyString('energy');

        $validator
            ->integer('team')
            ->requirePresence('team', 'create')
            ->notEmptyString('team');

        $validator
            ->integer('oral')
            ->requirePresence('oral', 'create')
            ->notEmptyString('oral');

        $validator
            ->integer('written')
            ->requirePresence('written', 'create')
            ->notEmptyString('written');

        $validator
            ->integer('preference')
            ->requirePresence('preference', 'create')
            ->notEmptyString('preference');

        $validator
            ->integer('thinking')
            ->requirePresence('thinking', 'create')
            ->notEmptyString('thinking');

       $validator
            ->dateTime('date_created')
            ->notEmptyDateTime('date_created');*/

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
        //$rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));

        return $rules;
    }
}
