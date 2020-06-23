<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Formatos Controller
 *
 * @property \App\Model\Table\FormatosTable $Formatos
 * @method \App\Model\Entity\Formato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormatosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $formatos = $this->paginate($this->Formatos);

        $this->set(compact('formatos'));
    }

    /**
     * View method
     *
     * @param string|null $id Formato id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formato = $this->Formatos->get($id, [
            'contain' => ['Trabalhos'],
        ]);

        $this->set(compact('formato'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formato = $this->Formatos->newEmptyEntity();
        if ($this->request->is('post')) {
            $formato = $this->Formatos->patchEntity($formato, $this->request->getData());
            if ($this->Formatos->save($formato)) {
                $this->Flash->success(__('The formato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formato could not be saved. Please, try again.'));
        }
        $this->set(compact('formato'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Formato id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formato = $this->Formatos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formato = $this->Formatos->patchEntity($formato, $this->request->getData());
            if ($this->Formatos->save($formato)) {
                $this->Flash->success(__('The formato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The formato could not be saved. Please, try again.'));
        }
        $this->set(compact('formato'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Formato id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formato = $this->Formatos->get($id);
        if ($this->Formatos->delete($formato)) {
            $this->Flash->success(__('The formato has been deleted.'));
        } else {
            $this->Flash->error(__('The formato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
