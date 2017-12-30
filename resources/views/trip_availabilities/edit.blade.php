@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trip Availabilitie
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tripAvailabilitie, ['route' => ['tripAvailabilities.update', $tripAvailabilitie->id], 'method' => 'patch']) !!}

                        @include('trip_availabilities.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection