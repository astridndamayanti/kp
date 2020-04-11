@extends('layout/admin')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Guru</h3>
						</div>
						<div class="panel-body">
	<form action="/admin/guru/{{$guru->id}}/update" method="POST">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Nip</label>
	    <input name="nip" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nip" value="{{$guru->nip}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Nama</label>
	    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$guru->nama}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
	    <select name="jk" class="form-control" id="exampleFormControlSelect1">
	      <option value="L" @if($guru->jk == 'L') selected @endif>Laki-Laki</option>
	      <option value="P" @if($guru->jk == 'P') selected @endif>Perempuan</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">No Hp</label>
	    <input name="no_telp" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Hp" value="{{$guru->no_telp}}">
	  </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/admin/guru" class="btn btn-primary">Cancel</a>
	</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
@stop