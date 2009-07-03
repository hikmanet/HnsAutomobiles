<?php 
class SuppliersController extends AppController 
{ 
	public $name = 'Suppliers'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    var $helpers = array('Html', 'Form','Pagination','Javascript','Ajax');
	
	/*var	$menus= null;
	function initialize() {
       $this->_loadModels();
    }
	function beforeRender()
	{
		App::import('Controller', 'Menus');
		$this->menus = new MenusController();
		$this->menus->constructClasses();
		return $this->menus->test();
	}
		
	function renderSubmenu($id)
	{
		App::import('Controller', 'Submenus');
		$this->submenus = new SubmenusController();
		$this->submenus->constructClasses();
		return $this->submenus->smenu($id);
	}
	function sdt($id)
	{
		$sdata = $this->renderSubmenu($id);
		$this->set('sdata',$sdata);
		//$this->set('t',$t);
	}
	*/
	
	function index() {
		$val = $this->beforeRender();
		$this->set('val',$val);
		$criteria=NULL; 
        list($order,$limit,$page) = $this->Pagination->init($criteria); // Added 
        $suppliers = $this->Supplier->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('suppliers',$suppliers); 
	}
	public function view($id)
	{	
		$this->Supplier->id = $id;
		$this->set('data', $this->Supplier->read());
	}
	
	function add() {
		 if (!empty($this->data)) {
			 $this->Supplier->create();
			 if ($this->Supplier->save($this->data['Supplier'])) {
			 $this->Session->setFlash(__('The Suppliers Data has been saved', true));
			// $this->redirect(array('action'=>'index'));
		 } 
		 else 
		 {
			 $this->Session->setFlash(__('The Post could not be saved. Please, try again.',true));
		 }
	 }
}
	
	function delete($id) 
	{ 
	   if ($this->Supplier->del($id)) 
	   { 
		   $this->Session->setFlash('The Supplier with id: '.$id.' has been deleted.');
		   $this->redirect('/suppliers');
	   } 
	}
	public function edit($id = null)
	{
	   if (empty($this->data['Supplier']))
	   {
		   $this->Supplier->id = $id;
		   $this->data = $this->Supplier->read();
	   }
	   else
	   {
		   if($this->Supplier->save($this->data['Supplier']))
		   {
				$this->Session->setFlash('Supplier has been updated.');
				$this->redirect('/suppliers');
		   }
	   }
	   
	}
} 
?>