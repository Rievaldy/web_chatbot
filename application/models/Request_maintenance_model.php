<?php

class Request_maintenance_model extends CI_Model {

    public $id_user;
    public $id_subcribe_product;
    public $desc_maintenance;
    public $request_date;
    public $finish_date;
    public $sevirity_level;
    public $status_level;

    public function index()
    {
        $sql = "SELECT 
                m.request_date, m.id_user, u.name_user, m.id_subcribe_product, p.name_product, 
                CASE severity_level 
                    WHEN 1 THEN 'LOW'
                    WHEN 2 THEN 'MEDIUM'
                    WHEN 3 THEN 'HIGH'
                END AS severity_level ,
                COALESCE (finish_date, 'NULL') AS finish_date,
                CASE m.status_code
                    WHEN 0 THEN 'UNSOLVED'
                    WHEN 1 THEN 'SOLVED'
                END AS status_code, 
                desc_maintenance
            FROM maintenance m
            INNER JOIN `user` u ON u.id_user = m.id_user
            INNER JOIN  subscribe_product sp ON m.id_subcribe_product = sp.id_subcribe_product 
            INNER JOIN  product p ON sp.id_product = p.id_product";

        $query = $this->db->query($sql);
        return $query->result();
    }

    
    public function index_filter($start_date, $end_date)
    {
        $sql = "SELECT 
                m.request_date, m.id_user, u.name_user, m.id_subcribe_product, p.name_product, 
                CASE severity_level 
                    WHEN 1 THEN 'LOW'
                    WHEN 2 THEN 'MEDIUM'
                    WHEN 3 THEN 'HIGH'
                END AS severity_level ,
                COALESCE (finish_date, 'NULL') AS finish_date,
                CASE m.status_code
                    WHEN 0 THEN 'UNSOLVED'
                    WHEN 1 THEN 'SOLVED'
                END AS status_code, 
                desc_maintenance
            FROM maintenance m
            INNER JOIN `user` u ON u.id_user = m.id_user
            INNER JOIN  subscribe_product sp ON m.id_subcribe_product = sp.id_subcribe_product 
            INNER JOIN  product p ON sp.id_product = p.id_product
            WHERE m.request_date BETWEEN ? AND ?";

        $query = $this->db->query($sql, [$start_date, $end_date]);
        return $query->result();
    }
        
}

?>