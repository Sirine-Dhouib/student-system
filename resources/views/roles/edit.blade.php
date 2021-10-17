@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1><i class="fa fa-registered">Roles</i> </h1>
                </div>
            </div>
        </div>
    </section>


    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($roles, ['route' => ['roles.update', $roles->role_id], 'method' => 'patch']) !!}


                 <!-- Name Field -->
                <div class="form-group col-md-6">
                      {!! Form::label('name', 'Name:') !!}
                      {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>
                <!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role Id:') !!}
    {!! Form::number('role_id', null, ['class' => 'form-control']) !!}
</div>

                <div >
                       {!! Form::submit(' Update Role ', ['class' => 'btn btn-info']) !!}
                </div>



           {!! Form::close() !!}

        </div>
    </div>
@endsection
