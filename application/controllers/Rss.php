<?php
//Rss.php

class Rss extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rss_model');

        $this->config->set_item('banner', 'Rss News Feed');

    }//end constructor



    public function index()
    {                  
        $this->load->view('rss/index');
    }//end index


    public function view( $slug )
    {
        $data['rssFeeds'] = $this->rss_model->get_rss($slug);

        if (empty($data['rssFeeds']))
        {
            show_404();
        }

        //$rss['title'] = $data['news_item']['title'];
        $data['title'] = $data['rssFeeds']['title'];


        $this->load->view('rss/view');

    }//end view



}// end Rss