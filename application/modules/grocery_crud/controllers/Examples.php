<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends MX_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
                $this->load->library('Grocery_CRUD_Multiuploader');
                
                
	}
        
        function example_callback_after_upload($uploader_response,$field_info, $files_to_upload)
{
    $this->load->library('image_moo');
 
    //Is only one file uploaded so it ok to use it with $uploader_response[0].
    $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 
 
    $this->image_moo->load($file_uploaded)->resize(800,600)->save($file_uploaded,true);
 
    return true;
}
        
        public function multi_upload()
{
   $crud = new Grocery_CRUD_Multiuploader(); 
   $crud->set_table('images');
  
   $config = array(
        /* Destination directory */
        "path_to_directory" =>'assets/grocery_crud_multiuploader/GC_uploads/pictures/',

       /* Allowed upload type */
      "allowed_types" =>'gif|jpeg|jpg|png',

      /* Show allowed file types while editing ? */
      "show_allowed_types" => true,

     /* No file text */
     "no_file_text" =>'No Pictures',

     /* enable full path or not for anchor during list state */
     "enable_full_path" => false,

     /* Download button will appear during read state */
     "enable_download_button" => true,

     /* One can restrict this button for specific types...*/
    "download_allowed" => 'jpg'
  );

  $crud->new_multi_upload("images_url",$config);
 
  $output = $crud->render();
  $this->_example_output($output);
}


	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function offices_management()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        
        public function portfolio_management()
	{
			$crud = new grocery_CRUD();
                        $crud = new Grocery_CRUD_Multiuploader(); 
                        //$crud->new_multi_upload('images');
                        $this->config->set_item('grocery_crud_file_upload_allow_file_types','gif|jpeg|jpg|png');
                        

			
			$crud->set_table('portfolio_items');
                        //$crud->set_relation_n_n('Categories', 'Portfolio_categories', 'Categories', 'portfolio_id', 'categories_id', 'category_name');
                        //$crud->set_relation_n_n('Categories', 'Portfolio_categories', 'Categories', 'categories_id', 'portfolio_id', 'category_name');
                        $crud->set_relation_n_n('categories', 'portfolio_categories', 'categories', 'portfolio_id', 'categories_id', 'category_name');
                        //$crud->set_relation('images_id', 'images', 'images_url');
                        //$crud->set_relation('images_id','images','images_url');
                        
                        //$crud->set_relation_n_n('images', 'portfolio_images', 'images', 'portfolio_id', 'images_id', 'images_url');
                        
                        $config = array(
        /* Destination directory */
        "path_to_directory" =>'assets/grocery_crud_multiuploader/GC_uploads/pictures/',

       /* Allowed upload type */
      "allowed_types" =>'gif|jpeg|jpg|png',

      /* Show allowed file types while editing ? */
      "show_allowed_types" => true,

     /* No file text */
     "no_file_text" =>'No Pictures',

     /* enable full path or not for anchor during list state */
     "enable_full_path" => false,

     /* Download button will appear during read state */
     "enable_download_button" => true,

     /* One can restrict this button for specific types...*/
    "download_allowed" => 'jpg'
  );
		
                        
                        //$crud->new_multi_upload("images_url",$config);
                        //$crud->new_multi_upload("images",$config);
                        //$crud->set_field_upload('images_url','assets/uploads/files');
                          $crud->set_field_upload('images_url','assets/uploads/images');
 
    $crud->callback_after_upload(array($this,'example_callback_after_upload'));
                        
			$output = $crud->render();

			$this->_example_output($output);
	}
        
        

	public function employees_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('employees');
			$crud->set_relation('officeCode','offices','city');
			$crud->display_as('officeCode','Office City');
			$crud->set_subject('Employee');

			$crud->required_fields('lastName');

			$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function customers_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	public function film_management()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');

		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function film_management_twitter_bootstrap()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('twitter-bootstrap');
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');

			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);

		$output1 = $this->offices_management2();

		$output2 = $this->employees_management2();

		$output3 = $this->customers_management2();

		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}

	public function offices_management2()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('offices');
		$crud->set_subject('Office');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function employees_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('employees');
		$crud->set_relation('officeCode','offices','city');
		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Employee');

		$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function customers_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('customers');
		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
		$crud->display_as('salesRepEmployeeNumber','from Employeer')
			 ->display_as('customerName','Name')
			 ->display_as('contactLastName','Last Name');
		$crud->set_subject('Customer');
		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

}