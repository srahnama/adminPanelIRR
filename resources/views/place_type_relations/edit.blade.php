@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Place Type Relation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($placeTypeRelation, ['route' => ['placeTypeRelations.update', $placeTypeRelation->id], 'method' => 'patch']) !!}

                        @include('place_type_relations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection