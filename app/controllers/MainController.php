<?php

namespace app\controllers;


use app\models\Product;

class MainController extends AppController {

	public function indexAction(){
		$products = \R::findAll('products');
		$image = \R::findAll('img');
		$this->setMeta('Тестовое задание: Копытник Артём', 'Описание', 'Ключевики');
		$this->set(compact('products', 'image'));
		if(isset($_POST['title'])){
			$product = \R::dispense('products');
			$product->title = $_POST['title'];
			\R::store($product);

            $id = \R::getAll("SELECT id FROM products ORDER BY ID DESC LIMIT 1");
            $id = $id[0]['id'];
			$img = new Product();
			$img->loadImg($id);

            $_SESSION['success'] = 'Товар добавлен';
			redirect();
		}
	}

    public function deleteAction()
    {
        $product_id = $this->getRequestId();
        $product = \R::load('products', $product_id);
        \R::trash($product);
        $_SESSION['success'] = 'Товар удалён';
        redirect();
    }
}