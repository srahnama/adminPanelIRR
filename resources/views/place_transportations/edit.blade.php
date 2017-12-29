@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Place Transportation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($placeTransportation, ['route' => ['placeTransportations.update', $placeTransportation->id], 'method' => 'patch']) !!}

                        @include('place_transportations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection