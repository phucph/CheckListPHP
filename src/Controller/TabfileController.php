<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tabfile Controller
 *
 * @property \App\Model\Table\TabfileTable $Tabfile
 *
 * @method \App\Model\Entity\Tabfile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TabfileController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['File', 'Tab']
        ];
        $tabfile = $this->paginate($this->Tabfile);

        $this->set(compact('tabfile'));
    }

    /**
     * View method
     *
     * @param string|null $id Tabfile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tabfile = $this->Tabfile->get($id, [
            'contain' => ['File', 'Tab']
        ]);

        $this->set('tabfile', $tabfile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tabfile = $this->Tabfile->newEntity();
        if ($this->request->is('post')) {
            $tabfile = $this->Tabfile->patchEntity($tabfile, $this->request->getData());
            if ($this->Tabfile->save($tabfile)) {
                $this->Flash->success(__('The tabfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tabfile could not be saved. Please, try again.'));
        }
        $file = $this->Tabfile->File->find('list', ['limit' => 200]);
        $tab = $this->Tabfile->Tab->find('list', ['limit' => 200]);
        $this->set(compact('tabfile', 'file', 'tab'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tabfile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tabfile = $this->Tabfile->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tabfile = $this->Tabfile->patchEntity($tabfile, $this->request->getData());
            if ($this->Tabfile->save($tabfile)) {
                $this->Flash->success(__('The tabfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tabfile could not be saved. Please, try again.'));
        }
        $file = $this->Tabfile->File->find('list', ['limit' => 200]);
        $tab = $this->Tabfile->Tab->find('list', ['limit' => 200]);
        $this->set(compact('tabfile', 'file', 'tab'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tabfile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tabfile = $this->Tabfile->get($id);
        if ($this->Tabfile->delete($tabfile)) {
            $this->Flash->success(__('The tabfile has been deleted.'));
        } else {
            $this->Flash->error(__('The tabfile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
