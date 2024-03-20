<?php
class Blog_model
{
    private $table = 'Blog';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlog()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id=:id");
        $this->db->bind(':id', $id);
        return $this->db->resultSingle();
    }

    public function buatArtikel($data)
    {
        $query = "INSERT INTO Blog (judul, tulisan, penulis) VALUES (:judul, :tulisan, :penulis)";
        $this->db->query($query);
        $this->db->bind("judul", $data["judul"]);
        $this->db->bind("tulisan", $data["tulisan"]);
        $this->db->bind("penulis", $data["penulis"]);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
