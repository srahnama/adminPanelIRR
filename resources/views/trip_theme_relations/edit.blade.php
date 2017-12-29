@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trip Theme Relation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tripThemeRelation, ['route' => ['tripThemeRelations.update', $tripThemeRelation->id], 'method' => 'patch']) !!}

                        @include('trip_theme_relations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection