<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Indisponibilites Controller
 *
 * @property \App\Model\Table\IndisponibilitesTable $Indisponibilites
 */
class IndisponibilitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $indisponibilites = $this->paginate($this->Indisponibilites);

        $this->set(compact('indisponibilites'));
        $this->set('_serialize', ['indisponibilites']);
    }

    /**
     * View method
     *
     * @param string|null $id Indisponibilite id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $indisponibilite = $this->Indisponibilites->get($id, [
            'contain' => []
        ]);

        $this->set('indisponibilite', $indisponibilite);
        $this->set('_serialize', ['indisponibilite']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $indisponibilite = $this->Indisponibilites->newEntity();
        if ($this->request->is('post')) {
            $indisponibilite = $this->Indisponibilites->patchEntity($indisponibilite, $this->request->data);
            if ($this->Indisponibilites->save($indisponibilite)) {
                $this->Flash->success(__('The indisponibilite has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indisponibilite could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('indisponibilite'));
        $this->set('_serialize', ['indisponibilite']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Indisponibilite id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $indisponibilite = $this->Indisponibilites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $indisponibilite = $this->Indisponibilites->patchEntity($indisponibilite, $this->request->data);
            if ($this->Indisponibilites->save($indisponibilite)) {
                $this->Flash->success(__('The indisponibilite has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indisponibilite could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('indisponibilite'));
        $this->set('_serialize', ['indisponibilite']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Indisponibilite id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $indisponibilite = $this->Indisponibilites->get($id);
        if ($this->Indisponibilites->delete($indisponibilite)) {
            $this->Flash->success(__('The indisponibilite has been deleted.'));
        } else {
            $this->Flash->error(__('The indisponibilite could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
