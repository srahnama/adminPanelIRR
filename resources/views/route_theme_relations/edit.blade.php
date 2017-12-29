@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Route Theme Relation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($routeThemeRelation, ['route' => ['routeThemeRelations.update', $routeThemeRelation->id], 'method' => 'patch']) !!}

                        @include('route_theme_relations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection