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
								<h3 class="panel-title">Data Nilai</h3>
								<div class="right">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
								</div>
							</div>
							<div class="panel-body">
								<table id="table" class="table table-hover">
									<thead>
										<tr>
											<th class="text-center">No</th>
											<th class="text-center">Nama</th>
											<th class="text-center">Tugas</th>
											<th class="text-center">Kkm</th>
											<th class="text-center">Nilai</th>
											<th class="text-center">Aksi</th>
										</tr>
									</thead>
									<tbody>
									@php $i=1; @endphp
									@foreach($nilai as $n)
									<tr>
										<td class="text-center">{{ $i++ }}</td>
										<td class="text-center">{{ $n->nilai }}</td>
										<td class="text-center">{{ $n->thn_ajaran }}</td>
										<td class="text-center"><a href="/admin/nilai/{{$n->id}}/edit" class="lnr lnr-pencil"></a><a href="/admin/nilai/{{$n->id}}/delete" class="lnr lnr-trash" style="margin-left: 5px;" onclick="return confirm('Are you sure?')"></a></td>
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
		<form action="/admin/nilai/create" method="POST">
			{{csrf_field()}}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Rombel</label>
		    <input name="rombel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rombel">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tahun Ajaran</label>
		    <input name="thn_ajaran" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Ajaran">
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