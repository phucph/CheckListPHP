<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usertab Controller
 *
 * @property \App\Model\Table\UsertabTable $Usertab
 *
 * @method \App\Model\Entity\Usertab[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsertabController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Tab']
        ];
        $usertab = $this->paginate($this->Usertab);

        $this->set(compact('usertab'));
    }

    /**
     * View method
     *
     * @param string|null $id Usertab id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usertab = $this->Usertab->get($id, [
            'contain' => ['Users', 'Tab']
        ]);

        $this->set('usertab', $usertab);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
        {
            $user = $this->Auth->user('user_id');
            $data = [
                'user_id' => "$user",
            ];
            $entity = $this->Usertab->newEntity();
                $entity = $this->Usertab->patchEntity($entity, $data);
                $this->Usertab->save($entity, $data);
                if ($this->Usertab->save($entity, $data)) {
                    $this->Flash->success(__('The usertab has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
            $this->Flash->error(__('The usertab could not be saved. Please, try again.'));
            $users = $this->Usertab->Users->find('list', ['limit' => 200]);
            $tab = $this->Usertab->Tab->find('list', ['limit' => 200]);
            $this->set(compact('usertab', 'users', 'tab'));
        }
    public function edit($id = null)
    {
        $usertab = $this->Usertab->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usertab = $this->Usertab->patchEntity($usertab, $this->request->getData());
            if ($this->Usertab->save($usertab)) {
                $this->Flash->success(__('The usertab has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usertab could not be saved. Please, try again.'));
        }
        $users = $this->Usertab->Users->find('list', ['limit' => 200]);
        $tab = $this->Usertab->Tab->find('list', ['limit' => 200]);
        $this->set(compact('usertab', 'users', 'tab'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usertab id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usertab = $this->Usertab->get($id);
        if ($this->Usertab->delete($usertab)) {
            $this->Flash->success(__('The usertab has been deleted.'));
        } else {
            $this->Flash->error(__('The usertab could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
