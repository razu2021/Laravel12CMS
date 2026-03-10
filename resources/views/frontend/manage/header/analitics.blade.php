<h1>{{$analitics}}</h1>
@if ($analitics->isNotEmpty())

{{-- ========== get specific data form cache ====== --}}
@php
    $gtm_id = $analitics->where('key','google_tag_manager')->value('value') ?? null ;
    $analitics_id = $analitics->where('key','google_analytics_id')->value('value') ?? null ;
@endphp

{{-- ======== Start google tag manager ======== --}}
@if ($gtm_id)
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','{{$gtm_id}}');</script>
@endif
{{-- ======= end google tag manager ====== --}}


{{-- Google tag (gtag.js)--}}
@if ($analitics_id)
<script async src="https://www.googletagmanager.com/gtag/js?id={{$analitics_id}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{{$analitics_id}}');
</script>
@endif
{{-- end  Google tag (gtag.js)--}}








@endif




