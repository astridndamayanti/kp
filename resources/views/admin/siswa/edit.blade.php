@extends('layout/admin')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Siswa</h3>
						</div>
						<div class="panel-body">
	<form action="/admin/siswa/{{$siswa->id}}/update" method="POST">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleInputEmail1">NIS</label>
	    <input name="nis" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nis" value="{{$siswa->nis}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Pilih Rayon</label>
	    <select name="rayon" class="form-control" id="exampleFormControlSelect1">
	      @foreach($rayon as $y)
	      <option value="{{ $y->id }}" {{ $y->id == $siswa->rayon_id ? 'selected':''}}>{{ ucfirst($y->rayon) }}</option>
	      @endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Pilih Rombel</label>
	    <select name="rombel" class="form-control" id="exampleFormControlSelect1">
	    	@foreach($rombel as $r)
	      <option value="{{ $r->id }}" {{ $r->id == $siswa->rombel_id ? 'selected':''}}>{{ ucfirst($r->rombel) }}</option>
	        @endforeach
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
	    <select name="jk" class="form-control" id="exampleFormControlSelect1">
	      <option value="L" @if($siswa->jk == 'L') selected @endif>Laki-Laki</option>
	      <option value="P" @if($siswa->jk == 'P') selected @endif>Perempuan</option>
	    </select>
	  </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="/admin/siswa" class="btn btn-primary">Cancel</a>
	</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
@stop