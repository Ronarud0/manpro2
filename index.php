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
      font-family: 'Segoe UI', Arial, sans-serif;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{background:var(--bg);color:#0f1c13;line-height:1.5}

    /* Header */
    header{display:flex;justify-content:space-between;align-items:center;padding:18px 28px;background:var(--card);box-shadow:0 4px 10px rgba(0,0,0,0.05);position:sticky;top:0;z-index:20}
    .brand{display:flex;align-items:center;gap:12px}
    .logo{width:48px;height:48px;border-radius:50%;background:linear-gradient(145deg,var(--primary),var(--accent));display:flex;align-items:center;justify-content:center;color:white;font-weight:800;font-size:20px}
    nav a{margin-left:14px;text-decoration:none;color:var(--muted);font-weight:500;padding:6px 10px;border-radius:6px}
    nav a:hover{background:var(--accent);color:#0f1c13}

    /* Hero */
    .hero{padding:50px 28px;display:grid;grid-template-columns:1fr 1fr;gap:30px;align-items:center}
    .hero h1{font-size:38px;color:var(--primary-dark);font-weight:800;margin-bottom:12px}
    .hero p{color:var(--muted);margin-bottom:20px}
    .hero .cta{background:var(--primary);color:white;padding:12px 20px;text-decoration:none;border-radius:10px;font-weight:600}
    .hero .cta:hover{background:var(--primary-dark)}

    .card{background:var(--card);padding:20px;border-radius:12px;box-shadow:0 6px 20px rgba(0,0,0,0.06)}

    /* Team */
    .team-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px;margin-top:16px}
    .player{display:flex;align-items:center;gap:12px;background:var(--card);padding:12px;border-radius:10px;box-shadow:0 4px 12px rgba(0,0,0,0.05)}
    .avatar{width:60px;height:60px;border-radius:8px;background:var(--accent);display:flex;align-items:center;justify-content:center;color:var(--primary-dark);font-weight:bold;font-size:20px}

    section{padding:32px 28px}
    .container{max-width:1150px;margin:auto}

    /* Table */
    table{width:100%;border-collapse:collapse;margin-top:12px}
    th,td{padding:12px;border-bottom:1px solid #dce8df;text-align:left}
    th{background:#eaf3ec;color:var(--primary-dark)}

    /* Form */
    form{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:14px}
    input,select,textarea{padding:12px;border-radius:8px;border:1px solid #d7e5d9;font-size:15px}
    textarea{grid-column:1/3;height:110px}
    button{grid-column:1/3;padding:12px;border:none;background:var(--primary);color:white;font-weight:bold;border-radius:8px;font-size:16px}
    button:hover{background:var(--primary-dark)}

    /* Footer */
    footer{padding:28px;background:var(--primary-dark);color:#e8f5ee;text-align:center;margin-top:20px}

    /* Responsive */
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
      <a href="#schedule">Jadwal</a>
      <a href="#contact">Kontak</a>
    </nav>
  </header>

  <main>
    <section class="hero">
      <div>
        <h1>Green Elite — Bermain Dengan Elegan & Energi</h1>
        <p>Kami adalah klub basket yang berfokus pada teknik, sportivitas, dan pengembangan komunitas. Bergabunglah dengan suasana hijau yang sehat dan penuh semangat.</p>
        <a class="cta" href="#contact">Gabung Sekarang</a>
      </div>
      <div class="card">
        <h3>Pengumuman</h3>
        <p style="color:var(--muted)">Latihan rutin dimulai setiap Rabu & Sabtu pukul 17.00 — Lapangan Hijau Indoor.</p>
      </div>
    </section>

    <section id="about">
      <div class="container card">
        <h2 style="color:var(--primary-dark)">Tentang Kami</h2>
        <p style="color:var(--muted)">Green Elite dibentuk tahun 2020 sebagai komunitas basket yang sehat, dinamis, dan ramah untuk segala usia. Kami mengedepankan teknik bermain yang benar, disiplin, dan kekompakan.</p>
      </div>
    </section>

    <section id="team">
      <div class="container card">
        <h2 style="color:var(--primary-dark)">Tim Inti</h2>
        <div class="team-grid">
          <div class="player"><div class="avatar">A1</div><div><strong>Andi</strong><div style="color:var(--muted)">Point Guard</div></div></div>
          <div class="player"><div class="avatar">B2</div><div><strong>Budi</strong><div style="color:var(--muted)">Center</div></div></div>
          <div class="player"><div class="avatar">C3</div><div><strong>Citra</strong><div style="color:var(--muted)">Pelatih</div></div></div>
        </div>
      </div>
    </section>

    <section id="schedule">
      <div class="container card">
        <h2 style="color:var(--primary-dark)">Jadwal Latihan & Pertandingan</h2>
        <table>
          <thead>
            <tr><th>Tanggal</th><th>Acara</th><th>Lokasi</th></tr>
          </thead>
          <tbody>
            <tr><td>10 Des 2025</td><td>Latihan Teknik Dasar</td><td>Lapangan Indoor</td></tr>
            <tr><td>13 Des 2025</td><td>Sparring vs Green Lions</td><td>Stadion Kota</td></tr>
            <tr><td>17 Des 2025</td><td>Latihan Intensif</td><td>Lapangan Utama</td></tr>
          </tbody>
        </table>
      </div>
    </section>

    <section id="contact">
      <div class="container card">
        <h2 style="color:var(--primary-dark)">Gabung Bersama Kami</h2>
        <form onsubmit="event.preventDefault();alert('Terima kasih! Kami akan segera menghubungi Anda.')">
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
</body>
</html>
