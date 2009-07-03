<?php 
class PostsController extends AppController 
{ 
	public $name = 'Posts'; 
	//var $scaffold; 
	//var $helper1s = array('Ajax','Session','Time');
	var $helpers = array('Html', 'Form','Pagination');
	var $components = array ('Pagination'); // Added 
    //var $helpers = array('Pagination'); 
	function index() {
		$criteria=""; 
       list($order,$limit,$page) = $this->Pagination->init($criteria); // Added 
       $posts = $this->Post->findAll($criteria, NULL, $order, $limit, $page); // Extra parameters added 
      // $posts = $this->Post->find(" id=1");
	    $this->set('posts',$posts); 
	
	}
	
	public function view($id)
	{	
		$this->Post->id = $id;
		$this->set('data', $this->Post->read());
	}
	function add() {
		 
		 if (!empty($this->data)) {
			 //echo $this->data['Posts']['name'];$this->data['Posts']['name']
			//$tt = $this->Post->setPost($this->Post->find(array('name'=>$this->data['Posts']['name'])));
			 
			 $this->Post->create();
			 if ($this->Post->save($this->data['Posts'])) {
			 $this->Session->setFlash(__('The Posts Data has been saved', true));
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
	   if ($this->Post->del($id)) 
	   { 
		   $this->Session->setFlash('The note with id: '.$id.' has been deleted.');
		   $this->redirect('/posts');
	   } 
	}
	public function edit($id = null)
	{
	   if (empty($this->data['Post']))
	   {
		   $this->Post->id = $id;
		   $this->data = $this->Post->read();
	   }
	   else
	   {
		   if($this->Post->save($this->data['Post']))
		   {
				$this->Session->setFlash('Your note has been updated.');
				$this->redirect('/posts');
		   }
	   }
	   
	}
	
	
} 
?>