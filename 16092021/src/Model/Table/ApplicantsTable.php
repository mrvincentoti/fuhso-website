<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Applicants Model
 *
 * @property \App\Model\Table\StatesTable&\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\LgasTable&\Cake\ORM\Association\BelongsTo $Lgas
 * @property \App\Model\Table\CoursesTable&\Cake\ORM\Association\BelongsTo $Courses
 *
 * @method \App\Model\Entity\Applicant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Applicant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Applicant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Applicant|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Applicant saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Applicant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Applicant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Applicant findOrCreate($search, callable $callback = null, $options = [])
 */
class ApplicantsTable extends Table
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

        $this->setTable('applicants');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Lgas', [
            'foreignKey' => 'lga_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Faculties', [
            'foreignKey' => 'faculty_id',
            'joinType' => 'INNER',
        ]);
         $this->belongsTo('Positions', [
            'foreignKey' => 'position_id',
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
            ->scalar('surname')
            ->maxLength('surname', 32)
            ->requirePresence('surname', 'create')
            ->notEmptyString('surname');

        $validator
            ->scalar('fullname')
            ->maxLength('fullname', 32)
            ->requirePresence('fullname', 'create')
            ->notEmptyString('fullname');

        $validator
            ->scalar('middlename')
            ->maxLength('middlename', 32)
            ->allowEmptyString('middlename');

        $validator
            ->scalar('dob')
            ->maxLength('dob', 32)
            ->allowEmptyString('dob');

        $validator
            ->scalar('town')
            ->maxLength('town', 64)
            ->requirePresence('town', 'create')
            ->notEmptyString('town');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 64)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 8)
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

       /* $validator
            ->integer('status')
            ->notEmptyString('status');*/

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['lga_id'], 'Lgas'));
        $rules->add($rules->existsIn(['course_id'], 'Courses'));
        $rules->add($rules->existsIn(['position_id'], 'Positions'));
        return $rules;
    }
}
