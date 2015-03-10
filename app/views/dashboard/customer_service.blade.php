@extends('layouts.master')

@section('title')
	{{ $title }}
@stop

@section('breadcrumb')
	<li>{{ $title }}</li>
@stop

@section('nav')
	<li class="mt"> 
        <a class ="active" href="javascript:;">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sub-menu">
        <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Kelola Member</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Kelola Poin</span>
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