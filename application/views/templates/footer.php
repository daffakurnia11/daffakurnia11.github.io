<footer id="footer">
  <div class="footer d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-6 col-md-4">
          <h2>Breakpoint</h2>
          <div class="d-flex align-items-center">
            <i class="flaticon-pin"></i>
            <span class="ps-3">Gedung Graha Pena Lt 15, jalan A. Yani,<br>Surabaya, Jawa Timur</span>
          </div>
          <a href="https://wa.me/6285790290209" target="_blank" class="footer-link">
            <p class="my-3">
              <i class="flaticon-phone-call"></i>
              <span class="ps-3">+62 857 9029 0209 (Kholid)</span>
            </p>
          </a>
          <a href="https://wa.me/6285156317473" target="_blank" class="footer-link">
            <p class="my-3">
              <i class="flaticon-phone-call"></i>
              <span class="ps-3">+62 851 5631 7473 (Daffa)</span>
            </p>
          </a>
          <a href="https://www.instagram.com/breakpoint.idn/" target="_blank" class="footer-link">
            <p class="my-3">
              <i class="flaticon-instagram"></i>
              <span class="ps-3">@breakpoint.idn</span>
            </p>
          </a>
          <a href="mailto:breakpoint.idn@gmail.com" class="footer-link">
            <p class="my-3">
              <i class="flaticon-gmail"></i>
              <span class="ps-3">breakpoint.idn@gmail.com</span>
            </p>
          </a>
        </div>
        <div class="col-sm-6 col-md-4">
          <h2>Jam Buka</h2>
          <p class="py-2">Senin - Jumat (07.00 WIB - 17.00 WIB)</p>
          <p class="py-2">Sabtu (09.00 WIB - 15.00 WIB)</p>
          <p class="py-2">Minggu (LIBUR)</p>
          <p class="py-2">Konsultasi 24/7 Jam</p>
        </div>
        <div class="col-sm-12 col-md-4">
          <h2 class="text-center text-md-start">Paket dan Harga</h2>
          <div class="row">
            <div class="col-sm-6 col-md-12">
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">Custom Website</p>
              </a>
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">Landing Page</p>
              </a>
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">Landing Page+</p>
              </a>
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">Small Business</p>
              </a>
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">Medium Business</p>
              </a>
            </div>
            <div class="col-sm-6 col-md-12">
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">Professional Business</p>
              </a>
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">Webinar Website</p>
              </a>
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">Event Website</p>
              </a>
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">Mini Classroom</p>
              </a>
              <a href="<?= base_url('package'); ?>" class="footer-link">
                <p class="py-1">E-commerce Website</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<script src="<?= base_url('assets/dist/'); ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
  var scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: '#navbar-menu'
  })

  function hotfixScrollSpy() {
    var dataSpyList = [].slice.call(document.querySelectorAll('[data-bs-spy="scroll"]'))
    let curScroll = getCurrentScroll();
    dataSpyList.forEach(function(dataSpyEl) {
      let offsets = bootstrap.ScrollSpy.getInstance(dataSpyEl)['_offsets'];
      for (let i = 0; i < offsets.length; i++) {
        offsets[i] += curScroll;
      }
    })
  }

  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }

  window.onload = function() {
    new bootstrap.ScrollSpy(document.body, {
      target: '#navbar-menu'
    });
    hotfixScrollSpy();
    window.scrollBy(0, 1);
  }
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/60b254976699c7280da99992/1f6s9kstj';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>