<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class BookController extends Controller {
    public function index(){
        $this->display('book/index');
    }
    public function footer(){
        $this->display('book/footer');
    }
    public function header(){
        $this->display('book/header');
    }
    
	public function login(){
        $this->display('book/login');
    }
    
    public function register(){
        $this->display('book/register');
    }
    public function product(){
        $this->display('book/product');
    }
    public function open(){
        $this->display('book/open');
    }
    public function shopping(){
        $this->display('book/shopping');
    }
}