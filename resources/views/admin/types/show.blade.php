@extends('layouts.app')

@section('page-title', $type->title)

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-primary">
                        {{ $type->title }}
                    </h1>        
                </div>
            </div>
        </div>
    </div>
@endsection
