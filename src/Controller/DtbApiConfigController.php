<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbApiConfig Controller
 *
 * @property \App\Model\Table\DtbApiConfigTable $DtbApiConfig
 *
 * @method \App\Model\Entity\DtbApiConfig[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbApiConfigController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dtbApiConfig = $this->paginate($this->DtbApiConfig);

        $this->set(compact('dtbApiConfig'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Api Config id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbApiConfig = $this->DtbApiConfig->get($id, [
            'contain' => []
        ]);

        $this->set('dtbApiConfig', $dtbApiConfig);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbApiConfig = $this->DtbApiConfig->newEntity();
        if ($this->request->is('post')) {
            $dtbApiConfig = $this->DtbApiConfig->patchEntity($dtbApiConfig, $this->request->getData());
            if ($this->DtbApiConfig->save($dtbApiConfig)) {
                $this->Flash->success(__('The dtb api config has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb api config could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbApiConfig'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Api Config id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbApiConfig = $this->DtbApiConfig->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbApiConfig = $this->DtbApiConfig->patchEntity($dtbApiConfig, $this->request->getData());
            if ($this->DtbApiConfig->save($dtbApiConfig)) {
                $this->Flash->success(__('The dtb api config has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb api config could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbApiConfig'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Api Config id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbApiConfig = $this->DtbApiConfig->get($id);
        if ($this->DtbApiConfig->delete($dtbApiConfig)) {
            $this->Flash->success(__('The dtb api config has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb api config could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
