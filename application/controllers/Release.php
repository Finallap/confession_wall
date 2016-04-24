<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Release extends CI_Controller {

	public function index()
	{
		$open_id = $_SESSION['open_id'];
		$this->check_is_wechat($open_id);

		$this->load->view('template/header');
		$this->load->view('release');
		$this->load->view('template/footer');
	}

	public function action()
	{
		$this->load->model('Confession_wall_model');

		$open_id = $_SESSION['open_id'];
		$from = $this->input->post('from', TRUE);;
		$to_who = $this->input->post('to_who', TRUE);;
		$content = $this->input->post('content', TRUE);;
		$student_name = NULL;
		$student_id = NULL;

		$this->check_is_wechat($open_id);

		if((strpos($from,"[removed][removed]")!== false)||(strpos($to_who,"[removed][removed]")!== false)||(strpos($content,"[removed][removed]")!== false))
		{
			$data['alert_information']="XSS攻击是什么鬼Σ(｀д′*ノ)ノ";
			$data['href']='';
		}
		else
		{
			if($this->check_final_release_time($open_id))
			{
				$this->Confession_wall_model->add_confession_message($open_id,$from,$to_who,$content,$student_name,$student_id,1);
		
				$data['alert_information']="发布成功！ヾ(^▽^*)))";
				$data['href']='';
			}
			else
			{
				$data['alert_information']="你发布表白可发布的真快，咋们不能这么着急刷屏(*╯3╰)";
				$data['href']='';
			}
			
		}

		$this->load->view('template/alert_and_location_href',$data);
	}

	protected function check_final_release_time($open_id)
	{
		$this->load->model('Confession_wall_model');
		$result = $this->Confession_wall_model->query_final_release_time($open_id);
		if(!is_null($result))
		{
			$time1=strtotime(date("Y-m-d H:i:s"));//当前时间
	 		$time=strtotime($result[0]['release_time']);//上次发布时间

			if($time1-$time>3600)
				return TRUE;
			else
				return false;
		}
		else
			return TRUE;
	}

	protected function check_is_wechat($open_id)
	{
		if(!$open_id)
			show_error('请关注“南京邮电大学学生事务中心”微信，从微信“i服务”菜单进入“表白墙”发布表白。', 403, '未从微信进入');
	}
}