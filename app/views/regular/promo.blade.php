@extends('layouts.master')

@section('title')
	{{ $title }}
@stop

@section('breadcrumb')
	<li>{{ $title }}</li>
@stop

@section('total_point')
    <h5 class="centered"> Total Point : </h5>
@stop

@section('nav')
	<li class="mt"> 
        <a href="{{URL::to('/dashboard')}}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sub-menu">
        <a  href="#">
            <i class="fa fa-tasks"></i>
            <span>Tukar Poin</span>
        </a>
    </li>

    <li class="sub-menu">
        <a class="active" href="{{URL::to('/promo')}}">
            <i class="fa fa-tasks"></i>
            <span>Promo dan Discount</span>
        </a>
    </li>

    

    <li class="sub-menu">
        <a href="#">
            <i class="fa fa-cogs"></i>
            <span>History Penukaran</span>
        </a>
    </li>
    
@stop

@section('content')

	WAK WAW
@stop