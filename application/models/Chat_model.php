<?php

class Chat_model extends CI_Model {

    public $id_chat;
    public $id_user;
    public $user_input;
    public $chatbot_response;
    public $chatbot_status;
    public $status_desc;
    public $create_date;
    public $create_date_time;

    public function index()
    {
        $sql = "SELECT id_chat, c.id_user AS id_user, u.name_user AS user_name, user_input, chatbot_response, chatbot_status, status_desc, create_date, create_date_time
        FROM chat_history c INNER JOIN user u ON c.id_user = u.id_user ORDER BY id_chat DESC";
        // FROM chat_history c INNER JOIN user u ON c.id_user = u.id_user GROUP BY create_date ORDER BY id_chat DESC";

        $query = $this->db->query($sql);
        return $query->result();
    }

    public function index_chat($id_user)
    {
        
        $sql = "SELECT id_chat, c.id_user, u.name_user AS user_name, user_input, chatbot_response, chatbot_status, status_desc, create_date, create_date_time
        FROM chat_history c INNER JOIN user u ON c.id_user = u.id_user WHERE u.id_user = ? ORDER BY create_date_time DESC";
        $query = $this->db->query($sql, $id_user);
        return $query->result();
    }
}

?>