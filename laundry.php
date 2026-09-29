<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>Bilas Laundry – Antar jemput, selesai 24 jam</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@500;800&family=Instrument+Sans:wght@400;600&display=swap">

  <style>
    /* ---------- Warna & pengaturan dasar ---------- */
    :root {
      --bg: #F2F8F7;
      --card: #fff;
      --ink: #0F3A40;
      --mute: #4B6B70;
      --main: #1F7F8E;
      --acc: #FFC629;
      --line: #cfe3e2;
      box-sizing: border-box;
      padding-top: env(safe-area-inset-top, 0px);
      padding-bottom: env(safe-area-inset-bottom, 0px);
    }

    /* Mode gelap otomatis */
    @media (prefers-color-scheme: dark) {
      :root:not([data-theme="light"]) {
        --bg: #0B2226;
        --card: #12343A;
        --ink: #EAF6F5;
        --mute: #9DBFC2;
        --main: #5CC3D1;
        --line: #245259;
      }
    }

    :root[data-theme="dark"] {
      --bg: #0B2226;
      --card: #12343A;
      --ink: #EAF6F5;
      --mute: #9DBFC2;
      --main: #5CC3D1;
      --line: #245259;
    }

    html {
      scroll-padding-top: env(safe-area-inset-top, 0px);
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: var(--bg);
      color: var(--ink);
      font: 400 1.05rem/1.6 "Instrument Sans", system-ui, sans-serif;
    }

    h1,
    h2,
    h3 {
      font-family: "Bricolage Grotesque", system-ui, sans-serif;
      line-height: 1.08;
      margin: 0;
    }

    /* Pembungkus konten */
    .w {
      max-width: 1040px;
      margin: 0 auto;
      padding: 0 20px;
    }

    /* ---------- Header & tombol ---------- */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 18px 0;
    }

    .logo {
      font: 800 1.3rem "Bricolage Grotesque", sans-serif;
    }

    .btn {
      display: inline-block;
      background: var(--acc);
      color: #0F3A40;
      font-weight: 600;
      padding: 14px 24px;
      border-radius: 999px;
      text-decoration: none;
    }

    .btn:focus-visible,
    a:focus-visible {
      outline: 3px solid var(--main);
      outline-offset: 3px;
    }

    /* ---------- Hero ---------- */
    .hero {
      display: grid;
      gap: 36px;
      padding: 32px 0 72px;
      align-items: center;
    }

    @media (min-width: 800px) {
      .hero {
        grid-template-columns: 1.2fr 1fr;
      }
    }

    h1 {
      font-size: clamp(2.4rem, 7vw, 4.4rem);
      font-weight: 800;
      letter-spacing: -.02em;
    }

    .hero p {
      max-width: 46ch;
      color: var(--mute);
      margin: 18px 0 26px;
    }

    /* Label harga bergaya tag pakaian */
    .tag {
      background: var(--acc);
      color: #0F3A40;
      border-radius: 20px;
      padding: 30px 28px 28px;
      position: relative;
      transform: rotate(3deg);
      max-width: 340px;
      justify-self: center;
      box-shadow: 0 14px 30px -12px rgba(15, 58, 64, .4);
      animation: swing 1.2s ease-out both;
    }

    .tag:before {
      content: "";
      position: absolute;
      top: 16px;
      left: 50%;
      width: 18px;
      height: 18px;
      margin-left: -9px;
      border-radius: 50%;
      background: var(--bg);
    }

    .tag small {
      display: block;
      margin-top: 22px;
      font-weight: 600;
    }

    .tag b {
      display: block;
      font: 800 3.6rem/1 "Bricolage Grotesque", sans-serif;
      margin: 6px 0;
    }

    .tag span {
      font-size: .95rem;
    }

    @keyframes swing {
      from {
        transform: rotate(-14deg) translateY(-20px);
      }

      to {
        transform: rotate(3deg);
      }
    }

    @media (prefers-reduced-motion: reduce) {
      .tag {
        animation: none;
      }
    }

    /* ---------- Section umum ---------- */
    section {
      padding: 56px 0;
    }

    h2 {
      font-size: clamp(1.8rem, 4.5vw, 2.6rem);
      font-weight: 800;
      margin-bottom: 28px;
    }

    .grid {
      display: grid;
      gap: 16px;
    }

    @media (min-width: 700px) {
      .grid.c3 {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .card {
      background: var(--card);
      border: 1px solid var(--line);
      border-radius: 16px;
      padding: 24px;
    }

    .card h3 {
      font-size: 1.3rem;
      margin-bottom: 8px;
    }

    .card p {
      margin: 0;
      color: var(--mute);
    }

    /* ---------- Tabel harga ---------- */
    .tw {
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: var(--card);
      border-radius: 16px;
      overflow: hidden;
      min-width: 420px;
    }

    th,
    td {
      text-align: left;
      padding: 16px 20px;
      border-bottom: 1px solid var(--line);
    }

    th {
      background: var(--main);
      color: #fff;
      font-weight: 600;
    }

    td:last-child {
      font-weight: 600;
      white-space: nowrap;
    }

    tr:last-child td {
      border-bottom: 0;
    }

    /* ---------- Cara pesan ---------- */
    ol {
      list-style: none;
      margin: 0;
      padding: 0;
      display: grid;
      gap: 16px;
    }

    @media (min-width: 700px) {
      ol {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    ol li {
      border-top: 4px solid var(--main);
      padding-top: 14px;
    }

    ol li b {
      font: 800 1.1rem "Bricolage Grotesque", sans-serif;
      display: block;
      margin-bottom: 4px;
    }

    ol li span {
      color: var(--mute);
    }

    /* ---------- Ajakan akhir & footer ---------- */
    .cta {
      background: var(--main);
      color: #fff;
      border-radius: 24px;
      padding: 44px 28px;
      text-align: center;
    }

    .cta h2 {
      margin-bottom: 12px;
    }

    .cta p {
      margin: 0 auto 24px;
      max-width: 44ch;
    }

    footer {
      padding: 32px 0 40px;
      color: var(--mute);
      font-size: .95rem;
      text-align: center;
    }

    /* ---------- Footer modern ---------- */
.footer {
  margin-top: 40px;
  padding: 36px 28px 20px;
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: 24px 24px 0 0;
}

.footer-content {
  display: grid;
  gap: 28px;
}

.footer-brand h3 {
  font: 800 1.7rem "Bricolage Grotesque", sans-serif;
  color: var(--main);
  margin-bottom: 8px;
}

.footer-brand p {
  color: var(--mute);
  margin: 0;
}

.footer-info {
  display: grid;
  gap: 20px;
}

.info-item {
  display: flex;
  align-items: flex-start;
  gap: 14px;
}

.info-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 44px;
  height: 44px;
  flex-shrink: 0;
  background: var(--bg);
  border-radius: 12px;
  font-size: 1.2rem;
}

.info-item b {
  display: block;
  font-weight: 600;
  margin-bottom: 3px;
}

.info-item p {
  margin: 0;
  color: var(--mute);
  overflow-wrap: anywhere;
}

.footer-bottom {
  margin-top: 28px;
  padding-top: 18px;
  border-top: 1px solid var(--line);
  text-align: center;
  color: var(--mute);
  font-size: .9rem;
}

.footer-bottom p {
  margin: 0;
}

@media (min-width: 700px) {
  .footer-content {
    grid-template-columns: 1fr 1.2fr;
    align-items: start;
  }
}
  </style>
</head>

<body>
  <div class="w">

    <!-- Header -->
    <header>
      <div class="logo">Bilas Laundry</div>
      <a class="btn" href="index.php">Masuk</a>
    </header>

    <!-- Hero -->
    <div class="hero">
      <div>
        <h1>Cucian beres, harimu tetap santai.</h1>
        <p>
          Kami jemput cucianmu, cuci dengan deterjen lembut, lalu antar kembali
          dalam keadaan wangi dan rapi. Selesai dalam 24 jam.
        </p>
        <a class="btn" href="index.php">Masuk &amp; pesan sekarang</a>
      </div>

      <div class="tag">
        <small>Cuci kiloan</small>
        <b>Rp25.000</b>
        <span>per kg, gratis antar jemput di area kota</span>
      </div>
    </div>

    <!-- Layanan -->
    <section>
      <h2>Layanan kami</h2>
      <div class="grid c3">
        <div class="card">
          <h3>Cuci kiloan</h3>
          <p>Pakaian harian dicuci, dikeringkan, dan dilipat rapi. Cocok untuk anak kos dan keluarga.</p>
        </div>
        <div class="card">
          <h3>Cuci satuan</h3>
          <p>Jas, gaun, selimut, bedcover, dan boneka ditangani terpisah dengan perawatan khusus.</p>
        </div>
        <div class="card">
          <h3>Ekspres 6 jam</h3>
          <p>Butuh cepat? Cucian selesai di hari yang sama, cukup tambah biaya ekspres.</p>
        </div>
      </div>
    </section>

    <!-- Harga -->
    <section>
      <h2>Harga jelas, tanpa biaya tersembunyi</h2>
      <div class="tw">
        <table>
          <tr>
            <th>Layanan</th>
            <th>Harga</th>
          </tr>
          <tr>
            <td>Cuci, keringkan, setrika, dan lipat</td>
            <td>Rp25.000/kg</td>
          </tr>
        </table>
      </div>
    </section>

    <!-- Cara pesan -->
    <section>
      <h2>Cara pesan</h2>
      <ol>
        <li>
          <b>1. Masuk ke akun</b>
          <span>Login dulu, atau daftar jika belum punya akun.</span>
        </li>
        <li>
          <b>2. Buat pesanan</b>
          <span>Pilih layanan, isi alamat, dan tentukan waktu jemput.</span>
        </li>
        <li>
          <b>3. Kami jemput &amp; cuci</b>
          <span>Cucian ditimbang, lalu dicuci dan dilipat rapi.</span>
        </li>
        <li>
          <b>4. Kami antar</b>
          <span>Cucian wangi sampai ke pintu Anda.</span>
        </li>
      </ol>
    </section>

    <!-- Ajakan akhir -->
    <section>
      <div class="cta">
        <h2>Cucian menumpuk? Serahkan ke kami.</h2>
        <p>Buka setiap hari pukul 07.00–21.00. Kurir siap jemput hari ini.</p>
        <a class="btn" href="index.php">Masuk &amp; pesan sekarang</a>
      </div>
    </section>

    <!-- Footer -->
    <!-- Footer -->
<footer class="footer">
  <div class="footer-content">
    <div class="footer-brand">
      <h3>Bilas Laundry</h3>
      <p>Cucian beres, harimu tetap santai.</p>
    </div>

    <div class="footer-info">
      <div class="info-item">
        <span class="info-icon">📞</span>
        <div>
          <b>No. HP</b>
          <p>0821-6478-3562</p>
        </div>
      </div>

      <div class="info-item">
        <span class="info-icon">📍</span>
        <div>
          <b>Lokasi</b>
          <p>Jateng, Semarang</p>
        </div>
      </div>

      <div class="info-item">
        <span class="info-icon">🗺️</span>
        <div>
          <b>Alamat</b>
          <p>Jalan Jati Diri, No 306</p>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© 2026 Bilas Laundry. Semua hak dilindungi.</p>
  </div>
</footer>

  </div>
</body>


</html>