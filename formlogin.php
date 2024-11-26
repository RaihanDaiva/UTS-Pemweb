<?php
session_start(); // Mulai sesi
?>
<html>

<head>
    <title> Form Login </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form method="POST" action="ceklogin.php">
        <section class="vh-100" style="background-color: #009cff;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="poster3.jpg" alt="login form" class="img-fluid"
                                        style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <div>

                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <i class="fas fa-cubes fa-2x" style="color: #ff6219;"></i>
                                                <span class="h1 fw-bold mb-0">Login</span>
                                            </div>

                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                                account</h5>

                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="form2Example17">Username</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    id="exampleFormControlInput1" placeholder="masukan username anda"
                                                    name="username" required>
                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label" for="form2Example27">Password</label>
                                                <input type="password" class="form-control form-control-lg"
                                                    id="exampleFormControlInput1" placeholder="masukan password anda"
                                                    name="password" required>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                                            </div>


                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account?


                                                <a href="formregister.php" style="color: #393f81;">Register here</a>
                                            </p>
                                            <a href="#!" class="small text-muted">Terms of use.</a>
                                            <a href="#!" class="small text-muted">Privacy policy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>