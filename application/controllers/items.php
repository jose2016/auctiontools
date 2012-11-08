<?php
    class Items extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('items_model');
        }

        public function index()
        {
           //$data['resources'] = $this->resources_model->get_resources();
			
            //$this->load->view('templates/header');
            //$this->load->view('resources/index');
            //$this->load->view('templates/footer');
            
            $data['items'] = $this->items_model->get_items();
			$this->load->view('item/view', $data);
        }

        public function view(){
            $data['items'] = $this->items_model->get_items();
			$this->load->view('item/view', $data);
        }

		public function create()
		{
			/*$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = 'Create a resource item';

			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('profile', 'Profile', 'required');
			$this->form_validation->set_rules('profile', 'Profile', 'required');
			$this->form_validation->set_rules('profile', 'Profile', 'required');
			$this->form_validation->set_rules('profile', 'Profile', 'required');
			$this->form_validation->set_rules('profile', 'Profile', 'required');
			$this->form_validation->set_rules('profile', 'Profile', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);	
				$this->load->view('resources/create');
				$this->load->view('templates/footer');

			}
			else
			{
				$this->resources_model->set_resources();
				$this->load->view('resources/success');
			}*/
		}

    }