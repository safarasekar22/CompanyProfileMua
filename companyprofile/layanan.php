<?php
$page_title = 'Layanan & Portofolio';
$active = 'layanan';
include 'includes/header.php';
?>

<section class="section">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Layanan Kami</span>
      <h2>Pilih Momen, Kami Sempurnakan</h2>
    </div>

    <div class="service-list">
      <div class="service-card">
        <div class="service-img-wrap">
          <img src="assets/img/layanan/wedding.jpg" alt="Wedding Makeup" class="service-img-photo" onerror="this.parentElement.querySelector('.service-img-fallback').style.display='flex'; this.style.display='none';">
          <div class="service-img service-img-fallback" style="display:none;">Wedding Makeup</div>
        </div>
        <div class="service-body">
          <h3>Wedding Makeup</h3>
          <p>Riasan pengantin tahan lama untuk akad, resepsi, hingga sesi foto — termasuk trial makeup.</p>
          <span class="service-price">Mulai Rp 1.500.000</span>
        </div>
      </div>

      <div class="service-card">
        <div class="service-img-wrap">
          <img src="assets/img/layanan/graduation.jpg" alt="Graduation Makeup" class="service-img-photo" onerror="this.parentElement.querySelector('.service-img-fallback').style.display='flex'; this.style.display='none';">
          <div class="service-img service-img-fallback" style="display:none;">Graduation Makeup</div>
        </div>
        <div class="service-body">
          <h3>Graduation Makeup</h3>
          <p>Tampil segar dan natural untuk momen wisuda, lengkap dengan penataan rambut ringan.</p>
          <span class="service-price">Mulai Rp 350.000</span>
        </div>
      </div>

      <div class="service-card">
        <div class="service-img-wrap">
          <img src="assets/img/layanan/photoshoot.jpg" alt="Photoshoot Makeup" class="service-img-photo" onerror="this.parentElement.querySelector('.service-img-fallback').style.display='flex'; this.style.display='none';">
          <div class="service-img service-img-fallback" style="display:none;">Photoshoot Makeup</div>
        </div>
        <div class="service-body">
          <h3>Photoshoot Makeup</h3>
          <p>Riasan editorial yang dirancang khusus agar tampil maksimal di depan kamera.</p>
          <span class="service-price">Mulai Rp 500.000</span>
        </div>
      </div>

      <div class="service-card">
        <div class="service-img-wrap">
          <img src="assets/img/layanan/party.jpg" alt="Party Makeup" class="service-img-photo" onerror="this.parentElement.querySelector('.service-img-fallback').style.display='flex'; this.style.display='none';">
          <div class="service-img service-img-fallback" style="display:none;">Party Makeup</div>
        </div>
        <div class="service-body">
          <h3>Party &amp; Event Makeup</h3>
          <p>Look glamor untuk pesta, gala, atau acara spesial lainnya, disesuaikan dengan tema acara.</p>
          <span class="service-price">Mulai Rp 400.000</span>
        </div>
      </div>

      <div class="service-card">
        <div class="service-img-wrap">
          <img src="assets/img/layanan/private-class.jpg" alt="Private Makeup Class" class="service-img-photo" onerror="this.parentElement.querySelector('.service-img-fallback').style.display='flex'; this.style.display='none';">
          <div class="service-img service-img-fallback" style="display:none;">Private Class</div>
        </div>
        <div class="service-body">
          <h3>Private Makeup Class</h3>
          <p>Belajar teknik dasar hingga lanjutan makeup sehari-hari bersama tim RASC, 1-on-1.</p>
          <span class="service-price">Mulai Rp 600.000</span>
        </div>
      </div>

      <div class="service-card">
        <div class="service-img-wrap">
          <img src="assets/img/layanan/on-call.jpg" alt="Makeup On Call" class="service-img-photo" onerror="this.parentElement.querySelector('.service-img-fallback').style.display='flex'; this.style.display='none';">
          <div class="service-img service-img-fallback" style="display:none;">Makeup On Call</div>
        </div>
        <div class="service-body">
          <h3>Makeup On Call</h3>
          <p>Layanan datang ke lokasi klien — rumah, hotel, atau venue acara di area kota.</p>
          <span class="service-price">Mulai Rp 450.000</span>
        </div>
      </div>
    </div>

    <div class="section-head center" style="margin-top:88px;">
      <span class="eyebrow">Portofolio</span>
      <h2>Hasil Karya Kami</h2>
    </div>
    <div class="portfolio-grid">
      <div class="portfolio-item-wrap">
        <img src="assets/img/portofolio/wedding-look.jpg" alt="Wedding Look" class="portfolio-photo" onerror="this.parentElement.querySelector('.portfolio-item').style.display='flex'; this.style.display='none';">
        <div class="portfolio-item" style="display:none;">Wedding Look</div>
      </div>
      <div class="portfolio-item-wrap">
        <img src="assets/img/portofolio/graduation-look.jpg" alt="Graduation Look" class="portfolio-photo" onerror="this.parentElement.querySelector('.portfolio-item').style.display='flex'; this.style.display='none';">
        <div class="portfolio-item" style="display:none;">Graduation Look</div>
      </div>
      <div class="portfolio-item-wrap">
        <img src="assets/img/portofolio/editorial-look.jpg" alt="Editorial Look" class="portfolio-photo" onerror="this.parentElement.querySelector('.portfolio-item').style.display='flex'; this.style.display='none';">
        <div class="portfolio-item" style="display:none;">Editorial Look</div>
      </div>
      <div class="portfolio-item-wrap">
        <img src="assets/img/portofolio/party-glam.jpg" alt="Party Glam" class="portfolio-photo" onerror="this.parentElement.querySelector('.portfolio-item').style.display='flex'; this.style.display='none';">
        <div class="portfolio-item" style="display:none;">Party Glam</div>
      </div>
    </div>
    <p style="text-align:center; font-size:13px; color:#7a7372; margin-top:18px;">
      *Taruh foto di assets/img/layanan/ dan assets/img/portofolio/ dengan nama file sesuai kode untuk menampilkan foto asli.</p>
  </div>
</section>

<section class="section alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Testimoni</span>
      <h2>Kata Mereka Tentang RASC</h2>
    </div>
    <div class="testi-grid">
      <div class="testi-card">
        <span class="quote-mark">&ldquo;</span>
        <p class="testi-text">Makeup-nya tahan dari pagi sampai resepsi malam, sama sekali gak luntur. Tim-nya juga super sabar dengerin request aku.</p>
        <div class="testi-name">Bella Pratiwi</div>
        <div class="testi-role">Wedding Client</div>
      </div>
      <div class="testi-card">
        <span class="quote-mark">&ldquo;</span>
        <p class="testi-text">Hasil makeup wisuda natural banget tapi tetap glowing di foto. Bakal balik lagi buat acara berikutnya!</p>
        <div class="testi-name">Nadia Putri</div>
        <div class="testi-role">Graduation Client</div>
      </div>
      <div class="testi-card">
        <span class="quote-mark">&ldquo;</span>
        <p class="testi-text">Profesional dari konsultasi sampai eksekusi. Hasil photoshoot jadi jauh lebih hidup di kamera.</p>
        <div class="testi-name">Sarah Amelia</div>
        <div class="testi-role">Photoshoot Client</div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
