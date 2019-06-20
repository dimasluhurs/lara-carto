@extends('backpack::layout')

@section('header')

    <section class="content-header">
      <h1>
        Denpasar
      </h1>
      <ol class="breadcrumb">
        <!-- <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li> -->
      </ol>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                <iframe width="100%" 
                height="520" 
                frameborder="0" 
                src="https://dimasluhurs.carto.com/builder/3cb02b2c-e9da-4a6e-88d0-6ddfb30d21da/embed" 
                allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
        </div>
    </div>
    </div>
@endsection
						
						


