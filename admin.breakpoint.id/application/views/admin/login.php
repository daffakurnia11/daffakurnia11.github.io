<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Breakpoint Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-success">
      <div class="card-header text-center">
        <a href="<?= base_url(''); ?>" class="h4">
          <img src="<?= base_url('assets/img/logo-transparent.png'); ?>" width="70" alt="">
          <br>
          <b>Breakpoint</b> Admin
        </a>
      </div>
      <div class="card-body">
        <?php if ($this->session->flashdata('message')) : ?>
          <div class="alert alert-danger text-center" role="alert">
            <?= $this->session->flashdata('message'); ?>
            <?= $this->session->unset_userdata('message'); ?>
          </div>
        <?php else : ?>
          <p class="login-box-msg">Masuk untuk menuju akses admin!</p>
        <?php endif; ?>
        <form action="<?= base_url('login'); ?>" method="post">
          <div class="form-group">
            <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : ''; ?>" name="username" placeholder="Username">
            <?= form_error('username', '<div class="text-center text-danger">', '</div>'); ?>
          </div>
          <div class="form-group">
            <input type="password" class="form-control <?= form_error('username') ? 'is-invalid' : ''; ?>" name="password" placeholder="Password">
            <?= form_error('password', '<div class="text-center text-danger">', '</div>'); ?>
          </div>
          <div class="row justify-content-end">
            <div class="col-4">
              <button type="submit" class="btn btn-warning btn-block">Masuk!</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('assets/'); ?>dist/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/'); ?>dist/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/'); ?>js/adminlte.min.js"></script>
</body>

</html>