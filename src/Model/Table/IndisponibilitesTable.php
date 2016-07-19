<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Indisponibilites Model
 *
 * @method \App\Model\Entity\Indisponibilite get($primaryKey, $options = [])
 * @method \App\Model\Entity\Indisponibilite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Indisponibilite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Indisponibilite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Indisponibilite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Indisponibilite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Indisponibilite findOrCreate($search, callable $callback = null)
 */
class IndisponibilitesTable extends Table
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

        $this->table('indisponibilites');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('date_debut')
            ->requirePresence('date_debut', 'create')
            ->notEmpty('date_debut');

        $validator
            ->dateTime('date_fin')
            ->requirePresence('date_fin', 'create')
            ->notEmpty('date_fin');

        return $validator;
    }
}
