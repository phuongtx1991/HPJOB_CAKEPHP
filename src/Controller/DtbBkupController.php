<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbBkup Controller
 *
 * @property \App\Model\Table\DtbBkupTable $DtbBkup
 *
 * @method \App\Model\Entity\DtbBkup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbBkupController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dtbBkup = $this->paginate($this->DtbBkup);

        $this->set(compact('dtbBkup'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Bkup id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbBkup = $this->DtbBkup->get($id, [
            'contain' => []
        ]);

        $this->set('dtbBkup', $dtbBkup);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbBkup = $this->DtbBkup->newEntity();
        if ($this->request->is('post')) {
            $dtbBkup = $this->DtbBkup->patchEntity($dtbBkup, $this->request->getData());
            if ($this->DtbBkup->save($dtbBkup)) {
                $this->Flash->success(__('The dtb bkup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb bkup could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbBkup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Bkup id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbBkup = $this->DtbBkup->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbBkup = $this->DtbBkup->patchEntity($dtbBkup, $this->request->getData());
            if ($this->DtbBkup->save($dtbBkup)) {
                $this->Flash->success(__('The dtb bkup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb bkup could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbBkup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Bkup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbBkup = $this->DtbBkup->get($id);
        if ($this->DtbBkup->delete($dtbBkup)) {
            $this->Flash->success(__('The dtb bkup has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb bkup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
