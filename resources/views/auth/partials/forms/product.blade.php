@extends('auth.master')
@section('content')
<div class="box-body">
  <div class="form-group">
    <label for="name">Tên:</label>
    <input type="name" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="price">Giá:</label>
    <input type="text" class="form-control" id="price">
  </div>
  <div class="form-group">
    <label for="images">Images:</label>
    <input type="file" class="" id="file">
</div>
<div class="form-group">
    <label for="name">Active:</label>
    <input type="checkbox" name="active" checked>
  </div>
  <div class="form-group">
      <label for="sel1">Category:</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      </div>
      <div class="form-group">
      <label for="sel1">Brand:</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      </div>
  <button type="submit" class="btn btn-default">Lưu</button>
</div>
@stop