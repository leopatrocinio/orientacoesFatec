<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Historicos Controller
 *
 * @property \App\Model\Table\HistoricosTable $Historicos
 * @method \App\Model\Entity\Historico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HistoricosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $historicos = $this->paginate($this->Historicos);

        $this->set(compact('historicos'));
    }

    /**
     * View method
     *
     * @param string|null $id Historico id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $historico = $this->Historicos->get($id, [
            'contain' => ['Trabalhos'],
        ]);

        $this->set(compact('historico'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historico = $this->Historicos->newEmptyEntity();
        if ($this->request->is('post')) {
            $historico = $this->Historicos->patchEntity($historico, $this->request->getData());
            if ($this->Historicos->save($historico)) {
                $this->Flash->success(__('The historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The historico could not be saved. Please, try again.'));
        }
        $trabalhos = $this->Historicos->Trabalhos->find('list', ['limit' => 200]);
        $this->set(compact('historico', 'trabalhos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Historico id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historico = $this->Historicos->get($id, [
            'contain' => ['Trabalhos'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historico = $this->Historicos->patchEntity($historico, $this->request->getData());
            if ($this->Historicos->save($historico)) {
                $this->Flash->success(__('The historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The historico could not be saved. Please, try again.'));
        }
        $trabalhos = $this->Historicos->Trabalhos->find('list', ['limit' => 200]);
        $this->set(compact('historico', 'trabalhos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Historico id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historico = $this->Historicos->get($id);
        if ($this->Historicos->delete($historico)) {
            $this->Flash->success(__('The historico has been deleted.'));
        } else {
            $this->Flash->error(__('The historico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
