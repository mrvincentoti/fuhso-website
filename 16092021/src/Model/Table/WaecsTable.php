<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Waecs Model
 *
 * @property \App\Model\Table\ApplicantsTable&\Cake\ORM\Association\BelongsTo $Applicants
 *
 * @method \App\Model\Entity\Waec get($primaryKey, $options = [])
 * @method \App\Model\Entity\Waec newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Waec[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Waec|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Waec saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Waec patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Waec[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Waec findOrCreate($search, callable $callback = null, $options = [])
 */
class WaecsTable extends Table
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

        $this->setTable('waecs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Applicants', [
            'foreignKey' => 'applicant_id',
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
            ->scalar('name')
            ->maxLength('name', 16)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('year')
            ->maxLength('year', 16)
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->integer('numberofcredit')
            ->requirePresence('numberofcredit', 'create')
            ->notEmptyString('numberofcredit');

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
        $rules->add($rules->existsIn(['applicant_id'], 'Applicants'));

        return $rules;
    }
}
