<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Books Controller
 *
 * @property \App\Model\Table\BooksTable $Books
 *
 * @method \App\Model\Entity\Book[] paginate($object = null, array $settings = [])
 */
class BooksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
	 	
    public function index()
    {
		//$this->viewBuilder()->layout('bookl');
        $this->paginate = [
            'contain' => ['Publishers', 'Author']
        ];
        $books = $this->paginate($this->Books);

        $this->set(compact('books'));
        $this->set('_serialize', ['books']);
		
    }

    /**
     * View method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		//$this->viewBuilder()->layout('bookl');
        $book = $this->Books->get($id, [
            'contain' => ['Publishers', 'Author', 'Shops']
        ]);

        $this->set('book', $book);
        $this->set('_serialize', ['book']);
		
		
		
		
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		//$this->viewBuilder()->layout('bookl');
        $book = $this->Books->newEntity();
		
		//$this->loadModel('Author');
      // $this->set('aut_id', $this->Author->find('list',array('fields'=>array('id','aut_name'))));
		
        if ($this->request->is('post')) {
            $book = $this->Books->patchEntity($book, $this->request->getData());
            if ($this->Books->save($book)) {
                $this->Flash->success(__('The book has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book could not be saved. Please, try again.'));
        }
        $publishers = $this->Books->Publishers->find('list', [
   'keyField' => 'id',
   'valueField' => 'pub_name'
], ['limit' => 200]);
        $author = $this->Books->Author->find('list',[
   'keyField' => 'id',
   'valueField' => 'aut_name'
], ['limit' => 200]);

$shopnames = $this->Books->Shopnames->find('list',[
   'keyField' => 'id',
   'valueField' => 'shopname'
], ['limit' => 200]);

        $this->set(compact('book', 'publishers', 'author', 'shopnames'));
        $this->set('_serialize', ['book']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		//$this->viewBuilder()->layout('bookl');
        $book = $this->Books->get($id, [
            'contain' => []
        ]);
		
				
        if ($this->request->is(['patch', 'post', 'put'])) {
            $book = $this->Books->patchEntity($book, $this->request->getData());
            if ($this->Books->save($book)) {
                $this->Flash->success(__('The book has been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The book could not be updated. Please, try again.'));
        }
       $publishers = $this->Books->Publishers->find('list', [
   'keyField' => 'id',
   'valueField' => 'pub_name'
], ['limit' => 200]);
        $author = $this->Books->Author->find('list',[
   'keyField' => 'id',
   'valueField' => 'aut_name'
], ['limit' => 200]);
        $this->set(compact('book', 'publishers', 'author'));
        $this->set('_serialize', ['book']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Book id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
		//$this->viewBuilder()->layout('bookl');
        $this->request->allowMethod(['post', 'delete']);
        $book = $this->Books->get($id);
        if ($this->Books->delete($book)) {
            $this->Flash->success(__('The book has been deleted.'));
        } else {
            $this->Flash->error(__('The book could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	 public function search()
    {

        $this->request->allowMethod('ajax');
   
        $keyword = $this->request->query('keyword');

        $query = $this->Books->find('all',[
              'conditions' => ['book_name LIKE'=>'%'.$keyword.'%'],
              'order' => ['Books.id'=>'DESC'],
              'limit' => 10
        ]);

        $this->set('books', $this->paginate($query));
        $this->set('_serialize', ['books']);

    }
}
