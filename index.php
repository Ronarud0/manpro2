<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Green Elite Basketball Club</title>
  <style>
    :root{
      --bg:#f3f9f5;
      --primary:#1b8f4b;
      --primary-dark:#0f5f31;
      --accent:#8bd686;
      --muted:#5f6f65;
      --card:#ffffff;
      font-family:'Segoe UI',Arial,sans-serif;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{background:var(--bg);color:#0f1c13;line-height:1.5;transition:background .3s,color .3s}

    /* Header */
    header{display:flex;justify-content:space-between;align-items:center;padding:18px 28px;background:var(--card);box-shadow:0 4px 10px rgba(0,0,0,0.05);position:sticky;top:0;z-index:20}
    .brand{display:flex;align-items:center;gap:12px}
    .logo{width:48px;height:48px;border-radius:50%;background:linear-gradient(145deg,var(--primary),var(--accent));display:flex;align-items:center;justify-content:center;color:white;font-weight:800;font-size:20px}
    nav a{margin-left:14px;text-decoration:none;color:var(--muted);font-weight:500;padding:6px 10px;border-radius:6px;transition:.2s}
    nav a:hover{background:var(--accent);color:#0f1c13}

    /* Hero */
    .hero{padding:50px 28px;display:grid;grid-template-columns:1fr 1fr;gap:30px;align-items:center}
    .hero h1{font-size:42px;color:var(--primary-dark);font-weight:800;margin-bottom:12px}
    .hero p{color:var(--muted);margin-bottom:20px;font-size:17px}
    .hero .cta{background:var(--primary);color:white;padding:12px 20px;text-decoration:none;border-radius:10px;font-weight:600;transition:.2s}
    .hero .cta:hover{background:var(--primary-dark)}

    .fade-up{opacity:0;transform:translateY(20px);transition:opacity .8s ease, transform .8s ease}
    .fade-up.show{opacity:1;transform:translateY(0)}

    .card{background:var(--card);padding:20px;border-radius:12px;box-shadow:0 6px 20px rgba(0,0,0,0.06)}

    /* Gallery */
    .gallery{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;margin-top:20px}
    .gallery img{width:100%;border-radius:10px;transition:.3s;cursor:pointer}
    .gallery img:hover{transform:scale(1.05)}

    .lightbox{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.8);display:flex;align-items:center;justify-content:center;visibility:hidden;opacity:0;transition:.3s}
    .lightbox img{max-width:90%;max-height:90%;border-radius:10px}
    .lightbox.show{visibility:visible;opacity:1}

    /* Team */
    .team-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px;margin-top:16px}
    .player{display:flex;align-items:center;gap:12px;background:var(--card);padding:12px;border-radius:10px;box-shadow:0 4px 12px rgba(0,0,0,0.05);transition:.3s}
    .player:hover{transform:translateY(-6px);box-shadow:0 8px 20px rgba(0,0,0,0.08)}
    .avatar{width:60px;height:60px;border-radius:8px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:var(--primary-dark);font-weight:bold;font-size:20px}

    /* Table */
    table{width:100%;border-collapse:collapse;margin-top:12px}
    th,td{padding:12px;border-bottom:1px solid #dce8df;text-align:left}
    th{background:#eaf3ec;color:var(--primary-dark)}

    /* Form */
    form{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:14px}
    input,select,textarea{padding:12px;border-radius:8px;border:1px solid #d7e5d9;font-size:15px}
    textarea{grid-column:1/3;height:110px}
    button{grid-column:1/3;padding:12px;border:none;background:var(--primary);color:white;font-weight:bold;border-radius:8px;font-size:16px;transition:.2s}
    button:hover{background:var(--primary-dark)}

    /* Footer */
    footer{padding:28px;background:var(--primary-dark);color:#e8f5ee;text-align:center;margin-top:20px}

    /* Dark Mode */
    .dark{--bg:#0e1a14;--card:#13251c;--muted:#9eb8a7;--primary:#2fbf6c;--primary-dark:#198747;--accent:#5ce68f;color:white}

    #darkToggle{cursor:pointer;padding:8px 14px;background:var(--primary);border:none;border-radius:8px;color:white;margin-left:20px}

    @media(max-width:850px){.hero{grid-template-columns:1fr}}
  </style>
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