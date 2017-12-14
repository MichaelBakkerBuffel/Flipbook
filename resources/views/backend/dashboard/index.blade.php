@extends('layouts.backend.main')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Artikelen
          <small>Bekijk alle artikelen</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('overview.index') }}">Artikelen</a></li>
          <li class="active">Alle artikelen</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <a href="{{ route('overview.create') }}" class="btn btn-success">Nieuw artikel</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
                    @if(session('message'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if (! $posts->count())
                        <div class="alert alert-danger">
                            <strong>Geen artikelen gevonden</strong>
                        </div>
                    @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td width="80">Action</td>
                                    <td>Title</td>
                                    <td width="120">Author</td>
                                    <td width="150">Category</td>
                                    <td width="170">Date</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)

                                    <tr>
                                        <td>
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['overview.destroy', $post->id], 'onsubmit' => 'return confirm("Klik op OK om het artikel te verwijderen!")']) !!}
                                            <a href="{{ route('overview.edit', $post->id) }}" class="btn btn-xs btn-default">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button type="submit" class="btn btn-xs btn-danger">
                                                <i class="fa fa-times"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->author->name }}</td>
                                        <td>{{ $post->category->title }}</td>
                                        <td>{{ $post->created_at }}</td>
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
                        <small>{{ $postCount }} {{ str_plural('Item', $postCount) }}</small>
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
