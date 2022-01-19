<?php
if($_POST['kirim']){
    $admin = 'indradimas57@gmail.com'; //Email penerima Pesan
    
    $nama = htmlentities($_POST['nama']);
    $email = htmlentities($_POST['email']);
    $judul = htmlentities($_POST['judul']);
    $pesan= htmlentities($_POST['pesan']);

    $pengirim = 'Dari :  '.$nama.'<'.$email.'>';

    if(mail($admin,$judul,$pesan,$pengirim)){
        echo 'SUCCES : Pesan anda berhasil di kirim. <a href="contac.php">Kembali</a>';
    }else{
        echo 'ERROR : Pesan anda gagal di kirim silahkan coba lagi. <a href="contac.php">Kembali</a>';
    }
}else{
    header("Location: contac.php");
}
?>