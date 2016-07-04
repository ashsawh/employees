@extends('layouts.employees')

@section('title', 'Employees: View Profile')

@section('header')
    @parent
    {!! Html::script('js/bootstrap-dialog.min.js') !!}
    {!! Html::style('css/bootstrap-dialog.min.css') !!}
    {!! Html::script('js/bootstrap-datetimepicker.min.js') !!}
    {!! Html::style('css/bootstrap-datetimepicker.min.css') !!}
    {!! Html::script('js/bootstrap-select.min.js') !!}
    {!! Html::style('css/bootstrap-select.min.css') !!}
@endsection

@section('body')
    @include('partials.header')
    @parent
@endsection

@section('profile_body')
    @if($method === 'edit')
   	@include('partials.edit_profile')
    @else
	@include('partials.view_profile')
    @endif
@endsection

@section('errors')
    @include('partials.messaging')
@endsection

@section('flash')
    @include('partials.flash')
@endsection
