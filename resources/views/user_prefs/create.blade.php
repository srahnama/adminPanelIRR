@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Pref
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'userPrefs.store']) !!}

                        @include('user_prefs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
