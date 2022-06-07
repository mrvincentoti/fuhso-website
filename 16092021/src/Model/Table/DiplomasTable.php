<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diplomas Model
 *
 * @property \App\Model\Table\ApplicantsTable&\Cake\ORM\Association\BelongsTo $Applicants
 *
 * @method \App\Model\Entity\Diploma get($primaryKey, $options = [])
 * @method \App\Model\Entity\Diploma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Diploma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Diploma|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diploma saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diploma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Diploma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Diploma findOrCreate($search, callable $callback = null, $options = [])
 */
class DiplomasTable extends Table
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

        $this->setTable('diplomas');
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
            ->maxLength('year', 64)
            ->requirePresence('year', 'create')
            ->notEmptyString('year');

        $validator
            ->scalar('subject')
            ->maxLength('subject', 64)
            ->requirePresence('subject', 'create')
            ->notEmptyString('subject');

        $validator
            ->scalar('classofdiploma')
            ->maxLength('classofdiploma', 64)
            ->requirePresence('classofdiploma', 'create')
            ->notEmptyString('classofdiploma');

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
