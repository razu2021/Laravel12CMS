@extends('layouts/frontend')
{{-- Meta Title  --}}
@section('meta_title', $childCategorys->title ?? '')
@section('meta_description', $childCategorys->description ?? '')
{{-- Meta Description  --}}
@section('web_content')
    @if(!empty($childCategorys))
    @foreach ($childCategorys->getCategorySection as $sections)
        @includeIf('frontend/components/'.$sections->section_key,['contents' => $sections->contents ])   
    @endforeach
    @endif
@endsection 
