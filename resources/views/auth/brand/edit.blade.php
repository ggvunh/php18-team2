@extends('auth.master')
@section('header')
@stop
@section('content')
  
  {!! Form::model($brand,['url' => 'admin/brands/'. $brand->id, 'method' => 'put' ]) !!}
    @include('auth.partials.forms.brand')
  {!! Form::close() !!} 
@stop