<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \App\Model\Table\GendersTable&\Cake\ORM\Association\BelongsTo $Genders
 * @property \App\Model\Table\PositionsTable&\Cake\ORM\Association\BelongsTo $Positions
 * @property \App\Model\Table\DegreesTable&\Cake\ORM\Association\BelongsTo $Degrees
 * @property \App\Model\Table\StatesTable&\Cake\ORM\Association\BelongsTo $States
 * @property \App\Model\Table\LgasTable&\Cake\ORM\Association\BelongsTo $Lgas
 *
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Genders', [
            'foreignKey' => 'gender_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Positions', [
            'foreignKey' => 'position_id',
            'joinType' => 'INNER',
        ]);
        
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Lgas', [
            'foreignKey' => 'lga_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Degs', [
            'foreignKey' => 'deg_id',
            'joinType' => 'INNER',
        ]);
        /*$this->belongsTo('Faculties', [
            'foreignKey' => 'faculty_id',
            'joinType' => 'INNER',
        ]);*/
        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Positioncategories', [
            'foreignKey' => 'positioncategory_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Publicationcategories', [
            'foreignKey' => 'publicationcategory_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Publicationtypes', [
            'foreignKey' => 'publicationtype_id',
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
            ->scalar('code')
            ->maxLength('code', 32)
            ->requirePresence('code', 'create')
            ->notEmptyString('code');

        $validator
            ->scalar('salutation')
            ->maxLength('salutation', 16)
            ->requirePresence('salutation', 'create')
            ->notEmptyString('salutation');*/

        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 32)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname');

        $validator
            ->scalar('surname')
            ->maxLength('surname', 32)
            ->requirePresence('surname', 'create')
            ->notEmptyString('surname');

        $validator
            ->scalar('othername')
            ->maxLength('othername', 32)
            ->allowEmptyString('othername');

        $validator
            ->date('dob')
            ->requirePresence('dob', 'create')
            ->notEmptyDate('dob');

        /*$validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmptyString('age');*/

        /*$validator
            ->scalar('qualification')
            ->maxLength('qualification', 510)
            ->requirePresence('qualification', 'create')
            ->notEmptyString('qualification');

        $validator
            ->scalar('experience')
            ->maxLength('experience', 510)
            ->allowEmptyString('experience');*/

        $validator
            ->integer('yearofteaching')
            ->allowEmptyString('yearofteaching')
            ->add(
            'yearofteaching', 'validFormat', ['rule' => 'numeric','message' => 'Must be a number']);
           
        $validator
            ->scalar('lastposition')
            ->maxLength('lastposition', 64)
            ->allowEmptyString('lastposition');

       /* $validator
            ->integer('publication')
            ->allowEmptyString('publication')
            ->add(
            'publication', 'validFormat', ['rule' => 'numeric','message' => 'Must be a number']);*/

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 16)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->scalar('remark')
            ->allowEmptyString('remark');

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
        $rules->add($rules->existsIn(['gender_id'], 'Genders'));
        $rules->add($rules->existsIn(['position_id'], 'Positions'));
        //$rules->add($rules->existsIn(['deg_id'], 'Degs'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['lga_id'], 'Lgas'));

        return $rules;
    }
}
