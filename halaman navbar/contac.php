<html>
    <head>
        <form>Contac Us</form>
        
        <link rel="stylesheet" href="navbar.css" type="text/css">
    </head>
    <body>
        <h1>Contac form Email</h1>
        <p>Demo ini dibuat oleh: <a href="http" target="_blank">Green tech Solution</a></p>
        <form action="kirim.php" method="post">
            <p><input type="text" name="nama" placeholder="Nama Anda" size="30"
             required /></p>
            <p><input type="email" name="email" placeholder="Email valid" size="30" 
            required /></p>
            <p><input type="text" name="judul" placeholder="Subject Pesan Email" size="50" 
            required /></p>
            <p><textarea name="pesan" placeholder="Pesan Anda" rows="7" cols="50" 
            required /></textarea></p>
            <p><input type="submit" name="Kirim" value="Kirim Pesan" /><input type="reset" value="Hapus Pesan" /></p>
        </form>
    </body>
</html>