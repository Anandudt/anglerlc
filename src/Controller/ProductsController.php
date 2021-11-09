<?php
namespace App\Controller;

use App\Controller\AppController;
class ProductsController extends AppController {

	public function index() {
		$this->viewBuilder()->layout('cartl');
		//$this->set('products', $this->Product->find('all'));
		//$products = $this->paginate($this->products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
	}
	
	public function view($id) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		
		$product = $this->Product->read(null,$id);
		$this->set(compact('product'));
	}
	
}