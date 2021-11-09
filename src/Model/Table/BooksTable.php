<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Books Model
 *
 * @property \App\Model\Table\PublishersTable|\Cake\ORM\Association\BelongsTo $Publishers
 * @property \App\Model\Table\AuthorTable|\Cake\ORM\Association\BelongsTo $Author
 *
 * @method \App\Model\Entity\Book get($primaryKey, $options = [])
 * @method \App\Model\Entity\Book newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Book[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Book|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Book patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Book[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Book findOrCreate($search, callable $callback = null, $options = [])
 */
class BooksTable extends Table
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

        $this->setTable('books');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Publishers', [
            'foreignKey' => 'pub_id'
        ]);
        $this->belongsTo('Author', [
            'foreignKey' => 'aut_id'
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
            ->notEmpty('book_name','Please, enter book name !')
			->add('book_name', [
'length' => [
'rule' => ['minLength', 3],
'message' => 'Book Name need to be at least 3 characters long',
]
]);

        $validator
            ->allowEmpty('volume');

        $validator
            ->allowEmpty('category');

        $validator
            ->allowEmpty('subcategory');

        $validator
            ->numeric('price')
            ->allowEmpty('price');

        $validator
            ->date('pub_date')
            ->allowEmpty('pub_date');

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
        $rules->add($rules->existsIn(['pub_id'], 'Publishers'));
        $rules->add($rules->existsIn(['aut_id'], 'Author'));

        return $rules;
    }
}
