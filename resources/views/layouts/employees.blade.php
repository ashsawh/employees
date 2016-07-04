@extends('layouts.master')

@section('title', 'Employees: Profile')

@section('body')
    @yield('flash')
    <div class="container">
        <div class="row">
            <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                <A href="edit.html" >Edit Profile</A>

                <A href="edit.html" >Logout</A>
                <br>
                <p class=" text-info">May 05,2014,03:00 pm </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $employee->name }}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                            <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                              <dl>
                                <dt>DEPARTMENT:</dt>
                                <dd>Administrator</dd>
                                <dt>HIRE DATE</dt>
                                <dd>11/12/2013</dd>
                                <dt>DATE OF BIRTH</dt>
                                   <dd>11/12/2013</dd>
                                <dt>GENDER</dt>
                                <dd>Male</dd>
                              </dl>
                            </div>-->
                            <div class=" col-md-9 col-lg-9 ">
                                @yield('profile_body')
                            </div>
                        </div>
                    </div>
                        @yield('profile_footer')
                </div>
            </div>
        </div>
    </div>
@endsection
