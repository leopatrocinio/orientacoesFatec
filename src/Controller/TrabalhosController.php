<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Trabalhos Controller
 *
 * @property \App\Model\Table\TrabalhosTable $Trabalhos
 * @method \App\Model\Entity\Trabalho[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrabalhosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Formatos', 'Alunos'],
        ];
        $trabalhos = $this->paginate($this->Trabalhos);

        $this->set(compact('trabalhos'));
    }

    /**
     * View method
     *
     * @param string|null $id Trabalho id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trabalho = $this->Trabalhos->get($id, [
            'contain' => ['Formatos', 'Alunos', 'Historicos'],
        ]);

        $this->set(compact('trabalho'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trabalho = $this->Trabalhos->newEmptyEntity();
        if ($this->request->is('post')) {
            $trabalho = $this->Trabalhos->patchEntity($trabalho, $this->request->getData());
            if ($this->Trabalhos->save($trabalho)) {
                $this->Flash->success(__('The trabalho has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trabalho could not be saved. Please, try again.'));
        }
        $formatos = $this->Trabalhos->Formatos->find('list', ['limit' => 200]);
        $alunos = $this->Trabalhos->Alunos->find('list', ['limit' => 200]);
        $historicos = $this->Trabalhos->Historicos->find('list', ['limit' => 200]);
        $this->set(compact('trabalho', 'formatos', 'alunos', 'historicos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Trabalho id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trabalho = $this->Trabalhos->get($id, [
            'contain' => ['Historicos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trabalho = $this->Trabalhos->patchEntity($trabalho, $this->request->getData());
            if ($this->Trabalhos->save($trabalho)) {
                $this->Flash->success(__('The trabalho has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trabalho could not be saved. Please, try again.'));
        }
        $formatos = $this->Trabalhos->Formatos->find('list', ['limit' => 200]);
        $alunos = $this->Trabalhos->Alunos->find('list', ['limit' => 200]);
        $historicos = $this->Trabalhos->Historicos->find('list', ['limit' => 200]);
        $this->set(compact('trabalho', 'formatos', 'alunos', 'historicos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Trabalho id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trabalho = $this->Trabalhos->get($id);
        if ($this->Trabalhos->delete($trabalho)) {
            $this->Flash->success(__('The trabalho has been deleted.'));
        } else {
            $this->Flash->error(__('The trabalho could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
