<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Dropzone extends MX_Controller {
		private $datauser;
		function __construct() {
			parent::__construct();
                        
                        $this->load->model('actor_model');
                        $this->load->model('portfolio_model', 'portfolio');
                        $this->load->model('categories_model', 'categories');
			$this->load->helper(array('url','file','form'));
                        $this->load->library('form_validation');
		}
		
  
		function index(){
			$data['js'] = base_url('assets/js');
			$data['css'] = base_url('assets/css');
			$data['img'] = base_url('assets/images');
			$data['categories_dropdown'] = $this->categories->get_all();
			$this->load->view('dropzone', $data);
		}
                
                function test () {
                    
                     $username = $this->input->get('name');
                    var_dump($username);die();

                    
                }
		
		function gambar_upload() {
                    
                    
                    
                        

        //$this->form_validation->set_rules('category', 'category', 'required');			
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');

        $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');

        if ($this->form_validation->run() == FALSE) { // validation hasn't been passed
            $this->load->view('dropzone', $data);
        } else { // passed validation proceed to post success logic
            // build array for the model

         

            $this->portfolio->insert(array(
                'name' => $this->input->get('name'),
                'description' => $this->input->get('description'),
                'link' => $this->input->get('link'),
            ));
            // run insert model to write data to db
            $last_id = $this->db->insert_id();

            if ($last_id) {
//$array = array(1,2,3);
                $array = $this->input->get('categories[]');
                //var_dump($array);die();
                foreach ($array as $key) {
                    $data = array(
                        'portfolio_id' => $last_id,
                        'categories_id' => $key,
                    );

                    $this->db->insert('portfolio_categories', $data);
                }

               	if (!empty($_FILES)) {
				$tempFile = $_FILES['file']['tmp_name'];
				$fileName = $_FILES['file']['name'];
				$fileType = $_FILES['file']['type'];
				$fileSize = $_FILES['file']['size'];
				$targetPath = './assets/uploads/';
				$targetFile = $targetPath . $fileName ;

				move_uploaded_file($tempFile, $targetFile);
                                
                                
                              //$this->db->insert('portfolio_items',array('name' => $username, 'description' => 'test', 'link' => 'test'));
				
				$this->db->insert('img_dropzone',array('nama' => $fileName, 'tipe' => $fileType, 'ukuran' => $fileSize));
                                
			}
            }
        }
                    
                   //$username = $this->input->get('name');
                    //var_dump($username);die();
                   
                  
                   

		
                        
                       
		}
	}
