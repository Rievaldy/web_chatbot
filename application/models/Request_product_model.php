<?php

class Request_product_model extends CI_Model {

    public $id_user;
    public $id_subcribe_product;
    public $desc_product;
    public $request_date;
    public $finish_date;
    public $sevirity_level;
    public $status_level;

    public function index()
    {
        $sql = "SELECT 
            sp.id_subcribe_product, sp.request_date, u.name_user, sp.id_user , c.name_company, sp.id_company, p.name_product, sp.id_product, 
            COALESCE(sp.start_date, 'NULL') AS start_date ,
            COALESCE(sp.end_date, 'NULL') AS end_date , 
            COALESCE(sp.maintenance_ticket, '0') AS maintenance_ticket ,             
            CASE sp.status_code 
            WHEN 0 THEN 'REQUESTED'
            WHEN 1 THEN 'SUBSCRIBED'
            END AS status, sp.status_code 
        FROM subscribe_product sp
        INNER JOIN `user` u ON
        sp.id_user = u.id_user
        INNER JOIN product p ON
        p.id_product = sp.id_product
        INNER JOIN company c ON
        c.id_company = sp.id_company";

        $query = $this->db->query($sql);
        return $query->result();
    }

    
    public function index_filter($start_date, $end_date)
    {
        $sql = "SELECT 
                sp.id_subcribe_product, sp.request_date, u.name_user, sp.id_user , c.name_company, sp.id_company, p.name_product, sp.id_product, 
                COALESCE(sp.start_date, 'NULL') AS start_date ,
                COALESCE(sp.end_date, 'NULL') AS end_date , 
                COALESCE(sp.maintenance_ticket, '0') AS maintenance_ticket ,             
                CASE sp.status_code 
                WHEN 0 THEN 'REQUESTED'
                WHEN 1 THEN 'SUBSCRIBED'
                END AS status, sp.status_code 
            FROM subscribe_product sp
            INNER JOIN `user` u ON
            sp.id_user = u.id_user
            INNER JOIN product p ON
            p.id_product = sp.id_product
            INNER JOIN company c ON
            c.id_company = sp.id_company
            WHERE sp.request_date BETWEEN ? AND ?";

        $query = $this->db->query($sql, [$start_date, $end_date]);
        return $query->result();
    }

    public function index_by_id($id)
    {
        $sql = "SELECT 
                sp.id_subcribe_product, sp.request_date, u.name_user, sp.id_user , c.name_company, sp.id_company, p.name_product, sp.id_product, 
                COALESCE(sp.start_date, 'NULL') AS start_date ,
                COALESCE(sp.end_date, 'NULL') AS end_date , 
                COALESCE(sp.maintenance_ticket, '0') AS maintenance_ticket ,             
                CASE sp.status_code 
                WHEN 0 THEN 'REQUESTED'
                WHEN 1 THEN 'SUBSCRIBED'
                END AS status, sp.status_code 
            FROM subscribe_product sp
            INNER JOIN `user` u ON
            sp.id_user = u.id_user
            INNER JOIN product p ON
            p.id_product = sp.id_product
            INNER JOIN company c ON
            c.id_company = sp.id_company
            WHERE sp.id_subcribe_product = ?";

        $query = $this->db->query($sql, $id);
        return $query->row();
    }

    public function update($data)
    {
        $sql = "UPDATE subscribe_product SET `start_date` = ?, end_date = ?, status_code = ?, maintenance_ticket = ? WHERE id_subcribe_product = ?";

        return $this->db->query($sql, $data);
    }
}

?>