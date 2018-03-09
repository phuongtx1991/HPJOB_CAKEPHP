<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbBestProducts Controller
 *
 * @property \App\Model\Table\DtbBestProductsTable $DtbBestProducts
 *
 * @method \App\Model\Entity\DtbBestProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbBestProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Products', 'Creators']
        ];
        $dtbBestProducts = $this->paginate($this->DtbBestProducts);

        $this->set(compact('dtbBestProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Dtb Best Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dtbBestProduct = $this->DtbBestProducts->get($id, [
            'contain' => ['Categories', 'Products', 'Creators']
        ]);

        $this->set('dtbBestProduct', $dtbBestProduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dtbBestProduct = $this->DtbBestProducts->newEntity();
        if ($this->request->is('post')) {
            $dtbBestProduct = $this->DtbBestProducts->patchEntity($dtbBestProduct, $this->request->getData());
            if ($this->DtbBestProducts->save($dtbBestProduct)) {
                $this->Flash->success(__('The dtb best product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb best product could not be saved. Please, try again.'));
        }
        $categories = $this->DtbBestProducts->Categories->find('list', ['limit' => 200]);
        $products = $this->DtbBestProducts->Products->find('list', ['limit' => 200]);
        $creators = $this->DtbBestProducts->Creators->find('list', ['limit' => 200]);
        $this->set(compact('dtbBestProduct', 'categories', 'products', 'creators'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dtb Best Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dtbBestProduct = $this->DtbBestProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dtbBestProduct = $this->DtbBestProducts->patchEntity($dtbBestProduct, $this->request->getData());
            if ($this->DtbBestProducts->save($dtbBestProduct)) {
                $this->Flash->success(__('The dtb best product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dtb best product could not be saved. Please, try again.'));
        }
        $categories = $this->DtbBestProducts->Categories->find('list', ['limit' => 200]);
        $products = $this->DtbBestProducts->Products->find('list', ['limit' => 200]);
        $creators = $this->DtbBestProducts->Creators->find('list', ['limit' => 200]);
        $this->set(compact('dtbBestProduct', 'categories', 'products', 'creators'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dtb Best Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dtbBestProduct = $this->DtbBestProducts->get($id);
        if ($this->DtbBestProducts->delete($dtbBestProduct)) {
            $this->Flash->success(__('The dtb best product has been deleted.'));
        } else {
            $this->Flash->error(__('The dtb best product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
