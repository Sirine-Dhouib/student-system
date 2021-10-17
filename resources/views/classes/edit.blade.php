@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Class</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($classes, ['route' => ['classes.update', $classes->class_id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    <!-- Class Name Field -->
                     <div class="form-group col-sm-6">
                          {!! Form::label('class_name', 'Class Name:') !!}
                           {!! Form::text('class_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                       </div>

                      <!-- Class Code Field -->
                     <div class="form-group col-sm-6">
                      {!! Form::label('class_code', 'Class Code:') !!}
                       {!! Form::text('class_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                       </div>

                          
                           <div class="modal-footer">
                                {!!Form::submit('Update Class' , ['class' => 'btn btn-info']) !!}
                        </div>
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
