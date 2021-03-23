<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use \SplFileObject;
use App\Controller\Admin\AppController;
use Cake\Datasource\ConnectionManager;
/**
 * Producto Controller
 *
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $producto = $this->paginate($this->Producto);

        $this->set(compact('producto'));
    }

    public function cliente()
    {
        $producto = $this->paginate($this->Producto);

        $this->set(compact('producto'));
    }

    /**
     * View method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producto = $this->Producto->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('producto'));
    }

    public function viewcliente($id = null)
    {
        $producto = $this->Producto->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('producto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $producto = $this->Producto->newEmptyEntity();
        if ($this->request->is('post')) {
            $producto = $this->Producto->patchEntity($producto, $this->request->getData());
            
            if(!$producto->getErrors){
                $image = $this->request->getData('image_file');

                $name  = $image->getClientFilename();

                if( !is_dir(WWW_ROOT.'img'.DS.'productos') )
                mkdir(WWW_ROOT.'img'.DS.'productos',0775);
                
                $targetPath = WWW_ROOT.'img'.DS.'productos'.DS.$name;

                if($name)
                $image->moveTo($targetPath);
                
                $producto->image = 'productos/'.$name;
            }
        
            if ($this->Producto->save($producto)) {
                $this->Flash->success(__('El producto ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no pudo ser guardado. Por favor, intente nuevamente.'));
        }
        $this->set(compact('producto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producto = $this->Producto->get($id,['contain'=>[],]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Producto->patchEntity($producto, $this->request->getData());

            if (!$producto->getErrors) {
                $image = $this->request->getData('change_image');
  
                $name  = $image->getClientFilename();
                
                if ($name){
                    if (!is_dir(WWW_ROOT . 'img' . DS . 'productos'))
                        mkdir(WWW_ROOT . 'img' . DS . 'productos', 0775);

                    $targetPath = WWW_ROOT . 'img' . DS . 'productos' . DS . $name;


                    $image->moveTo($targetPath);

                    $imgpath = WWW_ROOT . 'img' . DS . $producto->image;
                    if (file_exists($imgpath)) {
                        unlink($imgpath);
                    }
                    
                    $producto->image = 'productos/' . $name;
                }

                
            }

            if ($this->Producto->save($producto)) {
                $this->Flash->success(__('Los datos del producto han sido actualizados'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Los datos del producto no pudieron ser actualizados. Por favor, intente nuevamente.'));
        }
        $this->set(compact('producto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Producto->get($id);

        $imgpath = WWW_ROOT.'img'.DS.$producto->image;
        
        if ($this->Producto->delete($producto)) {
            if( file_exists($imgpath) ){
                unlink($imgpath);
            }
            $this->Flash->success(__('El producto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El producto no pudo ser eliminado. Por favor, intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

 
}
