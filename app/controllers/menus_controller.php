<?php 
//created by Mujibg  git@github.com:hikmanet/HnsAutomobiles.git
class MenusController extends AppController 
{ 
	public $name = 'Menus'; 
	var $components = array ('Pagination','RequestHandler'); // Added 
    //var $helpers = array('Pagination'); 
	var $helpers = array('Html', 'Form', 'Ajax', 'Pagination','Jmycake','Javascript');
	
	function beforeFilter () {
        if ($this->RequestHandler->accepts('html')) {
            // Execute code only if client accepts an HTML (text/html) response
        }
    }

	
	
	function index() {
		$criteria=NULL; 
        list($order,$limit,$page) = $this->Pagination->init($criteria); // Added 
        $menus = $this->Menu->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
        $this->set('menus',$menus); 
	
	}
	public $test = NULL;
	public function test()
	{
		$test = $this->Menu->findAll(NULL,NULL,' order by Menu.id asc');
		//$test = "Hikmanet";
		return $test;
	}
	
	function autocomplete() {
	   // if ($this->RequestHandler->isAjax() && $this->RequestHandler->isPost()) {
            $fields = explode(",",$this->params['form']['fields']);
            $results = $this->{$this->params['form']['model']}->findAll($this->params['form']['search'].' LIKE \'%'.$this->params['form']['query'].'%\'',$fields,$this->params['form']['search'].' ASC',$this->params['form']['numresult']); 
            $this->set('results',$results);
            $this->set('fields',$fields);
            $this->set('model',$this->params['form']['model']);
            $this->set('input_id',$this->params['form']['rand']);
            $this->set('search',$this->params['form']['search']);
            $this->render('autocomplete','ajax','/common/autocomplete');                
       //}
	   
    } 
	
	
	
	
	/*function ajax_autocomplete(){
	App::import('Sanitize');
        //$this->layout = 'ajax';
        $this->cleaner = new Sanitize();
        $this->data = $this->cleaner->clean($this->data);
       
        $menus = $this->Menu->findAll(array("name like '".$this->data['autocomplete_auto']."%'"));
        $this->set('menus', $menus);
    }
	*/
	public function view($id)
	{	
		$this->Menu->id = $id;
		$this->set('data', $this->Menu->read());
	}
	
	function add() {
	
		 if (!empty($this->data)) {
			 $this->Menu->create();
			 if ($this->Menu->save($this->data['Menu'])) {
			 $this->Session->setFlash(__('The Menus Data has been saved', true));
			 $this->redirect(array('action'=>'index'));
		 } 
		 else 
		 {
			 $this->Session->setFlash(__('The Post could not be saved. Please, try again.',true));
		 }
	 }
}
	
	function delete($id) 
	{ 
	   if ($this->Menu->del($id)) 
	   { 
		   $this->Session->setFlash('The Menu with id: '.$id.' has been deleted.');
		   $this->redirect('/Menus');
	   } 
	}
	public function edit($id = null)
	{
	   if (empty($this->data['Menu']))
	   {
		  echo "data read";
		   $this->Menu->id = $id;
		   $this->data = $this->Menu->read();
	   }
	   else
	   {
		   if($this->Menu->save($this->data['Menu']))
		   {
				$this->Session->setFlash('Your Menu has been updated.');
				$this->redirect('/Menus');
		   }
	   }
	   
	}
} 
?>
