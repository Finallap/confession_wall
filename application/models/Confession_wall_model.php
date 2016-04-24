<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confession_wall_model extends CI_Model{

	var $db_connect_connect;

	public function __construct() 
	{	
		parent::__construct();
		$this->db_connect= $this->load->database ('db2', TRUE);
	}

	public function get_confession_message($count=10,$offset=0) //获取按条件搜索出的用户列表
	{
		$this->db_connect->select("confession_message_id,from,to_who,content,release_time,reviewed_flag");
		$this->db_connect->from("confession_message");

		$this->db_connect->where("reviewed_flag",1);

		$this->db_connect->limit($count,$offset);
		$this->db_connect->order_by('release_time','DESC');
		$query=$this->db_connect->get();
		$query=$query->result_array();

		return $query;
	}

	public function all_count() 
	{
		$this->db_connect->where("reviewed_flag",1);
		return $this->db_connect->count_all_results('confession_message');
	}

	public function add_confession_message($open_id,$from,$to_who,$content,$student_name = NULL,$student_id = NULL,$reviewed_flag)
	{
		$data = array(
						'open_id' => $open_id,
						'from' => $from,
						'to_who' => $to_who,
						'content' => $content,
						'release_time' => date('Y-m-d H:i:s'),
						'student_name' => $student_name,
						'student_id' => $student_id,
						'reviewed_flag' => $reviewed_flag
					);
		$this->db_connect->insert('confession_message', $data);
		return true;
	}

	public function delete_confession_message($id)
	{
		$where_array = array('confession_message_id' => $id);
		$this->db_connect->delete('confession_message', $where_array);
	}

	public function query_final_release_time($open_id)
	{
		$this->db_connect->select("release_time");
		$this->db_connect->from("confession_message");
		$this->db_connect->where("open_id",$open_id);
		$this->db_connect->limit(1,0);

		$query=$this->db_connect->get();
		$query=$query->result_array();

		return $query;
	}
}