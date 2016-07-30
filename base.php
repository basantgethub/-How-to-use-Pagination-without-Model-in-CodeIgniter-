<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {
	
	var $currentPage;
	var $currentController;
   
	public function __construct () {
		parent::__construct();
                        
                //to prevent xss attack
		$this->security->xss_clean($_REQUEST);
		$this->security->xss_clean($_POST);
		$this->security->xss_clean($_GET);
		                
		//set the current page variable
		$this->currentPage = $this->uri->segment(3, 'index');
		//set the current controller variable
		$this->currentController = $this->uri->segment(2, 'index');
	}
	/*$config = array();
$config["base_url"] = base_url() . "index.php/pagination_controller/contact_info";
$total_row = $this->pagination_model->record_count();
$config["total_rows"] = $total_row;
$config["per_page"] = 1;
$config['use_page_numbers'] = TRUE;
$config['num_links'] = $total_row;
$config['cur_tag_open'] = '&nbsp;<a class="current">';
$config['cur_tag_close'] = '</a>';
$config['next_link'] = 'Next';
$config['prev_link'] = 'Previous';*/
	

	function _pagination($url = '', $totalRows = '', $perPage = '', $numLinks = '', $queryStringSegment = ''){
		$this->load->library('pagination');
		$separator = "?";
		if (strpos($url,"?")!=false) $separator = "";
		$config['base_url'] = $url.$separator;
		$config['total_rows'] = $totalRows;
		$config['per_page'] = $perPage;
		$config['num_links'] = $numLinks;

		$config['full_tag_open'] = '<div id = "pagination">';
		$config['full_tag_close'] = '</div>';
		/*$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';*/

		$config['query_string_segment'] = (!empty($queryStringSegment)) ? $queryStringSegment : 'per_page';
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}

