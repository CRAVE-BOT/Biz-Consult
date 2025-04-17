@php
    $dir=LaravelLocalization::getCurrentLocale()=='ar' ? 'Admin-Ar': 'Admin'
@endphp
<script src=" {{asset($dir)}}/js/jquery.min.js"></script>
<script src=" {{asset($dir)}}/js/popper.min.js"></script>
<script src=" {{asset($dir)}}/js/moment.min.js"></script>
<script src=" {{asset($dir)}}/js/bootstrap.min.js"></script>
<script src=" {{asset($dir)}}/js/simplebar.min.js"></script>
<script src=' {{asset($dir)}}/js/daterangepicker.js'></script>
<script src=' {{asset($dir)}}/js/jquery.stickOnScroll.js'></script>
<script src=" {{asset($dir)}}/js/tinycolor-min.js"></script>
<script src=" {{asset($dir)}}/js/config.js"></script>
<script src=" {{asset($dir)}}/js/d3.min.js"></script>
<script src=" {{asset($dir)}}/js/topojson.min.js"></script>
<script src=" {{asset($dir)}}/js/datamaps.all.min.js"></script>
<script src=" {{asset($dir)}}/js/datamaps-zoomto.js"></script>
<script src=" {{asset($dir)}}/js/datamaps.custom.js"></script>
<script src=" {{asset($dir)}}/js/Chart.min.js"></script>
<script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
</script>
<script src=" {{asset($dir)}}/js/gauge.min.js"></script>
<script src=" {{asset($dir)}}/js/jquery.sparkline.min.js"></script>
<script src=" {{asset($dir)}}/js/apexcharts.min.js"></script>
<script src=" {{asset($dir)}}/js/apexcharts.custom.js"></script>
<script src=' {{asset($dir)}}/js/jquery.mask.min.js'></script>
<script src=' {{asset($dir)}}/js/select2.min.js'></script>
<script src=' {{asset($dir)}}/js/jquery.steps.min.js'></script>
<script src= ' {{asset($dir)}}/js/jquery.validate.min.js'></script>
<script src=' {{asset($dir)}}/js/jquery.timepicker.js'></script>
<script src=' {{asset($dir)}}/js/dropzone.min.js'></script>
<script src=' {{asset($dir)}}/js/uppy.min.js'></script>
<script src=' {{asset($dir)}}/js/quill.min.js'></script>
<script src=" {{asset($dir)}}/js/apps.js"></script>

