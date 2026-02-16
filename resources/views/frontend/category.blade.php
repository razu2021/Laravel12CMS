@extends('layouts/frontend')
@section('web_content')
    @if(!empty($category))

        @foreach ($category->getCategorySection as $sections)
            @includeIf('frontend/components/'.$sections->section_key,['contents' => $sections->contents ])   
            {{-- component loaded --}}
        @endforeach

    @endif
@endsection