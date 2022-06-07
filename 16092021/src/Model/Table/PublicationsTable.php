<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Publications Model
 *
 * @property \App\Model\Table\PublicationcategoriesTable&\Cake\ORM\Association\BelongsTo $Publicationcategories
 *
 * @method \App\Model\Entity\Publication get($primaryKey, $options = [])
 * @method \App\Model\Entity\Publication newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Publication[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Publication|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publication saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Publication patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Publication[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Publication findOrCreate($search, callable $callback = null, $options = [])
 */
class PublicationsTable extends Table
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

        $this->setTable('publications');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Publicationcategories', [
            'foreignKey' => 'publicationcategory_id',
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
            ->scalar('others')
            ->maxLength('others', 128)
            ->allowEmptyString('others');

        $validator
            ->integer('publicationnumber')
            ->allowEmptyString('publicationnumber');

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
        $rules->add($rules->existsIn(['publicationcategory_id'], 'Publicationcategories'));

        return $rules;
    }
}
