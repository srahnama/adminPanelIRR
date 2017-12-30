@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Route Todo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($routeTodo, ['route' => ['routeTodos.update', $routeTodo->id], 'method' => 'patch']) !!}

                        @include('route_todos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection