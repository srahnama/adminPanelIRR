@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trip Theme Relation
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('trip_theme_relations.show_fields')
                    <a href="{!! route('tripThemeRelations.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection