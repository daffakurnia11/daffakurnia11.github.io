<footer id="footer">
  <div class="footer d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 text-center">
          <h2>Kontak kami untuk informasi lebih lanjut</h2>
          <input type="text" class="form-control my-4" placeholder="Nama">
          <input type="text" class="form-control my-4" placeholder="Email">
          <div class="contact d-flex justify-content-between">
            <a href="https://www.instagram.com/breakpoint.idn/" target="_blank">
              <i class="contact-icon flaticon-instagram"></i>
            </a>
            <a href="https://wa.me/6285156317473" target="_blank">
              <i class="contact-icon flaticon-whatsapp"></i>
            </a>
            <a href="" target="_blank">
              <i class="contact-icon flaticon-linkedin"></i>
            </a>
            <a href="mailto:breakpoint.idn@gmail.com" target="_blank">
              <i class="contact-icon flaticon-gmail"></i>
            </a>
            <a href="http://line.me/ti/p/~daffakurnia11" target="_blank">
              <i class="contact-icon flaticon-line"></i>
            </a>
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

</body>

</html>