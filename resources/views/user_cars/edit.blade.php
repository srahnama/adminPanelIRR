@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Car
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($userCar, ['route' => ['userCars.update', $userCar->id], 'method' => 'patch']) !!}

                        @include('user_cars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection