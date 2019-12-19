@extends('layout.panel')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @section('title', 'Admin Panel - KHS') </title>
</head>
<body>
    @section('container')
    <div class="container">
    <script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2><b>Data Matakuliah</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addmatakuliah" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambahkan Data MK</span></a>
						<a href="#deletematakuliah" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Hapus</span></a>						
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
						</th>
						<th>No</th>
                        <th>Kode MK</th>
                        <th>Nama MK</th>
						<th>SKS</th>
                        <th>Pengampu</th>
                        <th>Semester</th>
                        
                    </tr>
                </thead>
                <tbody>
				@foreach($mk as $mkk)
                    <tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$mkk->kode_mk}}</td>
						<td>{{$mkk->nama_mk}}</td>
                        <td>{{$mkk->sks_mk}}</td>
                        <td>{{$mkk->pengampu_mk}}</td>
                        <td>{{$mkk->semester_mk}}</td>
                        <td>
                         <a href="/adminmatakuliah/{{$mkk->id_mk}}/edit" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						 <!-- <input type="button" class="btn btn-default" data-toggle="modal" data-target="editmatakuliah{{$loop->iteration}}">	 -->
							<!-- <a class="edit" data-toggle="modal" data-target="#editmatakuliah" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> -->
                         <a href="/adminmatakuliah/{{$mkk->id_mk}}/destroy" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        <!-- <form action="{{$mkk->id_mk}}" method="post">
						@method('delete')
						@csrf
						<button type="submit"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button> -->
						</form>
						</td>
                    </tr>
				@endforeach	
                                         
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

	<!-- Tambah Modal HTML -->
	<div id="addmatakuliah" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="post" action="/adminmatakuliah">
				@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Tambah Mata Kuliah</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Kode MK</label>
							<input id="kode_mk" name="kode_mk" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Nama MK</label>
							<input id="nama_mk" name="nama_mk" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>SKS</label>
							<input id="sks_mk" name="sks_mk" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Pengampu</label>
							<input id="pengampu_mk" name="pengampu_mk" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Semester</label>
							<input id="semester_mk" name="semester_mk" type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>

	
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
    </div>
@endsection
</body>
</html>