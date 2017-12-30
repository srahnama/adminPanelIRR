@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trip Location
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tripLocation, ['route' => ['tripLocations.update', $tripLocation->id], 'method' => 'patch']) !!}

                        @include('trip_locations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection