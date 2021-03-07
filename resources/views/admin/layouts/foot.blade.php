<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "metal": "#c4c5d6",
                "light": "#ffffff",
                "accent": "#00c5dc",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995",
                "focus": "#9816f4"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>
<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

<script src="https://unpkg.com/popper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="{{ asset('/assets/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>







<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>
<link href="https://transloadit.edgly.net/releases/uppy/v1.3.0/uppy.min.css" rel="stylesheet">
<script src="https://transloadit.edgly.net/releases/uppy/v1.3.0/uppy.min.js"></script>
<script src="{{ asset('js/papaparse.js') }}" type="text/javascript"></script>

{{-- uppy --}}
<script>
    // var uppy = Uppy.Core({
    //     id: 'uppy',
    //     debug: true,
    //     autoProceed: false,
    //     allowMultipleUploads: false,
    //     restrictions: {
    //         allowedFileTypes: ['.csv']
    //     }
    // });
    // uppy.use(Uppy.DragDrop, {
    //     target: '.UppyDragDrop',
    // });
    // uppy.on('restriction-failed', (file, error) => {
    //     alert(error);
    // }).on('file-added', (file) => {
    //     console.log(file);
    //     var _fileName = file.name;
    //     $('.uppy_result').html('<span>' + _fileName + '</span>');
    // });
    $('.product_add_input_file').on('click',function(){
        $(".product_file_input").click();
    });
    $('.product_file_input').change(function() {
        $('.product_input_file_name').text($('.product_file_input')[0].files[0].name);
    });
    $('.bk-select2').each(function(){
        if(!$(this).hasClass("select2-hidden-accessible")){
            $(this).select2({
                placeholder: "Select an option",
                width:'100%'    
            });
        }
    })
</script>