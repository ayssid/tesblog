@extends('layouts.user')

@section('main')
<h1>Edit User</h1>
{{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id))) }}
<ul>
    <li>
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name') }}
    </li>
    <li>
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username') }}
    </li>
    <li>
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password') }}
    </li>
    <li>
        {{ Form::label('password', 'Confirm Password:') }}
        {{ Form::password('password_confirmation') }}
    </li>
    <li>
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email') }}
    </li>
    <li>
        {{ Form::label('phone', 'Phone:') }}
        {{ Form::text('phone') }}
    </li>
    <li>
        {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
        {{ link_to_route('users') }}
    </li>
</ul>
{{ Form::close() }}
@stop()