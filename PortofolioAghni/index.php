<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>CV Aghni Pramestika</title>
  <link rel="stylesheet" href="style.css">
  <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Pacifico&display=swap" rel="stylesheet">

</head>
<body>
   <div class="border-marquee">
  <div class="marquee top">Aghni Pramestika Sari Dewi - Web Developer - Android Developer</div>
  <div class="marquee right">Aghni Pramestika Sari Dewi - Web Developer - Android Developer</div>
  <div class="marquee bottom">Aghni Pramestika Sari Dewi - Web Developer - Android Developer</div>
  <div class="marquee left">Aghni Pramestika Sari Dewi - Web Developer - Android Developer</div>
</div>

  <!-- ===== NAVBAR ===== -->
  <nav class="navbar">
    <div class="logo">Portofolio</div>
    <ul class="nav-links">
      <li><a href="#home" class="active">HOME</a></li>
      <li><a href="#about">ABOUT ME</a></li>
      <li><a href="#contact">CONTACT</a></li>
    </ul>
  </nav>
  

  <!-- ===== HEADER ===== -->
<header id="home" class="hero">
  <img src="aghni.jpg" alt="Foto Aghni" class="profile-img">
  <h1>Aghni Pramestika Sari Dewi</h1>
  <p>Web Developer | Android Developer</p>
</header>


  <!-- ===== ABOUT ===== -->
  <section id="about" class="section">
     <h2>Tentang Saya</h2>
  <p>
    Saya adalah siswa SMKN 5 Surakarta jurusan Pengembangan Perangkat Lunak dan Gim (PPLG) yang memiliki semangat tinggi dalam dunia teknologi dan pengembangan perangkat lunak. Sejak duduk di bangku sekolah, saya aktif mengembangkan berbagai proyek seperti aplikasi presensi berbasis Android, sistem jurnal PKL berbasis web, dan saat ini sedang merancang aplikasi cerita interaktif.
  </p>
  <p>
    Saya terbiasa menggunakan bahasa pemrograman Java, PHP, dan JavaScript. Saya juga berpengalaman menggunakan tools seperti Firebase, MySQL, GitHub, dan Figma untuk mendukung pengembangan aplikasi secara kolaboratif maupun mandiri.
  </p>
  <p>
    Fokus utama saya adalah membuat aplikasi yang bermanfaat, mudah digunakan, dan memiliki desain antarmuka yang menarik serta responsif. Saya terus belajar dan berkembang agar bisa menjadi developer profesional yang mampu bersaing di dunia industri teknologi.
  </p>
  </section>

  <!-- ===== DATA PRIBADI ===== -->
  <section class="section">
    <h2>Data Pribadi</h2>
    <div class="personal-info">
      <div class="info-box">
        <p><strong>Nama:</strong> Aghni Pramestika Sari Dewi</p>
        <p><strong>Lahir:</strong> Boyolali, 4 April 2007</p>
        <p><strong>Alamat:</strong> Karangjoho RT3/RW3, Sembungan, Nogosari, Boyolali</p>
      </div>
      <div class="info-box">
        <p><strong>Telepon:</strong> 0838-1755-9224</p>
        <p><strong>Email:</strong> <a href="mailto:aghnidewi04@gmail.com">aghnidewi04@gmail.com</a></p>
        <p><strong>GitHub:</strong> <a href="https://github.com/AghniPramestika04" target="_blank">github.com/AghniPramestika04</a></p>
      </div>
    </div>
  </section>

  <!-- ===== PENDIDIKAN ===== -->
  <section class="section">
     <section id="education">
  <h2>Riwayat Pendidikan</h2>
  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-icon">📚</div>
      <div class="timeline-content">
        <h3>MIM Asemgrowong</h3>
        <span class="timeline-date">2014 - 2020</span>
        <p>Sekolah Dasar</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-icon">🏫</div>
      <div class="timeline-content">
        <h3>MTSN 2 Boyolali</h3>
        <span class="timeline-date">2020 - 2023</span>
        <p>Madrasah Tsanawiyah</p>
      </div>
    </div>
    <div class="timeline-item">
      <div class="timeline-icon">💻</div>
      <div class="timeline-content">
        <h3>SMKN 5 Surakarta - PPLG</h3>
        <span class="timeline-date">2023 - 2026</span>
        <p>Pengembangan Perangkat Lunak dan Gim</p>
      </div>
    </div>
  </div>
</section>

    </ul>
  </section>

  <!-- ===== KEAHLIAN ===== -->
  <section class="section">
    <h2>Keahlian</h2>
    <div class="grid">
      <div class="card"><h3>Frontend</h3><ul><li>HTML</li><li>CSS</li><li>JS</li><li>Bootstrap</li></ul></div>
      <div class="card"><h3>Backend</h3><ul><li>PHP</li></ul></div>
      <div class="card"><h3>Database</h3><ul><li>MySQL</li><li>Firebase</li></ul></div>
      <div class="card"><h3>Tools</h3><ul><li>Git</li><li>Figma</li></ul></div>
      <div class="card"><h3>Lainnya</h3><ul><li>REST API</li><li>UI/UX</li></ul></div>
    </div>
  </section>

 <!-- ===== PENGALAMAN ===== -->
<section class="section">
  <h2>Pengalaman Proyek</h2>
  <div class="grid pengalaman-grid">
    <div class="card">
      <h3>📱 Aplikasi Presensi</h3>
      <p>Android + Firebase</p>
    </div>
    <div class="card">
      <h3>🌐 Web Jurnal PKL</h3>
      <p>PHP + MySQL</p>
    </div>
    <div class="card">
      <h3>📖 Aplikasi Cerita</h3>
      <p>Android Studio + Firebase</p>
    </div>
    <div class="card center-card">
      <h3>🎮 Game Rubik</h3>
      <p>Kodular</p>
    </div>
  </div>
</section>



  <!-- ===== PORTFOLIO VIEW ===== -->
    <div class="grid">
      <?php
        $data = mysqli_query($koneksi, "SELECT * FROM data_portfolio");
        while ($d = mysqli_fetch_array($data)) {
      ?>
      <div class="card">
        <img src="foto/<?php echo $d['gambar']; ?>" alt="">
        <h3><?php echo $d['judul']; ?></h3>
        <p><?php echo $d['deskripsi']; ?></p>
        <a href="<?php echo $d['link']; ?>" target="_blank">Lihat</a>
      </div>
      <?php } ?>
    </div>

  </section>

  <!-- ===== CONTACT ===== -->
  <section id="contact" class="section">
    <h2>Kontak</h2>
    <p>Hubungi saya melalui email <a href="mailto:aghnidewi04@gmail.com">aghnidewi04@gmail.com</a> atau Instagram <a href="https://instagram.com" target="_blank">@agh.ni</a>.</p>
  </section>

  <footer>
    <p>© 2025 Aghni Pramestika Sari Dewi</p>
  </footer>

</body>
</html>     