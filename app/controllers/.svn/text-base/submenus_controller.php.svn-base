<?php 
class SubmenusController extends AppController 
{ 
	public $name = 'Submenus'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    var $helpers = array('Pagination'); 
	var $uses = array('Menu','Submenu');
	function index() {
		$criteria=NULL; 
        list($order,$limit,$page) = $this->Pagination->init($criteria); // Added 
        $submenus = $this->Submenu->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        //print_r($submenus);
		$this->set('submenus',$submenus); 
		
		
	}
	
	public $test = NULL;
	public function smenu($id)
	{
	   $criteria=" Submenu.menu_id=".$id; 
	   $test = $this->Submenu->findAll($criteria,NULL,' order by Submenu.menu_id asc');
		//$test = "Hikmanet";
		return $test;
	}
	
	public function view($id)
	{	
		$this->Submenu->id = $id;
		$this->set('data', $this->Submenu->read());
	}
	/*public function add()
	{
		//print_r($_POST);
		if(!empty($this->data)) {
        //If the form data can be validated and saved...
		//print_r($this->data);
        if($this->Submenu->save($this->data['Submenus'])) {
            $this->Session->setFlash("Data has been Saved!");
			 $this->redirect('/Submenus');
          }
	    }
	}*/
	function add() {
		   $menus = $this->Menu->findAll(); 
			// print_r($menus);
			 $this->set('menus',$menus); 
		 if (!empty($this->data)) {
		 	 $this->Submenu->create();
			 if ($this->Submenu->save($this->data['Submenu'])) {
			 //$this->Session->setFlash(__('The Submenus Data has been saved', true));
			 $this->redirect(array('action'=>'index'));
		 } 
		 else 
		 {
			// $this->Session->setFlash(__('The Post could not be saved. Please, try again.',true));
		 }
	 }
}
	
	function delete($id) 
	{ 
	   if ($this->Submenu->del($id)) 
	   { 
		 //  $this->Session->setFlash('The Submenu with id: '.$id.' has been deleted.');
		   $this->redirect('/Submenus');
	   } 
	}
	public function edit($id = null)
	{
	   if (empty($this->data['Submenu']))
	   {
		   $this->Submenu->id = $id;
		   $this->data = $this->Submenu->read();
	   }
	   else
	   {
		   if($this->Submenu->save($this->data['Submenu']))
		   {
				//$this->Session->setFlash('Your Submenu has been updated.');
				$this->redirect('/Submenus');
		   }
	   }
	   
	}
} 
?>