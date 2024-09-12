@props(['title'])

@php
    $previousUrl = url()->previous();
    $currentUrl = url()->current();
    $routeName = Route::currentRouteName();
    $segments = request()->segments();
    $previousSegment = count($segments) > 1 ? $segments[count($segments) - 2] : '';
@endphp

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">
        <h5>{{ $title }}</h5>
    </div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a>
                </li>
                @if($previousUrl !== $currentUrl)
                    <li class="breadcrumb-item">
                        <a href="{{ $previousUrl }}" class="d-flex align-items-center">
                            <i class="bx bx-chevron-left me-1"></i>
                            {{ ucfirst(str_replace('-', ' ', $previousSegment)) }}
                        </a>
                    </li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $title }}
                </li>
            </ol>
        </nav>
    </div>
    @if($previousUrl !== $currentUrl)
        <div class="ms-auto">
            <a href="{{ $previousUrl }}" class="btn btn-sm btn-primary">
                <i class="bx bx-arrow-back"></i> Back
            </a>
        </div>
    @endif
</div>
