{{--{{ dd($recipes) }}--}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Recipes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You reached the show recipes page') }}

                    <ul>
                        @if($recipe)
                            <h2>{{ $recipe->name }}</h2>
                            <p>Prep time: {{ $recipe->prep_in_minutes }} minutes</p>
                            <p>Instructions: {{ $recipe->instruction }}</p>
                        @else
                            <p>Recipe not found</p>
                        @endif

                        <p>
                            <a href="{{ route('recipes.index') }}" >Back to recipes list</a>
                        </p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
