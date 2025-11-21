<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Green Elite Basketball Club</title>
  <link rel="stylesheet" href="club-basket-style.css">

</head>
<body>
  <header>
    <div class="brand">
      <div class="logo">GE</div>
      <div>
        <h3 style="margin:0;color:var(--primary-dark)">Green Elite Club</h3>
        <small style="color:var(--muted)">Komunitas Basket Hijau Elegan</small>
      </div>
    </div>
    <nav>
      <a href="#about">Tentang</a>
      <a href="#team">Tim</a>
      <a href="#gallery">Galeri</a>
      <a href="#schedule">Jadwal</a>
      <a href="#contact">Kontak</a>
    </nav>
    <button id="darkToggle">Dark Mode</button>
  </header>

  <main>
    <section class="hero fade-up">
      <div>
        <h1>Green Elite — Elegan, Fokus, Kompetitif</h1>
        <p>Kami adalah klub basket yang mengutamakan perkembangan skill, kedisiplinan, dan kebersamaan dalam suasana hijau yang menenangkan.</p>
        <a class="cta" href="#contact">Gabung Sekarang</a>
      </div>
      <div class="card">
        <h3>Pengumuman Terbaru</h3>
        <p style="color:var(--muted)">Pembukaan pendaftaran anggota baru — mulai Januari 2026.</p>
      </div>
    </section>

    <section id="about" class="fade-up">
      <div class="container card">
        <h2 style="color:var(--primary-dark)">Tentang Kami</h2>
        <p style="color:var(--muted)">Green Elite adalah klub basket modern yang mengedepankan performa, sportivitas, dan gaya elegan. Kami menerima anggota dari segala usia.</p>
      </div>
    </section>

    <section id="team" class="fade-up">
      <div class="container card">
        <h2 style="color:var(--primary-dark)">Tim Inti</h2>
        <div class="team-grid">
          <div class="player"><div class="avatar">A1</div><div><strong>Andi</strong><div style="color:var(--muted)">Point Guard</div></div></div>
          <div class="player"><div class="avatar">B2</div><div><strong>Budi</strong><div style="color:var(--muted)">Center</div></div></div>
          <div class="player"><div class="avatar">C3</div><div><strong>Citra</strong><div style="color:var(--muted)">Pelatih</div></div></div>
        </div>
      </div>
    </section>

    <section id="gallery" class="fade-up">
      <div class="container card">
        <h2 style="color:var(--primary-dark)">Galeri Kegiatan</h2>
        <div class="gallery">
          <img src="https://via.placeholder.com/300x200?text=Latihan+1" />
          <img src="https://via.placeholder.com/300x200?text=Latihan+2" />
          <img src="https://via.placeholder.com/300x200?text=Pertandingan" />
          <img src="https://via.placeholder.com/300x200?text=Komunitas" />
        </div>
      </div>
    </section>

    <div class="lightbox" id="lightbox"><img src="" id="lightImg" /></div>

    <section id="schedule" class="fade-up">
      <div class="container card">
        <h2 style="color:var(--primary-dark)">Jadwal Terbaru</h2>
        <table>
          <thead><tr><th>Tanggal</th><th>Kegiatan</th><th>Lokasi</th></tr></thead>
          <tbody>
            <tr><td>10 Jan 2026</td><td>Latihan Pembukaan Musim</td><td>Lapangan Utama</td></tr>
            <tr><td>15 Jan 2026</td><td>Sparring Team Hijau</td><td>Arena Kota</td></tr>
            <tr><td>20 Jan 2026</td><td>Pelatihan Skill Shoot</td><td>Indoor Hall</td></tr>
          </tbody>
        </table>
      </div>
    </section>

    <section id="contact" class="fade-up">
      <div class="container card">
        <h2 style="color:var(--primary-dark)">Gabung Bersama Kami</h2>
        <form onsubmit="event.preventDefault();alert('Terima kasih! Data Anda telah kami terima.')">
          <input type="text" placeholder="Nama" required />
          <input type="email" placeholder="Email" required />
          <input type="text" placeholder="Nomor HP" required />
          <select>
            <option>Pilih Peran</option>
            <option>Pemain</option>
            <option>Staff</option>
            <option>Volunteer</option>
          </select>
          <textarea placeholder="Pesan"></textarea>
          <button>Kirim</button>
        </form>
      </div>
    </section>
  </main>

  <footer>
    © 2025 Green Elite Basketball Club · Semua Hak Dilindungi
  </footer>

  <script>
    // Fade-in scroll animation
    const observer=new IntersectionObserver(entries=>{
      entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add('show')})
    },{threshold:0.2});
    document.querySelectorAll('.fade-up').forEach(el=>observer.observe(el));

    // Lightbox
    const lb=document.getElementById('lightbox');
    const lbImg=document.getElementById('lightImg');
    document.querySelectorAll('.gallery img').forEach(img=>{
      img.onclick=()=>{lb.classList.add('show');lbImg.src=img.src;}
    });
    lb.onclick=()=>lb.classList.remove('show');

    // Dark mode toggle
    document.getElementById('darkToggle').onclick=()=>{
      document.body.classList.toggle('dark');
    }
  </script>
</body>
</html>