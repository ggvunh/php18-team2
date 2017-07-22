@extends('auth.master')
@section('header')
  <h2>Thêm Mới Sản Phẩm</h2>
@stop
@section('content')
  
  {!! Form::open(['url' => '/admin/products', 'enctype' => 'multipart/form-data']) !!}
    @include('auth.partials.forms.product')
  {!! Form::close() !!} 
@stop