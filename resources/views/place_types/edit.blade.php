@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Place Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($placeType, ['route' => ['placeTypes.update', $placeType->id], 'method' => 'patch']) !!}

                        @include('place_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection