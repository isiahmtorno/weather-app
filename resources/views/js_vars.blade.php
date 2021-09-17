<script>
    window.JS_VARS = {
        base_url: '{{ URL::to('/') }}',
        settings: JSON.parse('{!! \App\JsVars::getSettings() !!}'),
    };
</script>
