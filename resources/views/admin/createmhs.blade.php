<h2> Tabel Tambah Mahasiswa <br><br></h2>
<form method="post" action="/adminmahasiswa">
@csrf
  <div class="form-group">
    <label for="nama_mhs">Nama</label>
    <input type="text" class="form-control" id="nama_mhs" placeholder="input name" name="nama">
  </div>
  <div class="form-group">
    <label for="nim_mhs">NIM</label>
    <input type="text" class="form-control" id="nim_mhs" placeholder="input nim" name="nim">
  </div>
  <div class="form-group">
    <label for="prod_mhs">Prodi</label>
    <input type="text" class="form-control" id="prodi_mhs" placeholder="input prodi" name="prodi">
  </div>
  <div class="form-group">
    <label for="fakultas_mhs">Fakultas</label>
    <input type="text" class="form-control" id="fakultas_mhs" placeholder="input fakultas" name="prodi">
  </div>
  <div class="form-group">
    <label for="dosen_walimhs">Dosen Wali</label>
    <input type="text" class="form-control" id="dosenwalimhs" placeholder="input data dosen wali" name="alamat">
  </div>
  <div class="form-group">
    <label for="fakultas">Password</label>
    <input type="text" class="form-control" id="pasword" placeholder="Masukan Password" name="fakultas">
  </div>
  <button type="submit">Add</button>
  <button type="submit"><a href="/adminmahasiswa"> Kembali </a></button>
</form>