 <?php
            error_reporting(0);
            require_once('config.php');
            if (isset($_POST['register'])) {
                $acak = md5(uniqid(rand()));
                $var_username = $_POST['username'];
                $var_email = $_POST['email'];
                $var_phone = $_POST['phone'];
                $var_password = $_POST['password'];
                $cek_sql = mysql_query("select member_email from member where member_email='$var_email'");
                // echo $cek_sql;
                $rows_sql = mysql_num_rows($cek_sql);

                //echo "row : ".$rows_sql;

                if ($rows_sql > 0) {
                    echo "Account Email <b style='color:red'>$var_email</b> sudah terdaftar <a href='login.php' style='color:blue;'>login</a>";
                    exit();
                } else {

                    $sql_insert = "INSERT INTO member_tmp VALUES ('',
                                            '$var_username',
                                            '$var_email',
                                            '$var_phone',
                                            '$var_password',
                                            '$acak',NOW())";
                    //  echo $sql_insert;
                    $result = mysql_query($sql_insert);
                    if ($result) {
                       /* echo "berhasil silahkan cek email anda ";//.$acak; exit();
                        echo "<a href='http://localhost/ruangprogrammer/demo/confirm.php?code=" . $acak . "'>klik disini</a>";
                        exit();*/
                   //------------------------------------
                   $tujuan = $var_email;
                   $subject = "Tes Email";
                   $pesan = "
                           Klik
                           http://download.ruangprogrammer.com/confirm.php?code=$acak
                           untuk konfirmasi
                           ";
                   $dari = "from : no-reply@ruangprogrammer.com";
                   mail($tujuan, $subject, $pesan, $dari);
                   echo "<br>berhasil daftar silahkan cek email anda untuk konfirmasi";
                   exit();
                    }
                }
            }
            ?>