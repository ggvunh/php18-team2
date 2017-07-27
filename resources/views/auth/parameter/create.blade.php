@extends('auth.master')
@section('header')
@stop
@section('content')
  
  {!! Form::open(['url' => '/admin/parameters', 'enctype' => 'multipart/form-data']) !!}
    @include('auth.partials.forms.parameter')
  {!! Form::close() !!} 
@stop