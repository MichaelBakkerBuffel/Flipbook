@extends('layouts.backend.main')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Categorieen
          <small>Bekijk alle categorieen</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('categories.index') }}">Categorieen</a></li>
          <li class="active">Alle categorieen</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <a href="{{ route('categories.create') }}" class="btn btn-success">Nieuwe Categorie</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
                    @if(session('message'))
                        <div class="alert alert-info">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if (! $categories->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td width="80">Action</td>
                                    <td>Naam Categorie</td>
                                    <td width="120">Post Count</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)

                                    <tr>
                                        <td>
                                            <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-xs btn-default">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('categories.destroy', $categorie->id) }}" class="btn btn-xs btn-danger">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->categories->count() }}</td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="pull-left">
                        {{ $categories->appends( Request::query() )->render() }}
                    </div>
                    <div class="pull-right">
                        <small>{{ $categoriesCount }} {{ str_plural('Item', $categoriesCount) }}</small>
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
