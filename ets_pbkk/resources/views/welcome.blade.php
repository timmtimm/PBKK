@extends('layouts.main')

@section('container')
  <h1>Evaluasi Tengah Semester - Pemrograman Berbasis Kerangka Kerja</h1>
  <br />
  <p>
    Sebuah rumah sakit memerlukan sistem pencatatan rekam medis pasien dengan ketentuan:
    <ol>
      <li>(5%) Buat project Laravel baru</li>
      <li>(5%) Pengguna harus login agar dapat mengakses riwayat rekam medis pasien</li>
      <li>(30%) Ada halaman melihat semua rekam medis, riwayat rekam medis per pasien, dan halaman rekam medis per dokter</li>
      <li>(35%) Tersedia formulir rekam medis dengan field:
            <ul>
                <li>dropdown pasien (ambil dari database)</li>
                <li>dropdown dokter (ambil dari database)</li>
                <li>field kondisi kesehatan (teks)</li>
                <li>suhu tubuh (35 C - 45.5 C)</li>
                <li>mengunggah file/gambar resep (pdf/png/jpg/jpeg)</li>
                <li>Form rekam medis tidak wajib disimpan di database (nilai +10% jika bisa menyimpan di DB)</li>
                <li>Sistem dapat memberikan flash message berhasil jika form berhasil diinputkan sesuai ketentuan (meskipun tidak tersimpan di DB).</li>      
            </ul>            
      </li>
      <li>(15%) Siapkan data pasien dan dokter di seeder (manual), sedangkan rekam medis di factories (generate dengan faker)</li>
    </ol>
  </p>

  <a href="/dashboard"><button type="button" class="btn btn-primary">Go to dashboard</button></a>
@endsection