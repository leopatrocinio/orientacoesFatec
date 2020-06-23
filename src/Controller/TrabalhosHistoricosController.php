<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TrabalhosHistoricos Controller
 *
 * @property \App\Model\Table\TrabalhosHistoricosTable $TrabalhosHistoricos
 * @method \App\Model\Entity\TrabalhosHistorico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrabalhosHistoricosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Trabalhos', 'Historicos'],
        ];
        $trabalhosHistoricos = $this->paginate($this->TrabalhosHistoricos);

        $this->set(compact('trabalhosHistoricos'));
    }

    /**
     * View method
     *
     * @param string|null $id Trabalhos Historico id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trabalhosHistorico = $this->TrabalhosHistoricos->get($id, [
            'contain' => ['Trabalhos', 'Historicos'],
        ]);

        $this->set(compact('trabalhosHistorico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trabalhosHistorico = $this->TrabalhosHistoricos->newEmptyEntity();
        if ($this->request->is('post')) {
            $trabalhosHistorico = $this->TrabalhosHistoricos->patchEntity($trabalhosHistorico, $this->request->getData());
            if ($this->TrabalhosHistoricos->save($trabalhosHistorico)) {
                $this->Flash->success(__('The trabalhos historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trabalhos historico could not be saved. Please, try again.'));
        }
        $trabalhos = $this->TrabalhosHistoricos->Trabalhos->find('list', ['limit' => 200]);
        $historicos = $this->TrabalhosHistoricos->Historicos->find('list', ['limit' => 200]);
        $this->set(compact('trabalhosHistorico', 'trabalhos', 'historicos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Trabalhos Historico id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trabalhosHistorico = $this->TrabalhosHistoricos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trabalhosHistorico = $this->TrabalhosHistoricos->patchEntity($trabalhosHistorico, $this->request->getData());
            if ($this->TrabalhosHistoricos->save($trabalhosHistorico)) {
                $this->Flash->success(__('The trabalhos historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The trabalhos historico could not be saved. Please, try again.'));
        }
        $trabalhos = $this->TrabalhosHistoricos->Trabalhos->find('list', ['limit' => 200]);
        $historicos = $this->TrabalhosHistoricos->Historicos->find('list', ['limit' => 200]);
        $this->set(compact('trabalhosHistorico', 'trabalhos', 'historicos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Trabalhos Historico id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trabalhosHistorico = $this->TrabalhosHistoricos->get($id);
        if ($this->TrabalhosHistoricos->delete($trabalhosHistorico)) {
            $this->Flash->success(__('The trabalhos historico has been deleted.'));
        } else {
            $this->Flash->error(__('The trabalhos historico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
