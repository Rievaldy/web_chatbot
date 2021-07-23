<?php

class Dashboard_model extends CI_Model {

    public function index()
    {
        $sql = "SELECT (SELECT count(*) FROM maintenance) AS request_maintenance, 
        (SELECT count(*) FROM chat_history) AS chat, (SELECT count(id_tag)
        FROM intents) AS label, (SELECT count(response)
        FROM intents) AS answer, (SELECT count(id_pattern)
        FROM patterns) AS question";
        $query = $this->db->query($sql);
        return $query->row();
    }

}

?>