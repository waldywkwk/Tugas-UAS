<?php

session_start();

if(isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ponpes An-Nabil</title>
  <link rel="icon" href="icon baru.png" type="image/png" style="width: 160px;border-radius: 10px;">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Bagian Header dengan Hero Image -->
  <header class="hero-section">
    <div class="hero-content">
      <a href="index.html" class="baru">
        <img src="api putih.png" alt="Logo Pondok Pesantren An-Nabil" style="width: 50px;border-radius: 10px;" />
      </a>
      <a href="index.html" class="logo">
        <img src="icon baru.png" alt="Logo Pondok Pesantren An-Nabil" style="width: 50px;border-radius: 10px;" />
      </a>
      <h1>Pondok Pesantren An-Nabil</h1>
      <p>Mencetak Generasi Berintelektual Istiqomah Beriman dan Berkahlak Mulia</p>
      <br>
      <a href="daftar.html" class="btn-primary">input data santri</a>
    </div>
  </header>

  <!-- Bagian Navigasi -->
  <nav class="navbar">
    <div class="container">
      <a href="#about">Tentang Kami</a>
      <a href="#program">Program</a>
      <a href="#facilities">Fasilitas</a>
      <a href="#contact">Kontak</a>
    </div>
  </nav>

  <!-- Bagian Tentang Kami -->
  <section id="about" class="about section">
    <div class="container">
      <h2>Tentang Kami</h2>
      <div class="content-grid">
        <p>Pondok Pesantren An-Nabil adalah lembaga pendidikan Islam yang berkomitmen untuk mendidik santri agar menjadi generasi yang beriman, bertaqwa, berakhlak mulia, serta memiliki ilmu dan keterampilan untuk masa depan.</p>
        <img src="tentang kami.png" alt="Gambar Pondok Pesantren">
      </div>
      
      <!-- Card Container -->
      <div class="card-container">
        <!-- Card 1 -->
        <div class="card">
          <h3>Nilai Utama</h3>
          <p>Membentuk santri dengan nilai-nilai keislaman yang kuat dan berakhlak mulia.</p>
        </div>
        <!-- Card 2 -->
        <div class="card">
          <h3>Program Unggulan</h3>
          <p>Menyediakan program tahfidz Al-Qur'an, ilmu syariah, dan keterampilan hidup.</p>
        </div>
        <!-- Card 3 -->
        <div class="card">
          <h3>Visi Kami</h3>
          <p>Menjadi pusat pendidikan Islam yang unggul dalam membentuk generasi penerus yang berilmu dan bertakwa.</p>
        </div>
      </div>
    </div>
  </section>
  
<hr>
  <!-- Bagian Program -->
  <section id="program" class="program section">
    <div class="container">
      <h2>Program Pendidikan</h2>
      <div class="content-grid">
        <img src="ngaji.jpg" alt="Gambar Program Pendidikan">
        <ul>
          <li>Sekolah Menengah Kejuruan</li>
          <li>Sekolah Menengah Pertama</li>
          <li>Madrasah Tsanawiyah</li>
          <li>Madrasah Aliyah</li>
          <li>Program Tahfidz Al-Qur'an</li>
        </ul>
      </div>
    </div>
  </section>
<hr>
  <!-- Bagian Fasilitas -->
  <section id="facilities" class="facilities section">
    <div class="container">
      <h2>Fasilitas</h2>
      <div class="content-grid">
        <p>Kami menyediakan fasilitas yang nyaman dan mendukung pembelajaran santri, seperti asrama, masjid, perpustakaan, ruang belajar modern, dan fasilitas olahraga.</p>
        <img src="Program studi.webp" alt="Gambar Fasilitas Pesantren">
      </div>
    </div>
  </section>
  <hr>
  <!-- Bagian Kontak -->
  <section id="contact" class="contact section">
    <div class="container">
      <h2>Kontak Kami</h2>
      <p>Untuk informasi lebih lanjut, silakan hubungi kami di:</p>
      <div class="contact-info">
        <p>Alamat: Jl. Raya Paesan Kebumen No.17</p>
        <p>Email: info@pesantren-annabil.com</p>
        <p>Telepon: (021) 123-4567</p>
      </div>
      <a href="https://maps.app.goo.gl/4XVZCW4vRuwoMw8s7" class="contact-img" target="_blank">
      <img src="lokasi fix.png" alt="Gambar Lokasi Pesantren" style="height: 20%; width: 20%;">
      </a>
      <br> <br>
      <form action="dashboard.php" method="POST"> 
        <button class="btn-primary" type="submit" name="logout">Logout</button>
      </form>

      <!-- Tombol WhatsApp -->
      <a href="https://www.instagram.com/arsyadlogh_?igsh=cmN4ZWZkcWw3czE1" class="instagram-float" target="_blank">
        <img src="igku.png" alt="Instagram" />
      </a>
    <a href="https://wa.me/6288239706519" class="whatsapp-float" target="_blank">
      <img src="waku.png" alt="WhatsApp" />
    </a>
    </div>
  </section>

  <!-- Bagian Footer -->
 <footer class="footer">
  <div class="container">
      <p>&copy; 2024 Pondok Pesantren An-Nabil. Semua hak cipta dilindungi</p>
  </div>
  </footer>
</marquee>
</body>
</html>
