<?php
namespace App\Model\Table;

use App\Model\Entity\Part;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Parts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsToMany $Orders
 */
class PartsTable extends Table
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

          $this->addBehavior('Search.Search');
        $this->table('parts');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Orders', [
            'foreignKey' => 'part_id',
            'targetForeignKey' => 'order_id',
            'joinTable' => 'orders_parts'
        ]);
        $this->addBehavior('Josegonzalez/Upload.Upload', [

            'photo' => [

            ]
        ]);
        $part = new Part([
        'photo' => 'imageFile.jpg',

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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('photo', 'create')
            ->notEmpty('photo');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        return $rules;
    }

    public function searchConfiguration()
    {
     $search = new Manager($this);
    $search
    ->add('part_id', 'Search.Value', [

        'field' => $this->alias() . '.part_id'
    ])
    ->add('P', 'Search.Like', [
        //'Users.id Search.Like' => "%$search%",
        //'Users.first_name Search.Like' => "%$search%",
        'before' => true,
        'after' => true,
        'field' => [$this->alias('Name'),('Photo'),('Price')]


    ]);
    return $search;
    }
}
