<?php
App::uses('AppController', 'Controller');
/**
 * Loans Controller
 *
 * @property Loan $Loan
 */
class LoansController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Loan->recursive = 0;
		$this->set('loans', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Loan->exists($id)) {
			throw new NotFoundException(__('Invalid loan'));
		}
		$options = array('conditions' => array('Loan.' . $this->Loan->primaryKey => $id));
		$this->set('loan', $this->Loan->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Loan->create();
			if ($this->Loan->save($this->request->data)) {
				$this->Session->setFlash(__('The loan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan could not be saved. Please, try again.'));
			}
		}
		$users = $this->Loan->User->find('list');
		$books = $this->Loan->Book->find('list');
		$this->set(compact('users', 'books'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Loan->exists($id)) {
			throw new NotFoundException(__('Invalid loan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Loan->save($this->request->data)) {
				$this->Session->setFlash(__('The loan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Loan.' . $this->Loan->primaryKey => $id));
			$this->request->data = $this->Loan->find('first', $options);
		}
		$users = $this->Loan->User->find('list');
		$books = $this->Loan->Book->find('list');
		$this->set(compact('users', 'books'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Loan->id = $id;
		if (!$this->Loan->exists()) {
			throw new NotFoundException(__('Invalid loan'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Loan->delete()) {
			$this->Session->setFlash(__('Loan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Loan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
