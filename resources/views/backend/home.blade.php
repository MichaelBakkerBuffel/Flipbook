@extends('layouts.backend.main')

@section('content')
                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                            <h1>
                                Dasbhboard
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                            </ol>
                        </section>

                        <!-- Main content -->
                        <section class="content">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="box">
                                            <!-- /.box-header -->
                                            <div class="box-body ">
                                                        <p class="lead text-muted">Hallo {{ Auth::user()->name }}</p>

                                                        <h4>Start hier</h4>
                                                        <p><a href="{{ route('dashboard.create') }}" class="btn btn-primary">Schrijf een artikel</a> </p>
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
                    <!-- /.content-wrapper -->
                    <footer class="main-footer">
                        <div class="pull-right hidden-xs">
                            <b>Version</b> 1.0
                        </div>
                        <strong>Copyright &copy; 2017 <a href="http://www.lpwebdesign.nl">Laurens Post</a>.</strong> All rights
                        reserved.
                    </footer>

                </div>
                <!-- ./wrapper -->
@endsection
