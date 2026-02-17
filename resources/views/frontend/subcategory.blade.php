@extends('layouts/frontend')
{{-- Meta Title  --}}
@section('meta_title', $subcategorys->title ?? '')
@section('meta_description', $subcategorys->description ?? '')
{{-- Meta Description  --}}
@section('web_content')
    @if(!empty($subcategorys))
    @foreach ($subcategorys->getCategorySection as $sections)
        @includeIf('frontend/components/'.$sections->section_key,['contents' => $sections->contents ])   
    @endforeach
    @endif
@endsection