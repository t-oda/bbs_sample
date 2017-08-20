<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BbsSample Model
 *
 * @method \App\Model\Entity\BbsSample get($primaryKey, $options = [])
 * @method \App\Model\Entity\BbsSample newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BbsSample[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BbsSample|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BbsSample patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BbsSample[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BbsSample findOrCreate($search, callable $callback = null, $options = [])
 */
class BbsSampleTable extends Table
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

        $this->setTable('bbs_sample');
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        return $validator;
    }
}
