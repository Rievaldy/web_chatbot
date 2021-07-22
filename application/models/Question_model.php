<?php

class Question_model extends CI_Model {    
    public $id_pattern;
    public $id_tag;
    public $pattern;

    public function index()
    {
        $sql = "SELECT id_pattern, p.id_tag, pattern, name_tag FROM patterns p INNER JOIN intents i ON p.id_tag = i.id_tag";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function create($data = [])
    {
        $sql = "INSERT INTO patterns (id_tag, pattern) VALUES (?, ?)";
        return $this->db->query($sql, $data);
    }

    public function destroy($id)
    {
        $sql = "DELETE FROM patterns WHERE id_pattern = ?";
        return $this->db->query($sql, $id);
    }

}

?>