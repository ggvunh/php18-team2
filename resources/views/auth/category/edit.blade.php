@extends('auth.master')
@section('header')
@stop
@section('content')
  
  {!! Form::model($category,['url' => 'admin/categories/'. $category->id, 'method' => 'put' ]) !!}
    @include('auth.partials.forms.category')
  {!! Form::close() !!} 
@stop