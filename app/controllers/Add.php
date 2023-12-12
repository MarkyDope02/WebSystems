<?php
class Add extends Controller {
	public function index() {
		$this->call->view('Register');
	} 

	public function Log() {
		$this->call->view('Login');
	} 

	public function Dash() {
		$this->call->view('Dashboard');
	} 


}
?>