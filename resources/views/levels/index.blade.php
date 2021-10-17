@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Levels</h1>
                </div>
                <div class="col-sm-6">
                    <a data-toggle="modal" data-target="#add-level-modal" class="btn btn-success float-right" style="margin-top: -10px,margin-bottom: 5px"><i class="fa fa-plus-circle"></i>Add New Level
                        
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')
        @include('adminlte-templates::common.errors')


        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('levels.table')
                {!! Form::open(['route' => 'levels.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('levels.fields')
                </div>

            </div>

           

            {!! Form::close() !!}

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection