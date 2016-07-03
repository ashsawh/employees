@extends('layouts.employees')

@section('title', 'Employees: View Profile')

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
