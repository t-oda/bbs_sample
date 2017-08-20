<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BbsSample Controller
 *
 * @property \App\Model\Table\BbsSampleTable $BbsSample
 *
 * @method \App\Model\Entity\BbsSample[] paginate($object = null, array $settings = [])
 */
class BbsSampleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $bbsSample = $this->paginate($this->BbsSample);

        $this->set(compact('bbsSample'));
        $this->set('_serialize', ['bbsSample']);
    }

    /**
     * View method
     *
     * @param string|null $id Bbs Sample id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bbsSample = $this->BbsSample->get($id, [
            'contain' => []
        ]);

        $this->set('bbsSample', $bbsSample);
        $this->set('_serialize', ['bbsSample']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bbsSample = $this->BbsSample->newEntity();
        if ($this->request->is('post')) {
            $bbsSample = $this->BbsSample->patchEntity($bbsSample, $this->request->getData());
            if ($this->BbsSample->save($bbsSample)) {
                $this->Flash->success(__('The bbs sample has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bbs sample could not be saved. Please, try again.'));
        }
        $this->set(compact('bbsSample'));
        $this->set('_serialize', ['bbsSample']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bbs Sample id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bbsSample = $this->BbsSample->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bbsSample = $this->BbsSample->patchEntity($bbsSample, $this->request->getData());
            if ($this->BbsSample->save($bbsSample)) {
                $this->Flash->success(__('The bbs sample has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bbs sample could not be saved. Please, try again.'));
        }
        $this->set(compact('bbsSample'));
        $this->set('_serialize', ['bbsSample']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bbs Sample id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bbsSample = $this->BbsSample->get($id);
        if ($this->BbsSample->delete($bbsSample)) {
            $this->Flash->success(__('The bbs sample has been deleted.'));
        } else {
            $this->Flash->error(__('The bbs sample could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
