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
							<div class="panel-heading">
								<h3 class="panel-title">Data Siswa</h3>
								<div class="right">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
								<button type="button" class="btn" data-toggle="modal" data-target="#importExcel"><i class="lnr lnr-arrow-down-circle"></i></button>
								</div>
							</div>
							<div class="panel-body">
								<table id="table" class="table table-hover">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Nis</th>
											<th class="text-center">Nama</th>
											<th class="text-center">Rayon</th>
											<th class="text-center">Rombel</th>
											<th class="text-center">Jenis Kelamin</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@php $i=1; @endphp
									@foreach($siswa as $s)
									<tr>
										<td class="text-center">{{ $i++ }}</td>
										<td class="text-center">{{ $s->nis }}</td>
										<td class="text-center">{{ $s->nama }}</td>
										<td class="text-center">{{ $s->rayon->rayon }}</td>
										<td class="text-center">{{ $s->rombel->rombel }}</td>
										<td class="text-center">{{ $s->jk }}</td>
										<td class="text-center"><a href="/admin/siswa/{{$s->id}}/edit" class="lnr lnr-pencil"></a><a href="/admin/siswa/{{$s->id}}/delete" class="lnr lnr-trash" style="margin-left: 5px;" onclick="return confirm('Are you sure?')"></a></td>
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

		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/admin/siswa/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
<!--input-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Isi Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="/admin/siswa/create" method="POST">
			{{csrf_field()}}
		  <div class="form-group">
		    <label for="exampleInputEmail1">NIS</label>
		    <input name="nis" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nis">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nama</label>
		    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Password</label>
		    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Pilih Rayon</label>
		    <select name="rayon" class="form-control" id="exampleFormControlSelect1">
		      @foreach($rayon as $y)
		      <option value="{{ $y->id }}">{{ $y->rayon }}</option>
		      @endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Pilih Rombel</label>
		    <select name="rombel" class="form-control" id="exampleFormControlSelect1">
		    	@foreach($rombel as $r)
		      <option value="{{ $r->id }}">{{ $r->rombel }}</option>
		        @endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
		    <select name="jk" class="form-control" id="exampleFormControlSelect1">
		      <option value="L">Laki-Laki</option>
		      <option value="P">Perempuan</option>
		    </select>
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
