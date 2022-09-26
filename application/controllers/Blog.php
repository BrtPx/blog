<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog_Model');
    }
    public function index()
    {
        $data['title'] = "Blog";
        $data['blogcol'] = $this->blog_model->get_homepost();
        // print_r($data);
        $this->load->view('webview/web_dynamo', $data);
    }
    public function viewPost()
    {
        $data['title'] = "Post";
        $this->load->view('webview/blogposts', $data);
    }

    public function addPostDetails($id)
    {
        // $data['postdetails'] = $this->blog_model->getpostDetails();
        if ($pcon = $this->blog_model->getDetails($id, 'id')) {
            $message = array(
                'response' => 'success',
                'message' =>  $pcon->title . 'found',
                'image' => $pcon->img,
                'subtitle' => $pcon->subtitle,
                'content' => $pcon->content
            );
        } else {
            $message = array('response' => 'warning', 'message' => 'Something went | try again later');
        }
        echo json_encode($message);
    }
}
