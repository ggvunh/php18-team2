@extends('auth.master')
@section('header')
@stop
@section('content')
  {!! Form::model($order,['url' => 'admin/orders/'. $order->id, 'method' => 'put' ]) !!}
    @include('auth.partials.forms.order')
  {!! Form::close() !!} 
@stop