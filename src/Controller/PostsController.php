<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \App\Posts\Table\PostsController $Posts
 *
 * @method \App\Posts\Entity\Posts[] paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{
  public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
    
    public function index()
    {
        //$posts = $this->Posts->find('all');
        //$this->set(compact('posts'));
		
		 $posts = $this->paginate($this->Posts);

        $this->set(compact('posts'));
        $this->set('_serialize', ['posts']);
    }
	public function view($id = null)
    {
		//$this->viewBuilder()->layout('bookl');
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);

        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }
    
    public function add()
    {
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            $post->created = date("Y-m-d H:i:s");
            $post->modified = date("Y-m-d H:i:s");
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
        $this->set('post', $post);
    }
	public function edit($id = null)
    {
    $post = $this->Posts->get($id);
    if ($this->request->is(['post','put'])) {
        $post = $this->Posts->patchEntity($post, $this->request->data);
        $post->modified = date("Y-m-d H:i:s");
        if ($this->Posts->save($post)) {
            $this->Flash->success(__('Your post has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your post.'));
    }
    $this->set('post', $post);
    }
	
	public function delete($id)
    {
    $this->request->allowMethod(['post', 'delete']);

    $post = $this->Posts->get($id);
    if ($this->Posts->delete($post)) {
        $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
    }
}