<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Positioncategories Model
 *
 * @property \App\Model\Table\PositionsTable&\Cake\ORM\Association\HasMany $Positions
 *
 * @method \App\Model\Entity\Positioncategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Positioncategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Positioncategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Positioncategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Positioncategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Positioncategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Positioncategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Positioncategory findOrCreate($search, callable $callback = null, $options = [])
 */
class PositioncategoriesTable extends Table
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

        $this->setTable('positioncategories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Positions', [
            'foreignKey' => 'positioncategory_id',
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
            ->maxLength('name', 32)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
