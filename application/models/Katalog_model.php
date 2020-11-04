<?php 

class Katalog_model extends CI_Model
{
    public function getAllKatalog()
    {
        $query = "SELECT `tbl_katalog`.*, `tbl_jenis_sampah`.`nama_jenis_sampah`, `tbl_users`.`name`
        FROM `tbl_katalog`
        INNER JOIN `tbl_jenis_sampah` ON `tbl_katalog`.`id_jenis_katalog_sampah` = `tbl_jenis_sampah`.`id_jenis_sampah`
        INNER JOIN `tbl_users` ON `tbl_katalog`.`id_users` = `tbl_users`.`id_users`";

        return $this->db->query($query)->result_array();
    }
}