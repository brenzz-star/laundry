<html>
    <head>
        <title>Sistem Informasi Laundry</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/Bootstrap.js"></script>
    </head>
    <body style="background: white;">
        <br><br><br><br>
        <center>
            <h2>SISTEM INFORMASI LAUNDRY</h2>
        </center>
        <br><br><br><br>
        <div class="container">
            <div class="col-md-4 col-md-offset-4">
                <?php
                   if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-danger'>Login gagal! Username atau Password Salah</div>";
                    }elseif ($_GET['pesan'] == "Logout") {
                        echo "<div class='alert alert-info'>Anda Berhasil Logout</div>";
                    }elseif ($_GET['pesan'] == "Belum_Login") {
                        echo "<div class='alert alert-danger'>Anda Harus Login Untuk Mengakses Halaman Admin</div>";
                    }
                   }
                ?>
                <form action="login.php" method="post">
                    <div class="panel">
                      <div class="panel-body">
                        <div class="form-grup">
                            <label>username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-grup">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <br>
                        <input type="submit" class="btn btn-primary" value="Log in">
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>