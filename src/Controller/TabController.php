<?php
namespace App\Controller;
use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;

/**
 * Tab Controller
 *
 * @property \App\Model\Table\TabTable $Tab
 *
 * @method \App\Model\Entity\Tab[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TabController extends AppController
{


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tab = $this->paginate($this->Tab);

        $this->set(compact('tab'));
    }

    /**
     * View method
     *
     * @param string|null $id Tab id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tab = $this->Tab->get($id, [
            'contain' => []
        ]);
        $this->set('tab', $tab);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tab = $this->Tab->newEntity();
        if ($this->request->is('post')) {
            $tab = $this->Tab->patchEntity($tab, $this->request->getData());
            if ($this->Tab->save($tab)) {
                $this->Flash->success(__('The tab has been saved.'));

                return $this->redirect(['controller'=>'usertab','action' => 'add']);
            }
            $this->Flash->error(__('The tab could not be saved. Please, try again.'));
        }
        $this->set(compact('tab'));
    }
    public function check($id = null)
    {
        $this->request->allowMethod('ajax');
        $tab = $this->Tab->get($id, [
            'contain' => []
        ]);
        $index=$tab->checked;
        if($index==1){
            $check=0;
        } else {
            $check=1;
        }
        $data = [
            'checked' =>$check,
        ];
            $tab = $this->Tab->patchEntity($tab,$data);
            $this->Tab->save($tab);
        $this->set(compact('tab'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tab id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tab = $this->Tab->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tab = $this->Tab->patchEntity($tab, $this->request->getData());
            if ($this->Tab->save($tab)) {
                $this->Flash->success(__('The tab has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tab could not be saved. Please, try again.'));
        }
        $this->set(compact('tab'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tab id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tab = $this->Tab->get($id);
        if ($this->Tab->delete($tab)) {
            $this->Flash->success(__('The tab has been deleted.'));
        } else {
            $this->Flash->error(__('The tab could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
