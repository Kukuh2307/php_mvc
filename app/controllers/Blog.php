<?php
class Blog extends Controller
{
    public function index()
    {
        $data['judul'] = 'Blog';
        $data['Blog'] = $this->model('Blog_model')->getAllBlog();
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "detail Blog";
        $data['blog'] = $this->model("Blog_model")->getBlogById($id);
        $this->view('templates/header', $data);
        $this->view('blog/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Blog_model')->buatArtikel($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }
    }

    // untuk mengirim value ke modal yang ingin di edit dengan javascript dan ajax, mendapatkan id untuk di kirim ke database
    public function getUbah()
    {
        echo json_encode($this->model('Blog_model')->getBlogById($_POST['id']));
    }


    // bagian pengecekan nilai dan juga mengirim nilai ke database dengan fungsi ubahArtikel
    public function ubah()
    {
        if ($_POST['judul'] == null || $_POST['penulis'] == null || $_POST['tulisan'] == null) {
            header('location:' . BASE_URL . '/blog');
        } else {
            if ($this->model('Blog_model')->ubahArtikel($_POST) > 0) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASE_URL . '/blog');
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header('Location: ' . BASE_URL . '/blog');
                exit;
            }
        }
    }

    public function delete($id)
    {
        if ($this->model('Blog_model')->hapusArtikel($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/blog');
            exit;
        }
    }
}
