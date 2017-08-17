@extends('auth.master');
@section('content');
<div class="col-xs-12">
	<div class="box">
		<div class="box-header">
			<h3>Phân Quyền User</h3>
		</div>
		<div class="box-body">
			<form action="{{ url('admin/users/'. $user->id .'/phan-quyen')}}" method="POST" class="form-group">
			{{ csrf_field() }}
				<label for="quyen"> Phân Quyền</label>
				<select name="quyen" id="quyen" class="form-control">
					<option value="0">Khách Hàng</option>
					<option value="1">Quản Lý</option>
				</select>
				<button type="submit" class="btn btn-primary" style="margin-top: 5px"> Lưu</button>
			</form>
		</div>
	</div>
</div>
	
@stop