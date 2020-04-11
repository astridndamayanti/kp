@extends('layout/admin')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Rombel</h3>
						</div>
						<div class="panel-body">
	<form action="/admin/rombel/{{$rombel->id}}/update" method="POST">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Rombel</label>
	    <input name="rombel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rombel" value="{{$rombel->rombel}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Tahun Ajaran</label>
	    <input name="thn_ajaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Ajaran" value="{{$rombel->thn_ajaran}}">
	  </div>
    <button type="submit" class="btn btn-primary">Update</button>
	</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
@stop