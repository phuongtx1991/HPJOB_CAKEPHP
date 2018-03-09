<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbBaseinfo Controller
 *
 * @property \App\Model\Table\DtbBaseinfoTable $DtbBaseinfo
 *
 * @method \App\Model\Entity\DtbBaseinfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbBaseinfoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries', 'LawCountries']
        ];
        $dtbBaseinfo = $this->paginate($this->DtbBaseinfo);

        $this->set(compact('dtbBaseinfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Baseinfo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbBaseinfo = $this->DtbBaseinfo->get($id, [
            'contain' => ['Countries', 'LawCountries']
        ]);

        $this->set('dtbBaseinfo', $dtbBaseinfo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbBaseinfo = $this->DtbBaseinfo->newEntity();
        if ($this->request->is('post')) {
            $dtbBaseinfo = $this->DtbBaseinfo->patchEntity($dtbBaseinfo, $this->request->getData());
            if ($this->DtbBaseinfo->save($dtbBaseinfo)) {
                $this->Flash->success(__('The dtb baseinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb baseinfo could not be saved. Please, try again.'));
        }
        $countries = $this->DtbBaseinfo->Countries->find('list', ['limit' => 200]);
        $lawCountries = $this->DtbBaseinfo->LawCountries->find('list', ['limit' => 200]);
        $this->set(compact('dtbBaseinfo', 'countries', 'lawCountries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Baseinfo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbBaseinfo = $this->DtbBaseinfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbBaseinfo = $this->DtbBaseinfo->patchEntity($dtbBaseinfo, $this->request->getData());
            if ($this->DtbBaseinfo->save($dtbBaseinfo)) {
                $this->Flash->success(__('The dtb baseinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb baseinfo could not be saved. Please, try again.'));
        }
        $countries = $this->DtbBaseinfo->Countries->find('list', ['limit' => 200]);
        $lawCountries = $this->DtbBaseinfo->LawCountries->find('list', ['limit' => 200]);
        $this->set(compact('dtbBaseinfo', 'countries', 'lawCountries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Baseinfo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbBaseinfo = $this->DtbBaseinfo->get($id);
        if ($this->DtbBaseinfo->delete($dtbBaseinfo)) {
            $this->Flash->success(__('The dtb baseinfo has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb baseinfo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
