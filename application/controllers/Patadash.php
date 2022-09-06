<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Patadash extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $title['pg_title'] = "Blog Center";
        $this->load->view('controlpanel/dashb', $title);
        $this->load->view('controlpanel/footer');
    }
    // dahboard with blog posts
    public function viewblogs()
    {
        $title['pg_title'] = "View Blogs";
        $this->load->view('controlpanel/dashb', $title);
        $data['result'] = $this->patadash_model->viewallposts();
        // echo json_encode($data);
        $this->load->view('controlpanel/viewposts', $data);
        $this->load->view('controlpanel/footer');
    }
    public function addblogs()
    {
        $title['pg_title'] = "Create a Blog Post";
        $this->load->view('controlpanel/dashb', $title);
        $this->load->view('controlpanel/addpost');
        $this->load->view('controlpanel/footer');

        if ($_FILES) {
            $config['upload_path'] = 'assets/uploads/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';

            $this->upload->initialize($config);
            if (!$this->upload->do_upload('blog_image')) {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                die("Upload Error");
            } else {
                $data = array('upload_data' => $this->upload->data());
                // blog title and content
                $blogdata['title'] = $_POST['blog_heading'];
                $blogdata['content'] = $_POST['blog_content'];
                $blogdata['img'] = "assets/uploads/" . $data['upload_data']['file_name'];


                $response = $this->patadash_model->createblog($blogdata);
                if ($response == true) {
                    echo '<script>alert("Blog Published")</script>';
                } else {
                    echo '<script>alert("Publish Error")</script>';
                }
            }
        }
    }

    // populate edit data into a form
    public function fill_tbldata($bid)
    {
        $title['pg_title'] = "Edit Blog";
        $this->load->view('controlpanel/dashb', $title);
        // find data in db and store in array
        $data['result'] = $this->patadash_model->fill_editform($bid);

        // using the id key send the data to a view page
        $data['bid'] = $bid;
        $this->load->view('controlpanel/editform', $data);
        $this->load->view('controlpanel/footer');
    }

    // update changes made to the database
    public function editpost()
    {
        if ($_FILES['blog_image']['name']) {

            $config['upload_path']          = 'assets/uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('blog_image')) {
                $error = array('error' => $this->upload->display_errors());
                die('Error');
            } else {
                $filedata = $this->upload->data();
                $id  = $_POST['blog_id'];
                $db = array(
                    'title' => $_POST['blog_heading'],
                    'content' => $_POST['blog_content'],
                    'img' => "assets/uploads/" . $filedata['file_name']
                );
                if ($this->patadash_model->editfile($db, $id)) {
                    echo "<script>alert('Blog Post Updated')</script>";
                    redirect('patadash/viewblogs');
                } else {
                    echo "<script>alert('Error: Blog post was not updated')</script>";
                }
            }
        } else {
            $id = $_POST['blog_id'];
            $db = array(

                'title' => $_POST['blog_heading'],
                'content' => $_POST['blog_content'],
            );
            if ($this->patadash_model->editcontent($db, $id)) {
                echo "<script>alert('Blog Post Updated')</script>";
                redirect('patadash/viewblogs');
            } else {
                echo "<script>alert('Error: Blog post was not updated')</script>";
            }
        }
    }
}
