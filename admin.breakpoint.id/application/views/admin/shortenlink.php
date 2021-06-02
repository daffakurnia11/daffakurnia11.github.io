<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Shorten Link</h1>
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
      <!-- Shorten Link Form -->
      <div class="card">
        <!-- form start -->
        <form action="" method="post">
          <?php if ($this->input->get('shorten')) {
            $data = $this->db->get_where('shorten_link', ['shorten' => $this->input->get('shorten')])->row_array();
          } else {
            $data = [];
          } ?>
          <!-- card-body -->
          <div class="card-body">
            <div class="form-group">
              <label for="original">Url Asli</label>
              <input type="text" class="form-control <?= form_error('original') ? 'is-invalid' : ''; ?>" id="original" name="original" placeholder="Masukkan URL Asli" value="<?= $data ? $data['original'] : set_value('original'); ?>">
              <?= form_error('original', '<div class="text-danger">', '</div>'); ?>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Nama URL</label>
                  <input type="text" class="form-control <?= form_error('name') ? 'is-invalid' : ''; ?>" id="name" name="name" placeholder="Masukkan Nama URL" value="<?= $data ? $data['name'] : set_value('name'); ?>">
                  <?= form_error('name', '<div class="text-danger">', '</div>'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="shorten">URL Pendek</label>
                  <input type="text" class="form-control <?= form_error('shorten') ? 'is-invalid' : ''; ?>" id="shorten" name="shorten" placeholder="Masukkan URL Pendek" value="<?= $data ? $data['shorten'] : set_value('shorten'); ?>">
                  <?= form_error('shorten', '<div class="text-danger">', '</div>'); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Buat Shorten Link!</button>
          </div>
        </form>
        <!-- form end -->
      </div>
      <!-- End of Shorten Link Form -->

      <!-- Shorten Link Table -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Shorten Link</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="shortenlink" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>URL Pendek</th>
                <th>URL Asli</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($links as $link) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $link['name']; ?></td>
                  <td><?= $link['shorten']; ?></td>
                  <td><?= $link['original']; ?></td>
                  <td><?= $link['created_at']; ?></td>
                  <td>
                    <a href="<?= base_url('shortenlink/delete/' . $link['shorten']); ?>" class="btn btn-warning">
                      <i class="fas fa-trash"></i>
                    </a>
                    <a href="<?= base_url('shortenlink/index?shorten=' . $link['shorten']); ?>" class="btn btn-success">
                      <i class="fas fa-pen"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>URL Pendek</th>
                <th>URL Asli</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- End of Shorten Link Table -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->