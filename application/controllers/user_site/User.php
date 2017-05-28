<?php

/**
 * Created by PhpStorm.
 * User: trungduc
 * Date: 27/05/2017
 * Time: 16:14
 */
class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
    }

    /*
    * Kiem tra dang nhap
    */
    public function check_login()
    {

        //lay du lieu tu form
        $username    = $this->input->post('login_username');
        $password = $this->input->post('login_password');

//        echo $username.$password;
//        die();
        $password = md5($password);
        //$password = ($password);
        $where = array('username' => $username, 'password' => $password);
        if(!$this->User_Model->check_exists($where))
        {
            //trả về thông báo lỗi nếu đã tồn tại email này
//            echo "ahii";
//            die();
            $this->form_validation->set_message(__FUNCTION__, 'Đăng nhập không thành công');
            return FALSE;
        }
        return true;
    }

    /*
    * Phuong thuc dang nhap
    */
    public function login()
    {
        if ($this->user_is_login('user')){
            redirect(base_url('user_site/user/profile'), 'refresh');
        }
        //tao cac tap luat
        $this->form_validation->set_rules('submit', 'Đăng nhập', 'callback_check_login');
//        var_dump('121');die();
        if($this->form_validation->run())
        {

            //lay du lieu tu form post sang
            $username    = $this->input->post('login_username');
            $password = $this->input->post('login_password');
            $password = md5($password);


            $where = array('username' => $username, 'password' => $password);
//            //lay thong tin thanh vien
            $user = $this->User_Model->get_info_rule($where);

//            luu thong tin thanh vien vao session
            $this->session->set_userdata('user', $user);
//            tạo thông báo
            $this->session->set_flashdata('flash_message', 'Đăng nhập thành công');
            redirect(base_url(), 'refresh');//chuyen toi trang chu

        }

        //gui du lieu sang view
        $this->load->view('user/master_layout', $this->data);
    }
    public function logout()
    {
        if($this->user_is_login('user'))
        {
            //neu thanh vien da dang nhap thi xoa session login
            $this->session->unset_userdata('user');
        }
        $this->session->set_flashdata('flash_message', 'Đăng xuất thành công');
        redirect(base_url());
    }


}