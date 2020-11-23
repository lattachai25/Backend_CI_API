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
	
				->order_by('id','id')
				->display_as('img','img')
				->display_as('content','content ')
				->display_as('content_main','Content_main')
				->display_as('text','text')
				->display_as('date','Day ');
	
				// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
				$crud->set_field_upload('img_about','assets/uploads/img_about');
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
			->display_as('content','Content')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_slide','assets/uploads/img_slide');
			
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
			$crud->set_field_upload('img_bg','assets/uploads/img_bg');
			
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
			$crud->set_field_upload('img_logo','assets/uploads/img_logo');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function service(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("service")
			->order_by('id','id')		
			->display_as('img','img')
			->display_as('text','text')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_service','assets/uploads/img_service');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function social(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("social")
			->order_by('id','id')
			->display_as('link','link')		
			->display_as('img','img')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_social','assets/uploads/img_social');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function promotion_slide(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("promotion_slide")
			->order_by('id','id')
			->display_as('img_slide','img_slide')
			->display_as('content','content')		
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_promotion_slide','assets/uploads/img_promotion_slide');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function popup(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("popup")
			->order_by('id','id')
			->display_as('img','img')
			->display_as('link','link')	
			->display_as('detail','detail')	
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_popup','assets/uploads/img_popup');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function news(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("news")
			->order_by('id','id')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			// $crud->set_field_upload('img-popup','assets/uploads/img-popup');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function contactus(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("contactus")
			->order_by('id','id')
			->display_as('map_url',' map_url')
			->display_as('content_link',' content_link')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			// $crud->set_field_upload('img-popup','assets/uploads/img-popup');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function gallery(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("gallery")
			->order_by('id','id')
			->display_as('img_product',' img_product')
			->display_as('date_modified',' date_modified')
			->display_as('content',' content')
			->display_as('ddetail',' detail')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_gallery','assets/uploads/img_gallery');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function gallery_category(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("gallery_category")
			->order_by('id','id')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			// $crud->set_field_upload('img-gallery','assets/uploads/img-gallery');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function gallery_img_head(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("gallery_img_head")
			->order_by('id','id')
			->display_as('img',' img')
			->display_as('link',' link')
			->display_as('content',' content')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('gallery_head','assets/uploads/gallery_head');
			
			$output = $crud->render();
			$this->_example_output($output);
		}

		function gallery_img_logo(){
			$crud = new grocery_CRUD();
			$crud->set_theme("bootstrap");
			$crud->set_table("gallery_img_logo")
			->order_by('id','id')
			->display_as('img',' img')
			->display_as('link',' link')
			->display_as('content',' content')
			->display_as('date',' Day');
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('gallery_logo','assets/uploads/gallery_logo');
			
			$output = $crud->render();
			$this->_example_output($output);
		}
}





