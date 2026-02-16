@extends('layouts/frontend')
@section('web_content')



    @if(!empty($subcategorys))
    @foreach ($subcategorys->getCategorySection as $sections)
        @includeIf('frontend/components/'.$sections->section_key,['contents' => $sections->contents ])   
    @endforeach
    @endif
@endsection