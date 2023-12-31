<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <!-- <nav class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid ps-2 pe-0">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                        Rio Fitra Mutaqin
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.html">
                                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                  <a class="nav-link me-2" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-user opacity-6 text-dark me-1"></i>Logout</a>
                  <a class="nav-link me-2" href="../pages/profile.html">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Logout
                  </a>
                </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="<?= base_url('Auth') ?>">
                                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                    Sign In
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="<?= base_url('Auth/register') ?>">
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                    Sign Up
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-flex d-none">
                            <li class="nav-item d-flex align-items-center">
                  <a class="btn btn-outline-primary btn-sm mb-0 me-2" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
                </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/product/material-dashboard" class="btn btn-sm mb-0 me-1 bg-gradient-dark">Free download</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->
            <!-- End Navbar -->
        </div>
    </div>
</div>

<style>
    .bg-gradient-primary {
        background-image: linear-gradient(195deg, #B1D7B4 0%, #5D9C59 100%);
    }
</style>

<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-color: #B1D7B4;">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Al - Amin</h4>
                                <div class="row mt-3">
                                    <div class="col-2 text-center ms-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-facebook text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center px-1">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-instagram text-white text-lg"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 text-center me-auto">
                                        <a class="btn btn-link px-3" href="javascript:;">
                                            <i class="fa fa-google text-white text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <form class="user" method="POST" action="<?= base_url('Auth/cek_login'); ?>">
                                <div class="input-group input-group-outline my-3">
                                    <!-- <label class="form-label">Email</label> -->
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                                </div>

                                <div class="input-group input-group-outline mb-3">
                                    <!-- <label class="form-label">Password</label> -->
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3 row col-lg-12">', '</small>'); ?>
                                </div>

                                <!-- <div class="form-check form-switch d-flex align-items-center mb-3">
                                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                                    <label class="form-check-label mb-0 ms-3" for="rememberMe">Remember me</label>
                                </div> -->

                                <div class="text-center" style="color: #5D9C59;">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                                </div>
                                <!-- <p class="mt-4 text-sm text-center">
                                    Don't have an account?
                                    <a href="<?= base_url('Auth/register') ?>" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-12 col-md-6 my-auto">
                        <div class="copyright text-center text-sm text-white text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank"> Rio Fitra Mutaqin</a>
                            for a better web.
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>
                </li>
              </ul>
            </div> -->
                </div>
            </div>
        </footer>
    </div>
</main>