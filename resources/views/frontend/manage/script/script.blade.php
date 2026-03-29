    <script src="https://handsbd.org/contents/assets/website/assets/js/jquery-4.0.0.min.js"></script>
    <script src="https://handsbd.org/contents/assets/website/assets/js/bootstrap.min.js"></script>
    <script src="https://handsbd.org/contents/assets/website/assets/js/costom.js"></script>
    <script src="{{ asset('contents/website/assets/js/mobile_sidebar.js') }}"></script>
    <script src="https://handsbd.org/contents/assets/website/assets/js/script.js"></script>




{{-- custom script add  --}}
@if(!empty($customscript['footer_script']))
<script>
{!! $customscript['footer_script'] !!}
</script>
@endif