@extends('admin.layout')

@section('title', 'Create Users')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                        <h2>Create User</h2>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['users.store'] ]) !!}
                        @include('admin.users.form')
                        <!-- Submit Form Button -->
                        <div class="form-footer pt-5 border-top">
                            {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection