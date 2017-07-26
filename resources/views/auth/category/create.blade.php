@extends('auth.master')
@section('header')
@stop
@section('content')
  
  {!! Form::open(['url' => '/admin/categories', 'enctype' => 'multipart/form-data']) !!}
    @include('auth.partials.forms.category')
  {!! Form::close() !!} 
@stop