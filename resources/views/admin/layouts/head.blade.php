<base href="">
<meta charset="utf-8" />
<title>ECOM</title>
<meta name="description" content="Latest updates and statistic charts">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!--begin::Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

<!--end::Fonts -->

<!--begin::Page Vendors Styles(used by this page) -->
<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

<!--end::Page Vendors Styles -->

<!--begin::Global Theme Styles(used by all pages) -->
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

<!--end::Global Theme Styles -->

<!--begin::Layout Skins(used by all pages) -->
<link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="assets/css/skins/brand/navy.css" rel="stylesheet" type="text/css" />
<link href="assets/css/skins/aside/navy.css" rel="stylesheet" type="text/css" />

<!--end::Layout Skins -->
<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
<link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@5.12.0/dist/styles.css"/>
<link href="{{ asset('/assets/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://transloadit.edgly.net/releases/uppy/v1.3.0/uppy.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css" rel="stylesheet">

<style>

	/* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	/* Firefox */
	input[type=number] {
		-moz-appearance: textfield;
	}

	.select2-selection__rendered {
		line-height: 32px !important;
	}

	.select2-selection {
		height: 34px !important;
	}
	.select2-selection__arrow {
		height: 34px !important;
	}
	.select2-container *:focus {
		outline: none;
	}

select[readonly].select2-hidden-accessible + .select2-container {
						pointer-events: none;
						touch-action: none;
					}

					select[readonly].select2-hidden-accessible + .select2-container .select2-selection {
						background: #eee;
						box-shadow: none;
					}

					select[readonly].select2-hidden-accessible + .select2-container .select2-selection__arrow, select[readonly].select2-hidden-accessible + .select2-container .select2-selection__clear {
						display: none;
					}
					._referenceloancontent{
						border: 1px solid #eee;
						margin-top: 4px;
						padding: 8px 7px;
						border-radius: 3px;
					}
					._referenceloancontent ._referenceloancb {
						padding-left: 24px;
					}
					._referenceloancontent ._referenceloancb span{
						top: -2px;
					}
					.lock_content {
						pointer-events:none;
						-webkit-font-smoothing: antialiased;
						display: inline-block;
						font-weight:900;
						color:#535353;
						position:relative;
					}

					.lock_content:before{
						background-image: url('{{asset('dashboard/assets/media/icons/svg/Lock.svg')}}');
						background-size: 70% 70%;
						background-repeat: no-repeat;
						background-position: center center;
						background-color: rgba(255,255,255,.9);
						content: "";
						position: absolute;
						top: 0;
						width: 100%;
						height: 100%;
						left: 0;
						display: flex;
						justify-content: center;
						align-items: center;
						font-size: 50px;
					}
					/* header styling start here */
					.head_admin_name .kt-header__topbar-wrapper
					{
						width: 100%;
						justify-content: flex-end;
					}
					.head_search_top
					{
						align-items: center !important;
						justify-content: center;
					}
					.head_search_top .head_parent
					{
						width: 75%;
					}
					.head_search_top .head_parent
					{
						position: relative;
					}
.head_search_top .has-search .form-control {
    padding-left: 2.375rem;
}

.head_search_top .has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
	left: 0;
    top: 7px;
}
</style>
