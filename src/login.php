<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> MOWO - MOTO WORLD </title> 
        <link href="../CSS/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../JS/scripts.js"></script>
    </head>
    
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4"> <strong> ĐĂNG NHẬP </strong> </h3>
                                    </div>
                                    <div class="card-body">
                                        
                                        <form action="handleLogin.php" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress"> TÀI KHOẢN </label>
                                                <input class="form-control py-4" id="username" name="username" type="text"/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword"> MẬT KHẨU </label>
                                                <input class="form-control py-4" id="password" name="password" type="password"/>
                                            </div>
                                            <?php
                                                if (isset($_GET['error'])) {
                                                    echo
                                                    "<div class='alert alert-danger' role='alert'>
                                                        Sai tài khoản hoặc mật khẩu!
                                                    </div>";
                                                }
                                            ?>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">   
                                                <input class="btn btn-primary" type="submit" value="Đăng nhập">
                                                <a class="small" href="#"> Quên mật khẩu ?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> Copyright &copy; MOWO - MOTO WORLD 2020 </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
