@extends('layouts.master')

@section('title')
	{{ $title }}
@stop

@section('breadcrumb')
	<li>{{ $title }}</li>
@stop

@section('nav')
	<li class="mt"> 
        <a class="active" href="javascript:;">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="#" class="active">
            <i class="fa fa-tasks"></i>
            <span>Promo dan Discount</span>
        </a>
    </li>

	<li class="sub-menu">
        <a href="#">
            <i class="fa fa-tasks"></i>
            <span>Tukar Poin</span>
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