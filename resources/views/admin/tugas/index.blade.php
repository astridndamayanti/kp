@extends('layout/admin')

@section('content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Tugas</h3>
								<div class="right">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
								</div>
							</div>
							<div class="panel-body">
								<table id="table" class="table table-hover">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Mapel</th>
											<th class="text-center">Rombel</th>
											<th class="text-center">Judul</th>
											<th class="text-center">Catatan</th>
											<th class="text-center">File</th>
											<th class="text-center">Deadline</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@php $i=1; @endphp
									@foreach($tugas as $t)
									<tr>
										<td class="text-center">{{ $i++ }}</td>
										<td class="text-center">{{ $t->mapel->mapel }}</td>
										<td class="text-center">{{ $t->rombel->rombel }}</td>
										<td class="text-center">{{ $t->judul }}</td>
										<td class="text-center">{{ $t->catatan }}</td>
										<td class="text-center">{{ $t->file }}</td>
										<td class="text-center">{{ $t->deadline }}</td>
										<td class="text-center"><a href="/admin/tugas/{{$t->id}}/edit" class="lnr lnr-pencil"></a><a href="/admin/tugas/{{$t->id}}/delete" class="lnr lnr-trash" style="margin-left: 5px;" onclick="return confirm('Are you sure?')"></a></td>
									</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Isi Data Tugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="/admin/tugas/create" method="POST">
			{{csrf_field()}}
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Mapel</label>
		    <select name="rayon" class="form-control" id="exampleFormControlSelect1">
		      @foreach($mapel as $m)
		      <option value="{{ $m->id }}">{{ $m->mapel }}</option>
		      @endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tugas</label>
		    <input name="tugas" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tugas">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tanggal Upload</label>
		    <input name="tgl_upload" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Upload">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Deadline</label>
		    <input name="deadline" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nis">
		  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    	</form>
      </div>

    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
// $(document).ready( function () {
    $('.table').DataTable();
// } );
</script>
@stop
