<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Admin Lists and Tracking</h1>
        </div><!-- /.col -->
        <!-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div> -->
        <!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content pb-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <!-- Admin Table -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Admin</h3>
            </div>
            <div class="card-body">
              <table id="admintable" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Roles</th>
                    <th>Recently Login</th>
                    <th>Last Login</th>
                    <th>Last Logout</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($admins as $admin) : ?>
                    <tr>
                      <td class="text-center"><?= $i++; ?></td>
                      <td><?= $admin['username']; ?></td>
                      <td><?= $admin['roles']; ?></td>
                      <td><?= $admin['login_at']; ?></td>
                      <td><?= $admin['last_login']; ?></td>
                      <td><?= $admin['logout_at']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Roles</th>
                    <th>Recently Login</th>
                    <th>Last Login</th>
                    <th>Last Logout</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <!-- End of Admin Table -->

        </div>
        <div class="col-lg-4">
          <!-- Activity -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Activities</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body py-0">
              <?php foreach ($activities as $activity) : ?>
                <div class="post my-2 py-2">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= base_url('assets/img/avatar.png'); ?>" alt="user image">
                    <span class="username">
                      <?= $activity['username']; ?>
                    </span>
                    <span class="description"><?= $activity['time']; ?></span>
                  </div>
                  <!-- /.user-block -->
                  <p class="mb-0">
                    <?= $activity['activity']; ?>
                  </p>
                </div>
                <!-- /.post -->
              <?php endforeach; ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- End of Activity -->
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->