@extends('layouts.app')

@section('htmlheader_title')
	Добавить препарат
@endsection


@section('content')
	<div class="container spark-screen">
	<div class="row">
	<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
	<div class="panel-heading">Добавить препарат</div>
  <div class="panel-body">
	<form class="form-horizontal" role="form"  id ="postfarmadd" enctype="multipart/form-data" method="POST" action="{{ url('/postfarmadd') }}">
  {{ csrf_field() }}


</div>

<div class="col-md-6">
    Каталог<select  name="category_id">
     <option selected disabled>Выберите категорию:</option>
     @foreach($catalogs as $catalog)
     <option value="{{ $catalog->id }}">{{ $catalog->name }}</option>
     @endforeach
    </select>  
</div>





<div class="form-group{{ $errors->has('street_1') ? ' has-error' : '' }}">
<label for="street_1" class="col-md-4 control-label">Название</label>
<div class="col-md-6">
<input id="product_name" type="text" class="form-control" name="name">
@if ($errors->has('name'))
<span class="help-block">
<strong>{{ $errors->first('name') }}</strong>
</span>
 @endif
 </div>
</div>

 

<div class="form-group{{ $errors->has('transdate') ? ' has-error' : '' }}">
<label for="transdate" class="col-md-4 control-label">Описание</label>
<div class="col-md-6">
<textarea class="form-control" rows="5" class="form-control" name="description"></textarea>
@if ($errors->has('description'))
<span class="help-block">
<strong>{{ $errors->first('description') }}</strong>
</span>
 @endif
 </div>
</div>



<div class="form-group{{ $errors->has('transdate') ? ' has-error' : '' }}">
<label for="transdate" class="col-md-4 control-label">Производитель</label>
<div class="col-md-6">
<input id="producer" type="text" class="form-control" name="producer">
@if ($errors->has('producer'))
<span class="help-block">
<strong>{{ $errors->first('producer') }}</strong>
</span>
 @endif
 </div>
</div>




 
<div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
<label for="transdate" class="col-md-4 control-label">Картинка</label>
<div class="col-md-6">
<input type="file" name="picture"> 
@if ($errors->has('picture'))
<span class="help-block">
<strong>{{ $errors->first('picture') }}</strong>
</span>
 @endif
 </div>
</div>


 
  <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
<label for="transdate" class="col-md-4 control-label">Цена</label>
<div class="col-md-6">
<input id="price" type="text" class="form-control" name="price">
@if ($errors->has('price'))
<span class="help-block">
<strong>{{ $errors->first('price') }}</strong>
</span>
 @endif
 </div>
</div>




<div class="form-group">
<div class="col-md-6 col-md-offset-4">
<button type="submit" class="btn btn-primary">
 <i class="fa fa-btn fa-user"></i> Добавить
</button>
</div>
</div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection


  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>



