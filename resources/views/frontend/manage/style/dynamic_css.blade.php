{{-- =========== custome css load here ====== --}}
@extends('layouts/frontend')
@if($customcss->isNotEmpty())
@push('custom_css')
<style>
@foreach ($customcss as $css)
{!! $css->custome_css !!}
@endforeach
</style>
@endpush
@endif