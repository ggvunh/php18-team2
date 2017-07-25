@extends('auth.master')
@section('header')
@stop
@section('content')
  
  {!! Form::model($product,['url' => 'admin/products/'. $product->id, 'method' => 'put' ]) !!}
    @include('auth.partials.forms.product')
  {!! Form::close() !!} 
@stop