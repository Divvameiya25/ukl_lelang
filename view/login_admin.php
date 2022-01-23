<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Login | Admin</title>

        <!-- Embedding CSS -->
        <link rel="stylesheet" href="../asset/css/login.css">
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
        />
        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css"
        rel="stylesheet"
        />
    </head>
    <body style="background-color: #E9FFFB;">
        <div class="container-fluid" >
            <div class="container">
                <div class="row">
                    <div class="col-6 my-3 mt-5">
                        <p class="main-teks" data-aos="fade-right" data-aos-duration="1500">Selamat Datang Teman Admin, Silahkan Masukkan Username dan Password anda</span></p>
                        <img src="../asset/image/login.png" alt="image" class="img-fluid img-login my-5" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" draggable="false">
                    </div>
                    <div class="col-5 offset-1 kotak-input mt-5" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="1000">
                        <!-- Pills navs -->
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a
                            class="nav-link active"
                            id="tab-login"
                            data-mdb-toggle="pill"
                            href="#pills-login"
                            role="tab"
                            aria-controls="pills-login"
                            aria-selected="true"
                            >Login Admin</a
                            >
                        </li>
                        </ul>
                        <!-- Pills navs -->
    
                        <!-- Pills content -->
                        <div class="tab-content">
                            <div
                                class="tab-pane fade show active"
                                id="pills-login"
                                role="tabpanel"
                                aria-labelledby="tab-login"
                            >
                                <form action="../model/login_admin.php" method="POST">
                                <div class="text-center mb-3">
                                    <p>Sign in with:</p>
                                </div>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="loginName" class="form-control" name="username" required/>
                                    <label class="form-label" for="loginName">Username</label>
                                </div>
        
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="loginPassword" class="form-control" name="password" required/>
                                    <label class="form-label" for="loginPassword">Password</label>
                                </div>
        
                                <!-- 2 column grid layout -->
                                <div class="row mb-4">
                                    <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                        <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="loginCheck"
                                        checked
                                        />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                    </div>
                                </div>
        
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                                </form>
                            </div>
                        </div>
                        <!-- Pills content -->
                    </div>
                </div>
            </div>
        </div>
 
        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"
        ></script>
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>