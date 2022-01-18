<?php

class Film extends Controller{
    public function index($sort)
    {
        $data['film']=$this->model('FilmModel')->getFilm($sort);
        $this->view('film', $data);
    }

    public function tambah()
    {
        if ($this->model('FilmModel')->tambahDataFilm($_POST)>0){
            header('Location: film');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('FilmModel')->hapusDataFilm($id)>0){
            header('Location: film');
            exit;
        }
    }
}