<?php
require_once('koneksi.php');
$var_kode = $_GET['code'];
//echo $var_kode;
//exit;
$sql_check = "SELECT * FROM member_tmp WHERE tmp_code='" . $var_kode . "'";
$result = mysql_query($sql_check);
$rows = mysql_num_rows($result);
//Apa bila kode verifikasi ditemukan
//echo $rows;
//exit;
if ($rows > 0) {
    $data = mysql_fetch_array($result);
    $var_username = $data['tmp_username'];
    $var_email = $data['tmp_email'];
    $var_password = $data['tmp_password'];
    $var_phone = $data['tmp_phone'];

//Masukan data user ke table tb_admin yang sah
    $sql_insert = "INSERT INTO member VALUES ('',
                                '$var_username',
                                '$var_email',
                                '$var_phone',
                                '$var_password',NOW())";
//echo $sql_insert;
    $result12 = mysql_query($sql_insert);
    if ($result12) {
        echo "Your email is valid, thanks!. You may now <a href='#'>login</a>";
//hapus  data pendaftaran sementara tersebut di table tb_temp
        $sql_delete = "DELETE FROM member_tmp WHERE tmp_code='" . $var_kode . "'";
        $result1 = mysql_query($sql_delete);
    }
} else {
    echo "kode tidak ditemukan";
}