@extends('auth.master')
@section('header')
@stop
@section('content')
  
  {!! Form::open(['url' => '/admin/brands', 'enctype' => 'multipart/form-data']) !!}
    @include('auth.partials.forms.brand')
  {!! Form::close() !!} 
@stop