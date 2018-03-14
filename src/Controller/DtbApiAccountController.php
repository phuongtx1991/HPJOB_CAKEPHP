<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DtbApiAccount Controller
 *
 * @property \App\Model\Table\DtbApiAccountTable $DtbApiAccount
 *
 * @method \App\Model\Entity\DtbApiAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DtbApiAccountController extends AppController
{

//    /**
//     * Index method
//     *
//     * @return \Cake\Http\Response|void
//     */
//    public function index()
//    {
//        $dtbApiAccount = $this->paginate($this->DtbApiAccount);
//
//        $this->set(compact('dtbApiAccount'));
//    }
//
//    /**
//     * View method
//     *
//     * @param string|null $id Dtb Api Account id.
//     * @return \Cake\Http\Response|void
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function view($id = null)
//    {
//        $dtbApiAccount = $this->DtbApiAccount->get($id, [
//            'contain' => []
//        ]);
//
//        $this->set('dtbApiAccount', $dtbApiAccount);
//    }
//
//    /**
//     * Add method
//     *
//     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
//     */
//    public function add()
//    {
//        $dtbApiAccount = $this->DtbApiAccount->newEntity();
//        if ($this->request->is('post')) {
//            $dtbApiAccount = $this->DtbApiAccount->patchEntity($dtbApiAccount, $this->request->getData());
//            if ($this->DtbApiAccount->save($dtbApiAccount)) {
//                $this->Flash->success(__('The dtb api account has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The dtb api account could not be saved. Please, try again.'));
//        }
//        $this->set(compact('dtbApiAccount'));
//    }
//
//    /**
//     * Edit method
//     *
//     * @param string|null $id Dtb Api Account id.
//     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
//     * @throws \Cake\Network\Exception\NotFoundException When record not found.
//     */
//    public function edit($id = null)
//    {
//        $dtbApiAccount = $this->DtbApiAccount->get($id, [
//            'contain' => []
//        ]);
//        if ($this->request->is(['patch', 'post', 'put'])) {
//            $dtbApiAccount = $this->DtbApiAccount->patchEntity($dtbApiAccount, $this->request->getData());
//            if ($this->DtbApiAccount->save($dtbApiAccount)) {
//                $this->Flash->success(__('The dtb api account has been saved.'));
//
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('The dtb api account could not be saved. Please, try again.'));
//        }
//        $this->set(compact('dtbApiAccount'));
//    }
//
//    /**
//     * Delete method
//     *
//     * @param string|null $id Dtb Api Account id.
//     * @return \Cake\Http\Response|null Redirects to index.
//     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
//     */
//    public function delete($id = null)
//    {
//        $this->request->allowMethod(['post', 'delete']);
//        $dtbApiAccount = $this->DtbApiAccount->get($id);
//        if ($this->DtbApiAccount->delete($dtbApiAccount)) {
//            $this->Flash->success(__('The dtb api account has been deleted.'));
//        } else {
//            $this->Flash->error(__('The dtb api account could not be deleted. Please, try again.'));
//        }
//
//        return $this->redirect(['action' => 'index']);
//    }


    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index()
    {
        $recipes = $this->DtbApiAccount->find('all');
        $this->set([
            'recipes' => $recipes,
            '_serialize' => ['recipes']
        ]);
    }

    public function view($id)
    {
        $recipe = $this->DtbApiAccount->get($id);
        $this->set([
            'recipe' => $recipe,
            '_serialize' => ['recipe']
        ]);
    }

    public function add()
    {
        $recipe = $this->DtbApiAccount->newEntity($this->request->getData());
        if ($this->DtbApiAccount->save($recipe)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'recipe' => $recipe,
            '_serialize' => ['message', 'recipe']
        ]);
    }

    public function edit($id)
    {
        $recipe = $this->DtbApiAccount->get($id);
        if ($this->request->is(['post', 'put'])) {
            $recipe = $this->DtbApiAccount->patchEntity($recipe, $this->request->getData());
            if ($this->DtbApiAccount->save($recipe)) {
                $message = 'Saved';
            } else {
                $message = 'Error';
            }
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $recipe = $this->DtbApiAccount->get($id);
        $message = 'Deleted';
        if (!$this->DtbApiAccount->delete($recipe)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}
