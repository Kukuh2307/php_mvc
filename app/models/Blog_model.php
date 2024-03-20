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
}
