<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
    $this->load->helper('date');
		
	}

	public function log($nni, $password)
 {
   $this -> db -> select('id_users, nni, pwd_users,nom_users,prenom_users,droits_users');
   $this -> db -> from('users');
   $this -> db -> where('nni', $nni);
   $this -> db -> where('pwd_users', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
       return $query->result();
   }
   else
   {
       return false;
   }
 }

 public function logip($id)
 {
  $ip = $this->input->ip_address(); 
  //$date = date("Y-m-d H:i:s" );
  $format = 'DATE_W3C';
  $time = time();
  $date = standard_date($format, $time);

  $getquery = array (
    'ip_logs' => $ip,
    'time_connect' => $date,
    'id_users' => $id
    );
  
  $this->db->insert('logs', $getquery);
  
}

}

/* End of file connexion_model.php */
/* Location: ./application/models/connexion_model.php */