@extends('layouts.backend.main')

@section('title', 'Blog | Blog Index' )

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Blog
            <small> Display All blog posts</small>
          </h1>
          <ol class="breadcrumb">
              <li>
               <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
              </li>
            <li> <a href="{{ url('backend/blog') }}">Blog</a></li>
            <li> <a href="{{ url('backend/blog') }}"> All Post </a> </li>
          </ol>
        </section>
    
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="pull-left">
                            <a href="{{ url('backend/blog/create') }}" class="btn btn-success"><i class="fa fa-plus"></i>Add New</a>
                        </div>
                    </div>
                  <!-- /.box-header -->
                  <div class="box-body ">
                    @if(session('message'))
                    <div class="alert alert-info">
                      {{ session ('message') }}
                    </div>
                    @endif
                    
                    @if (! $posts->count())
                    <div class="alert alert-danger">
                       <strong> No record found </strong>
                    </div>
                      @else
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <td width="80"> Action </td>
                                   <td> Title </td>
                                   <td width="120"> Author </td>
                                   <td width="150"> Category </td>
                                   <td width="170"> Date </td>
                                  
                               </tr>
                           </thead>
                           <tbody>
                               @foreach($posts as $post)

                               <tr>
                                    <td> 
                                        <a href="/backend/blog/{{$post->id}}/edit" class="btn btn-xs btn-default">
                                            <i class="fa fa-edit"></i>
                                        </a> 
                                        {{ Form::open(array('url' => 'backend/blog/' . $post->id, 'class' => 'pull-right')) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            <button class="btn btn-xs btn-danger">
                                               <i class="fa fa-times"></i>
                                           </button>
                                        {{ Form::close() }}
                                        
                                    </td>
                                    <td> {{ $post->title }} </td>
                                    <td> {{ $post->author->name }} </td>
                                    <td> {{ $post->category->title }} </td>
                                    <td>  
                                      <abbr tittle= "{{ $post->dateFormatted(true) }}"> {{ $post->dateFormatted() }} </abbr> | 
                                      
                                      {!! $post->publicationLabel() !!}
                                    </td>
                                </tr>
                               @endforeach
                              
                           </tbody>
                       </table>
                       @endif
                  </div>
                  <!-- /.box-body -->

                  <div class="box-footer clearfix">
                      <div class="pull-left">
                    {{ $posts->render() }}
                  </div>
                  <div class="pull-right">
                      
                      <small>  {{ $postCount }} {{ str_plural('Item', $postCount) }} </small>
                  </div>
                  </div>
                </div>
                <!-- /.box -->
              </div>
            </div>
          <!-- ./row -->
        </section>
        <!-- /.content -->
      </div>
@endsection

@section('script')
<script type="text/javascript">
    $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection
