@extends('layouts.adminlte')
@section('navbar')
@parent
@stop

@section('content')

<h2>Edit  the Account</h2>

{{ HTML::ul($errors->all()) }}

{{ Form::model($account,array('route'=>array('account.update',$account->id),'method'=>'PUT')) }}
<div class="form-group">
	{{ Form::label('id','Account ID') }}
	{{ Form::text('id',null,array('class'=>'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('account_name','Account Name') }}
	{{ Form::text('account_name',null,array('class'=>'form-control')) }}
</div>
{{ Form::submit('Update the account',array('class'=>'btn btn-primary btn-sm')) }}&nbsp
<a class="btn btn-danger btn-sm" href="{{ URL::to('account') }}">Cancel</a>
{{ Form::close() }}
@stop