@extends('layouts.app')



@section('htmlheader_title')
Профиль пользователя
@endsection

@section('content')

  <div class="container spark-screen">
  <div class="row">
  <div class="col-md-10 col-md-offset-1">
  <div class="panel panel-default">
  <div class="panel-heading"><h3>Профиль пользователя</h3></div>
  <div class="panel-body">
<div class="container-fluid spark-screen">
<div class="box-header with-border">

<div class="box-tools pull-right">
 <div class="col-md-6">
 <label for="name" class="col-md-4 control-label">ФИО</label>
 <div class="col-md-6">
<h3>{{ $user->name }}</h3>
 </div>
<label for="email" class="col-md-4 control-label">E-mail</label>
 <div class="col-md-6">
<h3>{{ $user->email }}</h3>
 </div>



</div>
</div>
</div>
</div>



@endsection
