<?php 

class Home extends Controller {
	public function index(){
		$data['judul'] = "curriculum vitae";
		$data['pendidikan'] = $this->model("Cv_model")->getPendidikan();
		$this->view('template/header',$data);
		$this->view('home/index',$data);
		$this->view('template/footer');
	}
}