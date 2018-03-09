<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbBestProductsBestIdSeq Controller
 *
 * @property \App\Model\Table\DtbBestProductsBestIdSeqTable $DtbBestProductsBestIdSeq
 *
 * @method \App\Model\Entity\DtbBestProductsBestIdSeq[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbBestProductsBestIdSeqController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dtbBestProductsBestIdSeq = $this->paginate($this->DtbBestProductsBestIdSeq);

        $this->set(compact('dtbBestProductsBestIdSeq'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Best Products Best Id Seq id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbBestProductsBestIdSeq = $this->DtbBestProductsBestIdSeq->get($id, [
            'contain' => []
        ]);

        $this->set('dtbBestProductsBestIdSeq', $dtbBestProductsBestIdSeq);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbBestProductsBestIdSeq = $this->DtbBestProductsBestIdSeq->newEntity();
        if ($this->request->is('post')) {
            $dtbBestProductsBestIdSeq = $this->DtbBestProductsBestIdSeq->patchEntity($dtbBestProductsBestIdSeq, $this->request->getData());
            if ($this->DtbBestProductsBestIdSeq->save($dtbBestProductsBestIdSeq)) {
                $this->Flash->success(__('The dtb best products best id seq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb best products best id seq could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbBestProductsBestIdSeq'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Best Products Best Id Seq id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbBestProductsBestIdSeq = $this->DtbBestProductsBestIdSeq->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbBestProductsBestIdSeq = $this->DtbBestProductsBestIdSeq->patchEntity($dtbBestProductsBestIdSeq, $this->request->getData());
            if ($this->DtbBestProductsBestIdSeq->save($dtbBestProductsBestIdSeq)) {
                $this->Flash->success(__('The dtb best products best id seq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb best products best id seq could not be saved. Please, try again.'));
        }
        $this->set(compact('dtbBestProductsBestIdSeq'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Best Products Best Id Seq id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbBestProductsBestIdSeq = $this->DtbBestProductsBestIdSeq->get($id);
        if ($this->DtbBestProductsBestIdSeq->delete($dtbBestProductsBestIdSeq)) {
            $this->Flash->success(__('The dtb best products best id seq has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb best products best id seq could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
