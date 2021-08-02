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

    public function index_by($data)
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
        WHERE m.id_subcribe_product = ? AND m.request_date = ?";
        
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
        
    public function update_status($data)
    {
        
        $sql = "UPDATE maintenance SET status_code = ?, finish_date =  ?  WHERE id_subcribe_product = ? AND request_date = ?";
        $data['finish_date'] = date('Y-m-d');
        $data = [
            'status_code' => $data['status_code'],
            'finish_date' => $data['finish_date'],
            'id_subcribe_product' => $data['id_subcribe_product'],
            'request_date' => $data['request_date'],
        ];
        $read =  $this->db->query($sql, $data);
        if($data['status_code'] == '1'){
                /*
            SEND MESSAGE TO TELEGRAM 
            */
            $databy = [
                'id_subcribe_product' => $data['id_subcribe_product'],
                'request_date' => $data['request_date'],
            ];
            $maintenance = $this->index_by($databy);
            $chat_id = $maintenance->id_user;
            
            $config=$this->config->load('config', true);
            $telegram_token = $this->config->item('telegram_token', 'config');
            $text = urlencode("Perbaikan produk anda telah diselesaikan\nBerikut rincian :\nNama produk : ".$maintenance->name_product."\nDeskripsi masalah : ".$maintenance->desc_maintenance."\nSkala besar kendala :  ".$maintenance->severity_level." \nTanggal permintaan : ".$maintenance->request_date."\nTanggal selesai perbaikan : ".$maintenance->finish_date);
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.telegram.org/bot".$telegram_token."/sendMessage?chat_id=".$chat_id."&text=".$text."&parse_mode=markdown",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            /*
            END SEND MESSAGE TO TELEGRAM 
            */
        }
        return $read;
    }
}

?>