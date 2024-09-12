@extends('layouts.admin')

@section('title','Dashboard')


@section('content')
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    @foreach($data as $item)
    <div class="col">
        <div class="card radius-10 {{ $item['color'] }}">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-white">{{ $item['count'] }}</h5>
                    <div class="ms-auto">
                        <i class='bx {{ $item['icon'] }} fs-3 text-white'></i>
                    </div>
                </div>
                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex align-items-center text-white">
                    <p class="mb-0">{{ $item['title'] }}</p>

                </div>
            </div>
        </div>
    </div>
    @endforeach


</div><!--end row-->



@endsection
