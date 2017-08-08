<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Ion.RangeSlider - test</title>
    <link href="{{ asset('ion/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('ion/css/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('ion/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">

    <script src="{{asset('ion/js/vendor/jquery-1.12.3.min.js')}}"></script>
    <script src="{{ asset('ion/js/ion-rangeSlider/ion.rangeSlider.js') }}"></script>
    <script>

    $(function () {
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 5000,
            from: 1000,
            to: 4000,
            type: 'double',
            step: 1,
            prefix: "$",
            grid: true
        });

    });
    </script>
</head>
<body>


<!-- Page contents -->
<div style="position: relative; padding: 200px;">

    <div>
        <input type="text" id="range" value="" name="range" />
    </div>

</div>




<!-- All JS -->





</body>
</html>
