<html>

<head>
    <title> Form Login </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form method="POST" action="inputregister.php">
        <section class="vh-100" style="background-color: #009cff;">
            <div class="container py-5 h-100 col-7">
                <div class=" d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10 col-10 ">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="d-flex align-items-center ">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <div>

                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <i class="fas fa-cubes fa-2x " style="color: #ff6219;"></i>
                                                <span class="h1 fw-bold mb-0">Register</span>
                                            </div>

                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masukkan data diri anda</h5>

                                            <div data-mdb-input-init class="form-outline mb-2">
                                                <label class="form-label" for="form2Example07">Name</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    id="exampleFormControlInput1" placeholder="Masukkan nama anda"
                                                    name="nama" required>
                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-2">
                                                <label class="form-label" for="form2Example07">Phone</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    id="exampleFormControlInput1" placeholder="Masukkan no telfon anda"
                                                    name="phone" required>
                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-2">
                                                <label class="form-label" for="form2Example17">Username</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    id="exampleFormControlInput1" placeholder="Masukkan username anda"
                                                    name="username" required>
                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-2">
                                                <label class="form-label" for="form2Example27">Password</label>
                                                <input type="password" class="form-control form-control-lg"
                                                    id="exampleFormControlInput1" placeholder="Masukan password anda"
                                                    name="password" required>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                                            </div>

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
<style>
    .custom-width{
        height: 10px;
    }
</style>

</html>