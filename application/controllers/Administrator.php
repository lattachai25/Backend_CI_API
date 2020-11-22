<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administrator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
	echo	$this->session->userdata('username');
		$data = array( 'title' => 'Administrator ::   ',
								   'description' => "",
								   'keyword' => '',
								   'head' =>   '',
								   'content' => 'home_admin_view',
								  // 'queryPublic' => $this->pub->get_about_add()

								);

		$this->load->view('Template_admin',$data);
		}

function statusDis($value)
{
	if($value === 'เปิด' || $value === ''){


		  return "<center><img src='".base_url()."assets/uploads/icon_status_green.png'></center>";
	}else{

		return "<center><img src='".base_url()."assets/uploads/icon_status_red.png'></center>";

	}
}



function items()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table('items')

			->order_by('id','title','description')
			->set_subject('items')
			->display_as('title','Title')
			->display_as('description','Description');

				// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
				// $crud->set_field_upload('name_img','assets/uploads/intro');
				$output = $crud->render();
				$this->_example_output($output);
		}


		function about()
		{
				$crud = new grocery_CRUD();
				$crud->set_theme("bootstrap");
				$crud->set_table('about')
	
				->order_by('id','text','img_name')
				->set_subject('About Content')
				->display_as('text','Content')
				->display_as('img_name','Images ')
				->display_as('date','Day ');

	
				    $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
					$crud->set_field_upload('img_name','assets/uploads/About');
					$output = $crud->render();
					$this->_example_output($output);
			}







		public function _example_output($output = null)
		{
			$this->load->view('example.php',$output);
		}


		function homeslide(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("homeslide")
			->order_by('id','id')
			->display_as('img_slide','img_slide')
			->display_as('contact','contact')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_slied','assets/uploads/img-slide');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function homeplaylist(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("homeplaylist")
			->order_by('id','id')
			->display_as('link_vdo', 'link_vdo')
			->display_as('img_bg',' img_bg')
			->display_as('text',' text')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_bg','assets/uploads/img-bg');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function homebike(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("homebike")
			->order_by('id','id')		
			->display_as('img_logo','img_logo')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_logo','assets/uploads/img-logo');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function service1(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("service1")
			->order_by('id','id')		
			->display_as('img','img')
			->display_as('text','text')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_service1','assets/uploads/img-service1');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function service2(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("service2")
			->order_by('id','id')		
			->display_as('img','img')
			->display_as('text','text')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_service2','assets/uploads/img-service2');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function service3(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("service3")
			->order_by('id','id')		
			->display_as('img','img')
			->display_as('text','text')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_service3','assets/uploads/img-service3');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function service4(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("service4")
			->order_by('id','id')		
			->display_as('img','img')
			->display_as('text','text')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_service4','assets/uploads/img-service4');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function service5(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("service5")
			->order_by('id','id')		
			->display_as('img','img')
			->display_as('text','text')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_service5','assets/uploads/img-service5');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function service6(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("service6")
			->order_by('id','id')		
			->display_as('img','img')
			->display_as('text','text')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_service6','assets/uploads/img-service6');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

}




