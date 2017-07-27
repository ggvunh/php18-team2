@extends('auth.master')
@section('header')
@stop
@section('content')
  {!! Form::model($parameter,['url' => 'admin/parameters/'. $parameter->id, 'method' => 'put' ]) !!}
    @include('auth.partials.forms.parameter')
  {!! Form::close() !!} 
@stop