<?php
 class About extends controller{
    public function index($nama = 'wiz', $umur = '17'){
        $data['nama']= $nama;
        $data['umur']= $umur;
        $data['judul']= 'About me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page() {
        $data['judul']='page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
 }