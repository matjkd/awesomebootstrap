<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "Twitter Bootsrap Stuff";
		$data['subtitle'] = "themes, tutorials etc..";
		$data['themes'] = $this->themes_model->get_themes(20);
		$data['main_content'] = 'template/homepage';
		$this->load->vars($data);
		$this->load->view('template/bootstrap');
	}
	
	public function login() 
	{
	
	if ($this->session->flashdata('message')) {
      $data['message'] = $this->session->flashdata('message');
    }
    $id = 'login';
    //$data['content'] = $this->content_model->get_content($id);
    $data['main_content'] = "user/login_form";
    $data['title'] = "Login";
    $data['subtitle'] = "";
    $data['page'] = "login";
    $this->load->vars($data);
    $this->load->view('template/bootstrap');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */