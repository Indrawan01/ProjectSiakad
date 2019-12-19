@extends('layout.style');
<h2> Edit Data MK <br><br></h2>
<form action="/adminmatakuliah/{{$mkk->id_mk}}/update" method="post">
@csrf
            <div class="form-group">
						<label>Kode MK</label>
							<input id="kode_mk" name="kode_mk" type="text" class="form-control"  value="{{$mkk->kode_mk}}" required>
						</div>
						<div class="form-group">
							<label>Nama MK</label>
							<input id="nama_mk" name="nama_mk" type="text" class="form-control" value="{{$mkk->nama_mk}}" required>
						</div>
						<div class="form-group">
							<label>SKS</label>
							<input id="sks_mk" name="sks_mk" type="text" class="form-control" value="{{$mkk->sks_mk}}" required>
						</div>
						<div class="form-group">
							<label>Pengampu</label>
							<input id="pengampu_mk" name="pengampu_mk" type="text" class="form-control" value="{{$mkk->pengampu_mk}}" required>
						</div>
						<div class="form-group">
							<label>Semester</label>
							<input id="semester_mk" name="semester_mk" type="text" class="form-control" value="{{$mkk->semester_mk}}" required>
						</div>
						<button type="submit" class="btn btn-warning">Update</button>
</form>