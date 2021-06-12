<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Price Lists</h1>
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
      <!-- Pricelist Table -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Packages</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="pricelist" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Packages</th>
                <th>Max Page</th>
                <th>Maintenance</th>
                <th>Domain</th>
                <th>Hosting</th>
                <th>SSL</th>
                <th>Special Features</th>
                <th>Harga</th>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php $i = 1; ?>
              <?php foreach ($packages as $package) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td class="text-nowrap"><?= $package['package']; ?></td>
                  <td><?= $package['page']; ?></td>
                  <td><?= $package['maintenance']; ?></td>
                  <td class="text-nowrap"><?= $package['domain']; ?></td>
                  <td><?= ($package['hosting'] == 1) ? '<i class="far fa-check-circle" style="color: green;"></i>' : '<i class="far fa-times-circle" style="color: red;"></i>'; ?></td>
                  <td><?= ($package['has_ssl'] == 1) ? '<i class="far fa-check-circle" style="color: green;"></i>' : '<i class="far fa-times-circle" style="color: red;"></i>'; ?></td>
                  <td><?= $package['specials']; ?></td>
                  <td class="text-nowrap"><?= $package['price']; ?></td>
                  <td class="text-nowrap">
                    <a href="<?= base_url('dashboard/updatepackage/' . $package['id']); ?>" class="btn btn-success">
                      <i class="fas fa-pen"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Packages</th>
                <th>Max Page</th>
                <th>Maintenance</th>
                <th>Domain</th>
                <th>Hosting</th>
                <th>SSL</th>
                <th>Special Features</th>
                <th>Harga</th>
                <td>Aksi</td>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- End of Pricelist Table -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->