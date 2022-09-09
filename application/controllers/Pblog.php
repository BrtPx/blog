<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pblog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    //  Main Page
    public function index()
    {
        $title['pg_title'] = "Blog";
        $this->load->view('webview/web_blog', $title);
    }

    public function webpay()
    {
        $title['pg_title'] = "Payment Options";
        $this->load->view('webview/weblog_payment', $title);
    }
    public function webdel()
    {
        $title['pg_title'] = "Delivery Options";
        $this->load->view('webview/weblog_delivery', $title);
    }
    public function webbrands()
    {
        $title['pg_title'] = "Quality Products";
        $this->load->view('webview/weblog_quality', $title);
    }

    // Blog Posts - Static
    public function iosblog()
    {
        $title['pg_title'] = "iPhones";
        $this->load->view('webview/webposts/iosblog.php', $title);
    }
    public function androidblog()
    {
        $title['pg_title'] = "Android Smartphones";
        $this->load->view('webview/webposts/androidblog.php', $title);
    }
    public function tvblog()
    {
        $title['pg_title'] = "Televisions";
        $this->load->view('webview/webposts/tvblog.php', $title);
    }
    public function audioblog()
    {
        $title['pg_title'] = "Audio Systems";
        $this->load->view('webview/webposts/audioblog.php', $title);
    }
    public function fridgeblog()
    {
        $title['pg_title'] = "Refrigerators";
        $this->load->view('webview/webposts/fridgeblog.php', $title);
    }
    public function cookerblog()
    {
        $title['pg_title'] = "Cookers and Ovens";
        $this->load->view('webview/webposts/cookersblog.php', $title);
    }
    public function heatcoldblog()
    {
        $title['pg_title'] = "Hot vs Cold";
        $this->load->view('webview/webposts/heatcoldblog.php', $title);
    }
}
