@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Place Info
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'placeInfos.store']) !!}

                        @include('place_infos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
