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
								<h3 class="panel-title">Data Guru</h3>
								<div class="right">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-arrow-down-circle"></i></button>
								</div>
							</div>
							<div class="panel-body">
								<table id="table" class="table table-hover">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Nip</th>
											<th class="text-center">Nama</th>
											<th class="text-center">Jenis Kelamin</th>
											<th class="text-center">No HP</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@php $i=1; @endphp
									@foreach($guru as $g)
									<tr>
										<td class="text-center">{{ $i++ }}</td>
										<td class="text-center">{{ $g->nip }}</td>
										<td class="text-center">{{ $g->nama }}</td>
										<td class="text-center">{{ $g->jk }}</td>
										<td class="text-center">{{ $g->no_telp }}</td>
										<td class="text-center"><a href="/admin/guru/{{$g->id}}/edit" class="lnr lnr-pencil"></a><a href="/admin/guru/{{$g->id}}/delete" class="lnr lnr-trash" style="margin-left: 5px;" onclick="return confirm('Are you sure?')"></a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="/admin/guru/create" method="POST">
			{{csrf_field()}}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nip</label>
		    <input name="nip" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nip">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama</label>
		    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Password</label>
		    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
		    <select name="jk" class="form-control" id="exampleFormControlSelect1">
		      <option value="L">Laki-Laki</option>
		      <option value="P">Perempuan</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">No HP</label>
		    <input name="no_telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No HP">
		  </div>
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