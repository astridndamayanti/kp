@extends('layout/admin')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Mapel</h3>
						</div>
						<div class="panel-body">
	<form action="/admin/mapel/{{$mapel->id}}/update" method="POST">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Guru</label>
	    <select name="nama" class="form-control" id="exampleFormControlSelect1">
	      @foreach($guru as $g)
	      <option value="{{ $g->id }}" {{ $g->id == $mapel->guru_id ? 'selected':''}}>{{ ucfirst($g->nama) }}</option>
	      @endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Rombel</label>
	    <select name="rombel" class="form-control" id="exampleFormControlSelect1">
	    	@foreach($rombel as $r)
	      <option value="{{ $r->id }}" {{ $r->id == $mapel->rombel_id ? 'selected':''}}>{{ ucfirst($r->rombel) }}</option>
	        @endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Mapel</label>
	    <input name="mapel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mapel" value="{{$mapel->mapel}}">
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