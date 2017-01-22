<?php 

// src/Controller/ArticlesController.php
namespace App\Controller;

class ArticlesController extends AppController {

	public function initialize() 
	{
		parent::initialize();
		$this->loadComponent('Flash');
	}

	public function index() 
	{
		$articles = $this->Articles->find('all');
		$this->set(compact('articles', $articles));
	}

	public function view($id) 
	{
		$article = $this->Articles->get($id);
		$this->set(compact('article'));
	}

	public function add() 
	{ 
		$article = $this->Articles->newEntity();
		if ($this->request->is('post')) 
		{
			$article = $this->Articles->patchEntity($article, $this->request->data);
			// debug($this->request->data);
			
			if ($this->Articles->save($article)) 
			{
				$this->Flash->success(__('Votre article a été sauvegarder'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Impossible d"ajouter l"article'));
		}
		$this->set('article', $article);
	}

	public function update($id = null) 
	{
		$article = $this->Articles->get($id);
		if ($this->request->is(['post', 'put'])) 
		{
			$article = $this->Articles->patchEntity($article, $this->request->data);
			if ($this->Articles->save($article)) 
			{
				$this->Flash->success(__('Votre article a été modifié !'));
				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Il y a eu un probleme !'));
		}
		$this->set('article', $article);

	}

	public function delete($id) 
	{
		$this->request->allowMethod(['post', 'delete']);

		$article = $this->Articles->get($id);
		if ($this->Articles->delete($article)) 
		{
			$this->Flash->success(__('Votre article est supprimé !'));
			return $this->redirect(['action' => 'index']);
		}
	}
	

}