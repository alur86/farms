@extends('layouts.app')

@section('htmlheader_title')
	Редактирование профиля пользователя
@endsection


@section('content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Обновить профиль пользователя:</div>

					<div class="panel-body">
					 
                 <form  action="/update" method="POST">
                <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{ $errors->has('name') ? ' has-error' : '' }}
                 Name:
                <input id="name" type="text" name="name" value="{{ $user->name }}">
                @if ($errors->has('name'))
                 <strong>{{ $errors->first('name') }}</strong>
                 @endif
                {{ $errors->has('email') ? ' has-error' : '' }}
                E-Mail:
                 <input id="email" type="email"  name="email" value="{{ $user->email }}">
                  @if ($errors->has('email'))
                  <strong>{{ $errors->first('email') }}</strong>      
                  @endif
                  <br>

                <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
                </div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection