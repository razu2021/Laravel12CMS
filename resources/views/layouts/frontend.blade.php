<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta_title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Default website description')">
    {{-- ============= include header section ================== --}}
        @includeIf('frontend.manage.style.style')
    {{-- ============= include header section ================== --}}
    {{-- ============= include header section ================== --}}
        @includeIf('frontend.manage.header.analitics')
    {{-- ============= include header section ================== --}}

</head>
<body>

    {{-- ============= include header section ================== --}}
        @includeIf('frontend.manage.preloader.preloader')
    {{-- ============= include header section ================== --}}
    

    {{-- ============= include header section ================== --}}
        @includeIf('frontend.manage.header.header')
        @includeIf('frontend.manageheader.mobile_sidebar')
    {{-- ============= include header section ================== --}}

    {{-- =================  all content load here -============= --}}
        @yield('web_content')
    {{-- =================  all content load here -============= --}}

    {{-- ================= include footer section ============== --}}
        @includeIf('frontend.manage.footer.footer')
    {{-- ================= include footer section ============== --}}

    {{-- ================= include footer section ============== --}}
        @includeIf('frontend.manage.script.script')
    {{-- ================= include footer section ============== --}}
    {{-- ================= include footer section ============== --}}
        @includeIf('frontend.manage.footer.footer_analitics')
    {{-- ================= include footer section ============== --}}

</body>
</html>