<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 define('ROOT_PATH', dirname(__FILE__));
include_once(ROOT_PATH.'/base.php');
class Pagination_controllers extends Base {
	function __construct () {
            parent::__construct(); 
	}
	
	function contact_info(){
		$audience_user = Array(
			'893' => Array
				(
					'userID' => '893',
					'user_params' => Array
						(
							'name' => 'aman',
						),

					'dimensions' => Array
						(
							'trial' => 'paid',
							'tr' => 'pa',
						),

				),
			'894' => Array
				(
					'userID' => '894',
					'user_params' => Array
						(
							'name' => 'amanaa',
						),

					'dimensions' => Array
						(
							'trial' => 'paidaa',
							'tr' => 'paaa',
						),

				),
			'895' => Array
				(
					'userID' => '895',
					'user_params' => Array
						(
							'name' => 'jon',
						),

					'dimensions' => Array
						(
							'trial' => 'paidaa',
							'tr' => 'paaa',
						),

				),
			'896' => Array
				(
					'userID' => '896',
					'user_params' => Array
						(
							'name' => 'alok',
						),

					'dimensions' => Array
						(
							'trial' => 'paidaa',
							'tr' => 'paaa',
						),

				),
			'897' => Array
				(
					'userID' => '897',
					'user_params' => Array
						(
							'name' => 'aman kumar',
						),

					'dimensions' => Array
						(
							'trial' => 'paid',
							'tr' => 'pa',
						),

				),
			'898' => Array
				(
					'userID' => '898',
					'user_params' => Array
						(
							'name' => 'amanaa pandy',
						),

					'dimensions' => Array
						(
							'trial' => 'paidaa',
							'tr' => 'paaa',
						),

				),
			'899' => Array
				(
					'userID' => '899',
					'user_params' => Array
						(
							'name' => 'jon hada',
						),

					'dimensions' => Array
						(
							'trial' => 'paidaa',
							'tr' => 'paaa',
						),

				),
			'900' => Array
				(
					'userID' => '900',
					'user_params' => Array
						(
							'name' => 'alok kumar singh',
						),

					'dimensions' => Array
						(
							'trial' => 'paidaa',
							'tr' => 'paaa',
						),

				),
		);
		
		 if(!empty($audience_user)){
			$totalCount = count($audience_user);
			$perPage = 2;
			$offset = (!empty($_REQUEST['per_page'])) ? $_REQUEST['per_page'] : 0;
			$data['pagination'] = $this->_pagination(base_url()."index.php/pagination/contact_info", $totalCount, $perPage, 4);

			$data['list'] = array_slice($audience_user, $offset, $perPage);
		}   
	
		$this->load->view("pagination_view", $data);
	}

  
}
