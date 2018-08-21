@extends('layouts.app')
@section('content')
@section('title', $farm->name)
<div class="container spark-screen">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="container">
<div class="row text-center"> 
<br>
<br>
<img src="/images/{{$farm->picture}}" class="img-rounded" alt="{{$farm->name}}"> 
<br>
<br>
<div class="row text-center"> 
<h2>Препарат: {{$farm->name}}</h2>
<br>
<br>
<h3>Производитель: <b>{{$farm->producer}} </b></h3>
<br>
<br>
<h3>Цена: <b>{{$farm->price}} рублей</b></h3>
<br>
<br>
<h3>Годен до: <b>{{$farm->due}} </b></h3>
<br>
<br>
</div>
</div>
@endsection
 
