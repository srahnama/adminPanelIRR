@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Licence
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'userLicences.store']) !!}

                        @include('user_licences.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
