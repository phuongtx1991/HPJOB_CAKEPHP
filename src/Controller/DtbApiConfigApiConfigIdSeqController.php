<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbApiConfigApiConfigIdSeq Controller
 *
 * @property \App\Model\Table\DtbApiConfigApiConfigIdSeqTable $DtbApiConfigApiConfigIdSeq
 *
 * @method \App\Model\Entity\DtbApiConfigApiConfigIdSeq[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbApiConfigApiConfigIdSeqController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dtbApiConfigApiConfigIdSeq = $this->paginate($this->DtbApiConfigApiConfigIdSeq);

        $this->set(compact('dtbApiConfigApiConfigIdSeq'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Api Config Api Config Id Seq id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbApiConfigApiConfigIdSeq = $this->DtbApiConfigApiConfigIdSeq->get($id, [
            'contain' => []
        ]);

        $this->set('dtbApiConfigApiConfigIdSeq', $dtbApiConfigApiConfigIdSeq);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbApiConfigApiConfigIdSeq = $this->DtbApiConfigApiConfigIdSeq->newEntity();
        if ($this->request->is('post')) {
            $dtbApiConfigApiConfigIdSeq = $this->DtbApiConfigApiConfigIdSeq->patchEntity($dtbApiConfigApiConfigIdSeq, $this->request->getData());
            if ($this->DtbApiConfigApiConfigIdSeq->save($dtbApiConfigApiConfigIdSeq)) {
                $this->Flash->success(__('The dtb api config api config id seq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb api config api config id seq could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbApiConfigApiConfigIdSeq'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Api Config Api Config Id Seq id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbApiConfigApiConfigIdSeq = $this->DtbApiConfigApiConfigIdSeq->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbApiConfigApiConfigIdSeq = $this->DtbApiConfigApiConfigIdSeq->patchEntity($dtbApiConfigApiConfigIdSeq, $this->request->getData());
            if ($this->DtbApiConfigApiConfigIdSeq->save($dtbApiConfigApiConfigIdSeq)) {
                $this->Flash->success(__('The dtb api config api config id seq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb api config api config id seq could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbApiConfigApiConfigIdSeq'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Api Config Api Config Id Seq id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbApiConfigApiConfigIdSeq = $this->DtbApiConfigApiConfigIdSeq->get($id);
        if ($this->DtbApiConfigApiConfigIdSeq->delete($dtbApiConfigApiConfigIdSeq)) {
            $this->Flash->success(__('The dtb api config api config id seq has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb api config api config id seq could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
