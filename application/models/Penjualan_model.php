<?php 

class Penjualan_model extends CI_Model
{
    public function getAllPenjualan()
    {
        $query = "SELECT `tbl_penjualan`.*, `tbl_users`.`name`, `tbl_katalog`.`nama_katalog`
        FROM `tbl_penjualan`
        INNER JOIN `tbl_users` ON `tbl_penjualan`.`id_users` = `tbl_users`.`id_users`
        INNER JOIN `tbl_katalog` ON `tbl_penjualan`.`id_katalog` = `tbl_katalog`.`id_katalog`
        ";

        return $this->db->query($query)->result_array();
    }
}