<meta charset="utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>@yield('title')</title>
<!-- jQuery -->
<script src="{{asset('frontend/js/9996129-js-jquery-2.0.0.min.js')}}" type="text/javascript"></script>
<!-- Bootstrap4 files-->
<script src="{{asset('frontend/js/8725419-js-bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{asset('frontend/css/css-bootstrap.css')}}" rel="stylesheet" type="text/css" />
<!-- Font awesome 5 -->
<link href="{{asset('frontend/css/css-all.min.css')}}" type="text/css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="{{asset('frontend/css-star-rating/css/star-rating.css')}}" />
<!-- custom style -->
<link href="{{asset('frontend/css/css-ui.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend/css/css-responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<!-- custom javascript -->
<script src="{{asset('frontend/js/3802811-js-script.js')}}" type="text/javascript"></script>
<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
    // jQuery code
});
// jquery end
</script>
@stack('styles')