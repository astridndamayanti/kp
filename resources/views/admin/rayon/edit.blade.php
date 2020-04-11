@extends('layout/admin')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Rayon</h3>
						</div>
						<div class="panel-body">
	<form action="/admin/rayon/{{$rayon->id}}/update" method="POST">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Rayon</label>
	    <input name="rayon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rayon" value="{{$rayon->rayon}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Pembimbing</label>
	    <input name="pembimbing" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pembimbing" value="{{$rayon->pembimbing}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Tahun Ajaran</label>
	    <input name="thn_ajaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Ajaran" value="{{$rayon->thn_ajaran}}">
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