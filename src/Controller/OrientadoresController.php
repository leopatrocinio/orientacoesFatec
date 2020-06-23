<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Orientadores Controller
 *
 * @property \App\Model\Table\OrientadoresTable $Orientadores
 * @method \App\Model\Entity\Orientadore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrientadoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orientadores = $this->paginate($this->Orientadores);

        $this->set(compact('orientadores'));
    }

    /**
     * View method
     *
     * @param string|null $id Orientadore id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orientadore = $this->Orientadores->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('orientadore'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orientadore = $this->Orientadores->newEmptyEntity();
        if ($this->request->is('post')) {
            $orientadore = $this->Orientadores->patchEntity($orientadore, $this->request->getData());
            if ($this->Orientadores->save($orientadore)) {
                $this->Flash->success(__('The orientadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orientadore could not be saved. Please, try again.'));
        }
        $this->set(compact('orientadore'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Orientadore id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orientadore = $this->Orientadores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orientadore = $this->Orientadores->patchEntity($orientadore, $this->request->getData());
            if ($this->Orientadores->save($orientadore)) {
                $this->Flash->success(__('The orientadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The orientadore could not be saved. Please, try again.'));
        }
        $this->set(compact('orientadore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Orientadore id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orientadore = $this->Orientadores->get($id);
        if ($this->Orientadores->delete($orientadore)) {
            $this->Flash->success(__('The orientadore has been deleted.'));
        } else {
            $this->Flash->error(__('The orientadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
