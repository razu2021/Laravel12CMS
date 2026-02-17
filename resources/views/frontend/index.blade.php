@extends('layouts/frontend')
{{-- Meta Title  --}}
@section('meta_title', $category->title ?? '')
@section('meta_description', $category->description ?? '')
{{-- Meta Description  --}}
@section('web_content')
    @if(!empty($category))
    @foreach ($category->getCategorySection as $sections)
        @includeIf('frontend/components/'.$sections->section_key,['contents' => $sections->contents ])   
    @endforeach
    @endif
@endsection

