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
  <div class="content">
    <div class="container-fluid">
      <!-- Admin Table -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Admin</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="admintable" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Roles</th>
                <th>Last Login</th>
                <th>Last Logout</th>
                <th>Last Activity</th>
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
                  <td><?= $admin['logout_at']; ?></td>
                  <td><?= $admin['last_activity']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Roles</th>
                <th>Last Login</th>
                <th>Last Logout</th>
                <th>Last Activity</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- End of Admin Table -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->