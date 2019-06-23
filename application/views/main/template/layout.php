<?php
    $this->load->view('main/template/head');
    $this->load->view('main/template/header');
    $this->load->view('main/template/nav');
    $this->load->view($content);
    $this->load->view('main/template/footer');
?>