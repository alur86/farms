
@extends ('layouts.app')
@section ('content')
@section('title', ' Каталог препаратов ')


  <div class="container spark-screen">
  <div class="row">
  <div class="col-md-10 col-md-offset-1">
  <div class="panel panel-default">
  <div class="panel-heading">Каталог препаратов<h3></div>
  <div class="panel-body">
 @foreach ($catalogs as $cat)
 <h3>
 <a href="{{ URL::to('show/'.$cat->id) }}"> {{$cat->name}} </a></h3>
@endforeach
 </div>
 </div>
 </div>
 </div>
 </div>



@stop
