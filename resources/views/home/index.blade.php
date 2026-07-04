@extends('layouts.menu')

@section('title', 'Sandoo Kitchen Digital Menu')

@section('content')
@php
    $brands = [
        ['id' => $cbite->id, 'title' => $cbite->title, 'logo' => '/image/brandLogo/cbite.png',         'alt' => 'CBITE logo'],
        ['id' => $mama->id,  'title' => $mama->title,  'logo' => '/image/brandLogo/mamafriedrice.png', 'alt' => 'Mama Fried Rice logo'],
        ['id' => $soo->id,   'title' => $soo->title,   'logo' => '/image/brandLogo/soochicken.png',    'alt' => 'Soo Chicken logo'],
        ['id' => $tori->id,  'title' => $tori->title,  'logo' => '/image/brandLogo/torilab.jpg',       'alt' => 'Tori Lab logo'],
        ['id' => $drink->id, 'title' => $drink->title, 'logo' => '/image/brandLogo/drinklogo.png',     'alt' => 'Drinks logo'],
    ];
    $sections = [
        ['brand' => $cbite],
        ['brand' => $mama],
        ['brand' => $soo],
        ['brand' => $tori],
        ['brand' => $drink],
    ];
@endphp

<div id="menu-page" class="menu-shell">
    <header class="brand-nav-wrap">
        <nav class="brand-nav" aria-label="Brand navigation">
            @foreach ($brands as $brand)
                <a class="brand-tab brand-tab--{{ $brand['id'] }}"
                   href="#brand-{{ $brand['id'] }}"
                   data-brand-target="brand-{{ $brand['id'] }}">
                    <span class="brand-mark brand-mark--sm brand-mark--{{ $brand['id'] }}">
                        <img src="{{ $brand['logo'] }}" alt="{{ $brand['alt'] }}" />
                    </span>
                    {{ $brand['title'] }}
                </a>
            @endforeach
        </nav>
    </header>

    <div class="menu-body">
        @foreach ($sections as $section)
            @include('components.brand-menu-section', [
                'brand' => $section['brand'],
            ])
        @endforeach
    </div>

    <footer class="menu-footer">
        Sandoo Kitchen &middot; Phnom Penh &middot; Allergen info available on request
    </footer>
</div>
@endsection
