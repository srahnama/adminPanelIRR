@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trip Inclusion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tripInclusion, ['route' => ['tripInclusions.update', $tripInclusion->id], 'method' => 'patch']) !!}

                        @include('trip_inclusions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection