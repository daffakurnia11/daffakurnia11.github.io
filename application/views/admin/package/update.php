<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update <?= $package['package']; ?> Package</h1>
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
      <div class="row">
        <div class="col-md-9">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Form Update Package</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="" method="post" class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="package" class="col-sm-3 col-form-label">Nama Package</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="package" name="package" value="<?= $package['package']; ?>" <?= ($this->session->userdata('roles') == 'dev') ? '' : 'disabled'; ?>>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="page" class="col-sm-3 col-form-label">Max Page</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="page" name="page" value="<?= $package['page']; ?>" <?= ($this->session->userdata('roles') == 'dev') ? '' : 'disabled'; ?>>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="maintenance" class="col-sm-3 col-form-label">Maintenance</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="maintenance" name="maintenance" value="<?= $package['maintenance']; ?>" <?= ($this->session->userdata('roles') == 'dev') ? '' : 'disabled'; ?>>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="domain" class="col-sm-3 col-form-label">Domain</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="domain" name="domain" value="<?= $package['domain']; ?>" <?= ($this->session->userdata('roles') == 'dev') ? '' : 'disabled'; ?>>
                  </div>
                </div>
                <div class="form-group row justify-content-end">
                  <div class="col-sm-9">
                    <div class="row px-2">
                      <div class="col-6 form-check">
                        <input class="form-check-input" type="checkbox" id="hosting" name="hosting" <?= ($package['hosting'] == 1) ? 'checked' : ''; ?> <?= ($this->session->userdata('roles') == 'dev') ? '' : 'disabled'; ?>>
                        <label for="hosting" class="form-check-label">Hosting</label>
                      </div>
                      <div class="col-6 form-check">
                        <input class="form-check-input" type="checkbox" id="has_ssl" name="has_ssl" <?= ($package['has_ssl'] == 1) ? 'checked' : ''; ?> <?= ($this->session->userdata('roles') == 'dev') ? '' : 'disabled'; ?>>
                        <label for="has_ssl" class="form-check-label">SSL</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="specials" class="col-sm-3 col-form-label">Special Features</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" rows="3" id="specials" name="specials" <?= ($this->session->userdata('roles') == 'dev') ? '' : 'disabled'; ?>><?= $package['specials']; ?></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="price" class="col-sm-3 col-form-label">Harga</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="price" name="price" value="<?= $package['price']; ?>" <?= ($this->session->userdata('roles') == 'dev') ? '' : 'disabled'; ?>>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a href="<?= base_url('pricelist'); ?>" class="btn btn-default">Kembali ke Daftar</a>
                <?php if ($this->session->userdata('roles') == 'dev') : ?>
                  <button type="submit" class="btn btn-success float-right">Update Package</button>
                <?php endif; ?>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->