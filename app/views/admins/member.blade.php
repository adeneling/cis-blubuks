@extends('layouts.master')

@section('title')
	{{ $title }}
@stop

@section('breadcrumb')
	<li>{{ $title }}</li>
@stop

@section('nav')
	<li class="mt"> 
        <a href="{{URL::to('/dashboard')}}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sub-menu">
        <a class ="active" href="{{URL::to('/members')}}">
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
            <i class="fa fa-desktop"></i>
            <span>Kelola Diskon</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Kelola Promo</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Kelola Reward</span>
        </a>
    </li>

    <li class="sub-menu">
        <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Kelola Keuangan</span>
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

	<h1>Kelola Member</h1>
@stop