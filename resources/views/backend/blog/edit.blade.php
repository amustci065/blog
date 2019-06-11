@extends('layouts.backend.main')

@section('title', 'Blog | Edit post' )

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blog
            <small> Edit post </small>
          </h1>
          <ol class="breadcrumb">
              <li>
               <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
              </li>
            <li> <a href="{{ url('backend/blog/index') }}">Blog</a></li>
            <li class="active"> Add new </li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-body">

                  {!! Form::model($post, [
                        'method' => 'PUT',
                        'url'    => 'backend/blog/{{$post->id}}/update',
                        'files'  =>  TRUE,
                        'id' => 'post-form'
                  ]) !!} 
                  
                  

                  @include('backend.blog.form')

                 
                        
                    {!! Form::close() !!}
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
      </div>
@endsection

@include('backend.blog.script')