@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Place Info
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($placeInfo, ['route' => ['placeInfos.update', $placeInfo->id], 'method' => 'patch']) !!}

                        @include('place_infos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection