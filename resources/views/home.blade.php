@extends('layouts.app')

@section('content')

@if (count($sets) > 0)

@foreach ( $sets as $set)

@switch($set->name)


@case('Герой')
@php
$set = $sets[0]->toArray();
//dd($set);
@endphp
<x-hero :set="$set" />
@break


@case(2)
<x-stats />
@break

@case(3)
<x-services />
@break

@case(4)
<x-testimonials />
@break

<!-- appointment -->
{{--
<x-appointment /> --}}

@case(5)
<x-team />
@break

@case(6)
<x-faq />
@break

<!-- departments -->
{{--
<x-departments /> --}}

<!-- blog -->
{{--
<x-blog /> --}}

@case(7)
<x-brand />
@break

<!-- newsletter -->
{{--
<x-newsletter /> --}}

@default
Default case...
@endswitch

@endforeach

@endif

@endsection