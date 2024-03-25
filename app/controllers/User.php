<?php
class User extends Controller
{
    public function index()
    {
        $data['judul'] = 'User';
        $data['user'] = $this->model('User_model')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'detail User';
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('templates/header', $data);
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('User_model')->tambahUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/user');
            exit;
        }
    }
    public function delete($id)
    {
        if ($this->model('User_model')->hapusUser($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/user');
        }
    }

    public function getUbah()
    {
        // echo $_POST['id'];
        echo json_encode($this->model('User_model')->getUserById($_POST['id']));
    }

    public function ubah()
    {
        if ($_POST['nama'] == null || $_POST['email'] == null || $_POST['position'] == null || $_POST['alamat'] == null) {
            header('Location: ' . BASE_URL .  "/user");
        } else {
            if ($this->model('User_model')->ubahUser($_POST) > 0) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASE_URL . '/user');
                exit;
            } else {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASE_URL . '/user');
                exit;
            }
        }
    }
}
