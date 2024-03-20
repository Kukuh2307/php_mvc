<?php
class User extends Controller
{
    public function index()
    {
        $data['judul'] = 'User';
        $this->view('templates/header', $data);
        $this->view('user/index');
        $this->view('templates/footer');
    }
    public function profile($nama = 'Kukhuh', $pekerjaan = 'Fullstack')
    {
        $data['judul'] = 'User';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('templates/header');
        $this->view('user/profile', $data);
        $this->view('templates/footer');
    }

    public function test()
    {
        $data['judul'] = 'test data user';
        $data['coba'] = 'coba';
        $this->view('templates/header');
        $this->view('user/test', $data);
        $this->view('templates/footer');
    }
}
