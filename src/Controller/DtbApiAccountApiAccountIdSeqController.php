<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbApiAccountApiAccountIdSeq Controller
 *
 * @property \App\Model\Table\DtbApiAccountApiAccountIdSeqTable $DtbApiAccountApiAccountIdSeq
 *
 * @method \App\Model\Entity\DtbApiAccountApiAccountIdSeq[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbApiAccountApiAccountIdSeqController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dtbApiAccountApiAccountIdSeq = $this->paginate($this->DtbApiAccountApiAccountIdSeq);

        $this->set(compact('dtbApiAccountApiAccountIdSeq'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Api Account Api Account Id Seq id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbApiAccountApiAccountIdSeq = $this->DtbApiAccountApiAccountIdSeq->get($id, [
            'contain' => []
        ]);

        $this->set('dtbApiAccountApiAccountIdSeq', $dtbApiAccountApiAccountIdSeq);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbApiAccountApiAccountIdSeq = $this->DtbApiAccountApiAccountIdSeq->newEntity();
        if ($this->request->is('post')) {
            $dtbApiAccountApiAccountIdSeq = $this->DtbApiAccountApiAccountIdSeq->patchEntity($dtbApiAccountApiAccountIdSeq, $this->request->getData());
            if ($this->DtbApiAccountApiAccountIdSeq->save($dtbApiAccountApiAccountIdSeq)) {
                $this->Flash->success(__('The dtb api account api account id seq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb api account api account id seq could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbApiAccountApiAccountIdSeq'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Api Account Api Account Id Seq id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbApiAccountApiAccountIdSeq = $this->DtbApiAccountApiAccountIdSeq->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbApiAccountApiAccountIdSeq = $this->DtbApiAccountApiAccountIdSeq->patchEntity($dtbApiAccountApiAccountIdSeq, $this->request->getData());
            if ($this->DtbApiAccountApiAccountIdSeq->save($dtbApiAccountApiAccountIdSeq)) {
                $this->Flash->success(__('The dtb api account api account id seq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb api account api account id seq could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbApiAccountApiAccountIdSeq'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Api Account Api Account Id Seq id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbApiAccountApiAccountIdSeq = $this->DtbApiAccountApiAccountIdSeq->get($id);
        if ($this->DtbApiAccountApiAccountIdSeq->delete($dtbApiAccountApiAccountIdSeq)) {
            $this->Flash->success(__('The dtb api account api account id seq has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb api account api account id seq could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
