@extends('layout/admin')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Edit Users</h3>
						</div>t 
						<div class="panel-body">
	<form action="/admin/user/{{$user->id}}/update" method="POST">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Role</label>
	    <input name="role" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Role" value="{{$user->role}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" value="{{$user->name}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$user->email}}">
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