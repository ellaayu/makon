<?php
class Model_data_tugas extends CI_Model{


    public function get_all(){
        $this->db->select('DETAIL_TUGAS.ID_DETAIL_TUGAS');
        $this->db->select('NAMA_LENGKAP_USER');
        $this->db->select('HARI_TUGAS');
        $this->db->select('TUGAS');
        $this->db->select('DETAIL_TUGAS');
        $this->db->from('TBL_USER','TBL_TUGAS','DETAIL_TUGAS');
        $this->db->join('DETAIL_TUGAS','TBL_USER.ID_USER = DETAIL_TUGAS.ID_USER');
        $this->db->join('TBL_TUGAS','TBL_TUGAS.ID_TUGAS = DETAIL_TUGAS.ID_TUGAS');
        return $this->db->get()->result();

    }
    public function piket(){
        $this->db->select('NAMA_LENGKAP_USER');
        $this->db->select('TUGAS');
        $this->db->from('TBL_USER','TBL_TUGAS','DETAIL_TUGAS');
        $this->db->join('DETAIL_TUGAS','TBL_USER.ID_USER = DETAIL_TUGAS.ID_USER');
        $this->db->join('TBL_TUGAS','TBL_TUGAS.ID_TUGAS = DETAIL_TUGAS.ID_TUGAS');
        $this->db->where('HARI_TUGAS = "SENIN"');
                return $this->db->get()->result();
    }
     public function selasa(){
        $this->db->select('NAMA_LENGKAP_USER');
         $this->db->select('TUGAS');
        $this->db->from('TBL_USER','TBL_TUGAS','DETAIL_TUGAS');
        $this->db->join('DETAIL_TUGAS','TBL_USER.ID_USER = DETAIL_TUGAS.ID_USER');
        $this->db->join('TBL_TUGAS','TBL_TUGAS.ID_TUGAS = DETAIL_TUGAS.ID_TUGAS');
        $this->db->where('HARI_TUGAS = "SELASA"');
         return $this->db->get()->result();
    }
    public function rabu(){
        $this->db->select('NAMA_LENGKAP_USER');
        $this->db->select('TUGAS');
        $this->db->from('TBL_USER','TBL_TUGAS','DETAIL_TUGAS');
        $this->db->join('DETAIL_TUGAS','TBL_USER.ID_USER = DETAIL_TUGAS.ID_USER');
        $this->db->join('TBL_TUGAS','TBL_TUGAS.ID_TUGAS = DETAIL_TUGAS.ID_TUGAS');
        $this->db->where('HARI_TUGAS = "RABU"');
         return $this->db->get()->result();
    }
    public function kamis(){
        $this->db->select('NAMA_LENGKAP_USER');
        $this->db->select('TUGAS');
        $this->db->from('TBL_USER','TBL_TUGAS','DETAIL_TUGAS');
        $this->db->join('DETAIL_TUGAS','TBL_USER.ID_USER = DETAIL_TUGAS.ID_USER');
        $this->db->join('TBL_TUGAS','TBL_TUGAS.ID_TUGAS = DETAIL_TUGAS.ID_TUGAS');
        $this->db->where('HARI_TUGAS = "KAMIS"');
         return $this->db->get()->result();
    }
    public function jumat(){
        $this->db->select('NAMA_LENGKAP_USER');
        $this->db->select('TUGAS');
        $this->db->from('TBL_USER','TBL_TUGAS','DETAIL_TUGAS');
        $this->db->join('DETAIL_TUGAS','TBL_USER.ID_USER = DETAIL_TUGAS.ID_USER');
        $this->db->join('TBL_TUGAS','TBL_TUGAS.ID_TUGAS = DETAIL_TUGAS.ID_TUGAS');
        $this->db->where('HARI_TUGAS = "JUMAT"');
         return $this->db->get()->result();
    }
    public function sabtu(){
        $this->db->select('NAMA_LENGKAP_USER');
        $this->db->select('TUGAS');
        $this->db->from('TBL_USER','TBL_TUGAS','DETAIL_TUGAS');
        $this->db->join('DETAIL_TUGAS','TBL_USER.ID_USER = DETAIL_TUGAS.ID_USER');
        $this->db->join('TBL_TUGAS','TBL_TUGAS.ID_TUGAS = DETAIL_TUGAS.ID_TUGAS');
        $this->db->where('HARI_TUGAS = "SABTU"');
         return $this->db->get()->result();
    }
    public function minggu(){
        $this->db->select('NAMA_LENGKAP_USER');
        $this->db->select('TUGAS');
        $this->db->from('TBL_USER','TBL_TUGAS','DETAIL_TUGAS');
        $this->db->join('DETAIL_TUGAS','TBL_USER.ID_USER = DETAIL_TUGAS.ID_USER');
        $this->db->join('TBL_TUGAS','TBL_TUGAS.ID_TUGAS = DETAIL_TUGAS.ID_TUGAS');
        $this->db->where('HARI_TUGAS = "minggu"');
         return $this->db->get()->result();
    }

    public function get_tugas()
    {
       return $this->db->get('TBL_TUGAS')->result();
    }

    /* Fungsi ini me return satu record dari tabeluser dalam bentuk object. 
     * Record yang di return adalah record dengan id $id_user 
     */
    public function get_one($id_detail_tugas){
       $this->db->select('ID_DETAIL_TUGAS');
        $this->db->select('NAMA_LENGKAP_USER');
        $this->db->select('HARI_TUGAS');
        $this->db->select('TUGAS');
        $this->db->select('DETAIL_TUGAS');
        $this->db->from('TBL_USER','TBL_TUGAS','DETAIL_TUGAS');
        $this->db->join('DETAIL_TUGAS','TBL_USER.ID_USER = DETAIL_TUGAS.ID_USER');
        $this->db->join('TBL_TUGAS','TBL_TUGAS.ID_TUGAS = DETAIL_TUGAS.ID_TUGAS');
        $this->db->where('ID_DETAIL_TUGAS',$id_detail_tugas);
        return $this->db->get()->result();
    }

    /* Fungsi ini menginsertkan data ke dalam tabel user.
     * Parameter $data berisi data yang akan diinsertkan dalam bentuk associative array
     * yang terdiri dari pasangan key=>value. Key adalan nama field, sedangkan value adalah
     * nilai field
     */
    public function insert_tugas($data){
        $this->db->insert('TBL_TUGAS', $data);
    }

    /* Fungsi ini mengupdate data ke dalam tabel user yang memiliki id=$id_user.
     * Parameter $data berisi data yang akan diinsertkan dalam bentuk associative array
     * yang terdiri dari pasangan key=>value. Key adalan nama field, sedangkan value adalah
     * nilai field
     */
    public function atur_tugas($data){
        $this->db->insert('DETAIL_TUGAS', $data);
    }

    public function update($data, $id_detail_tugas){
        $this->db->where('ID_DETAIL_TUGAS', $id_detail_tugas);
        $this->db->update('DETAIL_TUGAS', $data);

    }

    /* Fungsi ini menghapus satu record dari tabel user memiliki id=$id_user*/
    public function delete($id_detail_tugas){
        $this->db->delete('DETAIL_TUGAS', array('ID_DETAIL_TUGAS' => $id_detail_tugas));
    }

    function get($keyword){
	   $this->load->database();        
	   return $this->db->select('*')->from('TBL_USER')
           ->like('NAMA_LENGKAP_USER',$keyword)->or_like('USERNAME',$keyword)
           ->get()->result();
    }

}


