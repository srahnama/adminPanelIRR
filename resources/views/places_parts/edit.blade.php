@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Places Part
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($placesPart, ['route' => ['placesParts.update', $placesPart->id], 'method' => 'patch']) !!}

                        @include('places_parts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection