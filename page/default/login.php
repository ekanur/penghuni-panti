<?php
// session_start();
if(isset($_POST['username'])){

}
?>
<body>
    <div class="wrapper wrapper-full-page">

        <!-- End Navbar -->
        <div class="full-page  section-image" data-color="black" data-image="assets/img/bg.jpg" ;>
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" method="post" action="">
                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">Login</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" placeholder="Username" class="form-control" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" placeholder="*****" class="form-control" name="password">
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-warning btn-wd">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav>
                    <p class="copyright text-center">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">PPRBM Bhakti Luhur - Indepth Rights</a>
                    </p>
                </nav>
            </div>
        </footer>
    </div>

</body>

<?php
if(isset($_POST['username'])){

    if(isset($_POST['username']) && isset($_POST['password'])){
        if($_POST['username'] != '' && $_POST['password'] != '' ){

            $username = _esc($_POST['username']);
            $password = md5(_esc($_POST['password']));
            $sql = "SELECT * from member where username='$username' and password='$password' limit 1";
            // var_dump($sql);exit();
            $query = mysqli_query($conx,$sql);
            if(mysqli_num_rows($query) > 0){

                $rows = mysqli_fetch_array($query);
                // $p = md5(_esc($_POST['password']));
                $_SESSION['idm'] = $rows['id_member'];
                $_SESSION['kecamatan'] = $rows['kecamatan'];
                // var_dump($_SESSION['idm']);exit();
                header("Location:".$app_url);



                // if($p == $rows['password']){
                //     echo "Anda berhasil login";
                //     $_SESSION['idm'] = $rows['id_member'];
                //     // $_SESSION['nama'] = $rows['nama'];
                //     // $_SESSION['nidn'] = $rows['NIDN'];
                //     // var_dump($conx);
                //     winloc("");
                //
                // } else {
                //     echo "<label>Password tidak cocok</label>";
                // }

            } else {
                echo "<label>login gagal</label>";
            }
        }
    }
}
?>
