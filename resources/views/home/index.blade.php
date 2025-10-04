@extends('layouts.home')

@section('content')
    <div class="container-lg">
        <div class="h3 fw-bold text-primary mt-5">
            Categories
        </div>
        <div class="row row-cols-6 g-3 mt-2">
            @foreach ($cities as $city)
                <div class="col">
                    <div class="card p-2">
                        <div class="h4">{{ $city->name }}
                            <span class="btn btn-outline-primary small">{{ $city->hotels_count }}</span>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection