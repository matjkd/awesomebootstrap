<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller {

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
		$data['title'] = "Blog";
		$data['subtitle'] = "news/reviews/tutorials";
		$data['blog'] = $this->content_model->get_content_cat('blog');
		$data['main_content'] = 'blog/blog';
		$this->load->vars($data);
		$this->load->view('template/bootstrap');
	}
	
	public function viewblog($menu)
	{
		$data['title'] = "Blog";
		$data['subtitle'] = "news/reviews/tutorials";
		$data['blog'] = $this->content_model->get_content($menu);
		$data['main_content'] = 'blog/blog';
		$this->load->vars($data);
		$this->load->view('template/bootstrap');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */