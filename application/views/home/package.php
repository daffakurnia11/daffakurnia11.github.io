<header id="package-page">
  <div class="logo">
    <div class="logo-content">
      <a href="index.html">
        <img src="assets/img/logo-transparent.png" class="logo-image" alt="">
      </a>
    </div>
  </div>
  <div class="header d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-10 text-center">
          <h1 class="header-title">Daftar Harga dan Paket</h1>
          <p class="header-description">
            Tersedia berbagai variasi paket dan harga yang dapat disesuaikan dengan kebutuhan website-mu dengan tujuh
            belas fitur spesial dan add-ons yang terintegrasi di dalamnya. Add-ons di luar paket dapat ditambahkan
            sesuai keinginan Anda.
          </p>
        </div>
      </div>
    </div>
  </div>
</header>
<section id="package-table">
  <div class="package-content d-flex flex-column justify-content-center">
    <div class="container mb-5">
      <div class="text-end my-4">
        <a href="<?= base_url(''); ?>" class="btn green-button">
          Back to Homepage
        </a>
      </div>
      <h2 class="package-content-title text-center">Packages and Pricing</h2>
      <div class="row mt-4">
        <div class="col-6 col-md-3 col-lg-2 facilities pe-0">
          <div class="facilities-item">Specifications</div>
          <div class="facilities-item">Harga (Start from)</div>
          <div class="facilities-item">Max Page</div>
          <div class="facilities-item">Maintenance</div>
          <div class="facilities-item">Domain</div>
          <div class="facilities-item">Hosting</div>
          <div class="facilities-item">SSL</div>
          <div class="facilities-item">Special Features</div>
        </div>
        <div class="col-6 col-md-9 col-lg-10 ps-0">
          <div class="table-responsive">
            <table>
              <thead>
                <tr class="d-flex text-center">
                  <?php foreach ($packages as $package) : ?>
                    <th scope="col" class="col-4"><?= $package['package']; ?></th>
                  <?php endforeach; ?>
                </tr>
              </thead>
              <tbody>
                <tr class="d-flex">
                  <?php foreach ($packages as $package) : ?>
                    <td class="col-4 fw-bolder text-nowrap"><?= $package['price']; ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr class="d-flex">
                  <?php foreach ($packages as $package) : ?>
                    <td class="col-4"><?= $package['page']; ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr class="d-flex">
                  <?php foreach ($packages as $package) : ?>
                    <td class="col-4"><?= $package['maintenance']; ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr class="d-flex">
                  <?php foreach ($packages as $package) : ?>
                    <td class="col-4"><?= $package['domain']; ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr class="d-flex">
                  <?php foreach ($packages as $package) : ?>
                    <td class="col-4"><?= ($package['hosting'] == 1) ? '<i class="flaticon-check-mark"></i>' : '-'; ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr class="d-flex">
                  <?php foreach ($packages as $package) : ?>
                    <td class="col-4"><?= ($package['has_ssl'] == 1) ? '<i class="flaticon-check-mark"></i>' : '-'; ?></td>
                  <?php endforeach; ?>
                </tr>
                <tr class="d-flex pb-3 pb-md-5">
                  <?php foreach ($packages as $package) : ?>
                    <td class="col-4"><?= $package['specials']; ?></td>
                  <?php endforeach; ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="package-features">
  <div class="package-features d-flex flex-column justify-content-center">
    <div class="container mb-5">
      <h2 class="package-features-title text-center">Special Features and Add-ons</h2>
      <h3 class="package-features-item mt-4">Classroom Features</h3>
      <div class="row feature text-center">
        <div class="mt-4 col-md">
          <div class="feature-icon">
            <i class="icon-image flaticon-files"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">File Management System</h4>
          <p class="feature-description">
            Mengunggah dan mengunduh file dengan mudah
          </p>
        </div>
        <div class="mt-4 col-md">
          <div class="feature-icon">
            <i class="icon-image flaticon-immigration"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Present Code System</h4>
          <p class="feature-description">
            Sistem kode presensi sebagai syarat kehadiran
          </p>
        </div>
        <div class="mt-4 col-md">
          <div class="feature-icon">
            <i class="icon-image flaticon-score"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Scoring System</h4>
          <p class="feature-description">
            Sistem pemberian nilai yang mudah dan real-time
          </p>
        </div>
        <div class="mt-4 col-md">
          <div class="feature-icon">
            <i class="icon-image flaticon-calendar"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Schedule Management System</h4>
          <p class="feature-description">
            Mengatur dan menampilkan jadwal kegiatan atau tenggat waktu
          </p>
        </div>
      </div>
      <h3 class="package-features-item mt-4">E-Commerce Features</h3>
      <div class="row feature text-center">
        <div class="mt-4 col-md">
          <div class="feature-icon">
            <i class="icon-image flaticon-online-shop"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Shopping Cart System</h4>
          <p class="feature-description">
            Apa arti e-commerce tanpa keranjang belanja di dalamnya
          </p>
        </div>
        <div class="mt-4 col-md">
          <div class="feature-icon">
            <i class="icon-image flaticon-delivery"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Shipping Cost Estimation</h4>
          <p class="feature-description">
            Estimasi ongkos kirim dengan ekspedisi dan daerah yang lengkap
          </p>
        </div>
        <div class="mt-4 col-md">
          <div class="feature-icon">
            <i class="icon-image flaticon-location"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Invoice Tracking System</h4>
          <p class="feature-description">
            Customer dapat melacak proses produk melalui kode pemesanan
          </p>
        </div>
        <div class="mt-4 col-md">
          <div class="feature-icon">
            <i class="icon-image flaticon-qr-code"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Referral Code System</h4>
          <p class="feature-description">
            Kode referral seperti diskon produk untuk beberapa customer
          </p>
        </div>
        <div class="mt-4 col-md">
          <div class="feature-icon">
            <i class="icon-image flaticon-personal-information"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Personal Information Form</h4>
          <p class="feature-description">
            Formulir data pribadi seperti alamat pengiriman
          </p>
        </div>
      </div>
      <h3 class="package-features-item mt-4">Other Features</h3>
      <div class="row feature text-center justify-content-center
        ">
        <div class="mt-4 col-md-3">
          <div class="feature-icon">
            <i class="icon-image flaticon-link"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Shorten Link</h4>
          <p class="feature-description">
            Penyingkat tautan untuk kemudahan akses website
          </p>
        </div>
        <!-- <div class="mt-4 col-md-3">
            <div class="feature-icon">
              <i class="icon-image flaticon-speech-bubble"></i>
              <div class="icon-underline">
              </div>
            </div>
            <h4 class="feature-title">Live Chat</h4>
            <p class="feature-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat,
              maxime?
            </p>
          </div> -->
        <div class="mt-4 col-md-3">
          <div class="feature-icon">
            <i class="icon-image flaticon-registration"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Registration Form</h4>
          <p class="feature-description">
            Pengguna dapat mendaftarkan akun pada website
          </p>
        </div>
        <div class="mt-4 col-md-3">
          <div class="feature-icon">
            <i class="icon-image flaticon-admin"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Admin Access</h4>
          <p class="feature-description">
            Hak akses oleh pemilik untuk mengatur website
          </p>
        </div>
        <div class="mt-4 col-md-3">
          <div class="feature-icon">
            <i class="icon-image flaticon-man"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">User-role Access</h4>
          <p class="feature-description">
            Akses beberapa pengguna dengan akses fitur yang berbeda
          </p>
        </div>
        <div class="mt-4 col-md-3">
          <div class="feature-icon">
            <i class="icon-image flaticon-folder-management"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Data Management</h4>
          <p class="feature-description">
            Menambah, menghapus, dan mengubah data di dalam website
          </p>
        </div>
        <div class="mt-4 col-md-3">
          <div class="feature-icon">
            <i class="icon-image flaticon-monitor"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Data Report</h4>
          <p class="feature-description">
            Penyajian data laporan yang dikemas dan dapat diunduh
          </p>
        </div>
        <div class="mt-4 col-md-3">
          <div class="feature-icon">
            <i class="icon-image flaticon-configuration"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Content Management System</h4>
          <p class="feature-description">
            Mengatur isi konten seperti katalog sesuai keinginanmu
          </p>
        </div>
        <div class="mt-4 col-md-3">
          <div class="feature-icon">
            <i class="icon-image flaticon-email"></i>
            <div class="icon-underline">
            </div>
          </div>
          <h4 class="feature-title">Email Verification</h4>
          <p class="feature-description">
            Konfirmasi dan verifikasi email pengguna secara otomatis
          </p>
        </div>
      </div>
    </div>
  </div>
</section>