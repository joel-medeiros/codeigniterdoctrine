<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('Entities/usuario', 'usuario');
		$this->usuario->nome = 'Joel é legal';
		$this->usuario->email = 'meuemail@mail.com.br';
		$this->usuario->telefone = '11-11-11';
		$this->usuario->celular = '11-1111-11';
		$this->doctrine->em->persist($this->usuario);
	 	$this->doctrine->em->flush();

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */