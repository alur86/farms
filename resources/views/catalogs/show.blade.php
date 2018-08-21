@extends('layouts.app')
@section('content')
@section('title', $catalog->name)

<div class="container spark-screen">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="container">
<div class="row text-center">  
<h2>Категория: {{$catalog->name}}</h2>
<div class="container">
<div class="row">
<h3> <b>{{$total_farms}} </b> препаратов в данном разделе</h3>
<div class="container">
<div class="row">
<br>
@if (count($total_farms) > 0)
<br>
<br>
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
@foreach ($farms  as $farm)
<h2>Название: {{ $farm->name }}</h2>
<br>
<br>
<img src="/images/{{$farm->picture}}" class="img-rounded" alt="{{$farm->name}}"> 
<br>
<p><a href="{{ URL::to('show_farm/'.$farm->id) }}" class="btn btn-primary">>Перейти к странице препарата</a></p><br>
 {{ csrf_field() }}
<input type="hidden" name="farm_id" value="{{ $farm->id }}"/>
</form>
@endforeach
 {!! $farms->links() !!}
</div>
@else
<p>Данный раздел пока что недоступен, извините.</p>
@endif
</div>
</div>

@endsection
 

