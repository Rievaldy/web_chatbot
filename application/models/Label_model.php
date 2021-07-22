<?php

class Label_model extends CI_Model {

    public $id_tag;
    public $name_tag;
    public $response;
    public $desc_tag;

    public function index()
    {
        $sql = "SELECT id_tag, name_tag, response, desc_tag FROM intents";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function create($data = [])
    {
        $sql = "INSERT INTO intents (name_tag, response, desc_tag) VALUES (?, ?, ?)";
        return $this->db->query($sql, $data);
    }

    public function destroy($id)
    {
        $sql = "DELETE FROM intents WHERE id_tag = ?";
        return $this->db->query($sql, $id);
    }

}

?>