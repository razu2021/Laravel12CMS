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
<style>
    #preloader{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.preloader-content{
    text-align: center;
}

.preloader-logo{
    width: 80px;
    margin-bottom: 15px;
}

.preloader-text{
    font-size: 18px;
    margin-bottom: 15px;
    color: #333;
}

.loader{
    width: 40px;
    height: 40px;
    border: 4px solid #e5e5e5;
    border-top: 4px solid #0d6efd;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: auto;
}

@keyframes spin{
    100%{
        transform: rotate(360deg);
    }
}
</style>
</head>
<body>
{{$preloader}}

<div id="preloader">
    <div class="preloader-content">

        <!-- Image (optional) -->
        <img src="{{asset($preloader->thumbnail)}}" alt="Loading" class="preloader-logo">

        <!-- Text (optional) -->
        <h5 class="preloader-text">{{$preloader->title}}</h5>

        <!-- Spinner -->
        <div class="loader"></div>

    </div>
</div>
    
    {{-- ============= include header section ================== --}}
        @includeIf('frontend.manage.header.header')
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

<script>
window.addEventListener("load", function(){
    const preloader = document.getElementById("preloader");

    preloader.style.opacity = "0";

    setTimeout(function(){
        preloader.style.display = "none";
    },400);
});
</script>
</body>
</html>