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
<link
rel="stylesheet"
href="https://unpkg.com/@shopify/polaris@5.12.0/dist/styles.css"
/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://transloadit.edgly.net/releases/uppy/v1.3.0/uppy.min.css" rel="stylesheet">

{{-- Product --}}
<style type="text/css">
    .product_container
    {
    background-color: #f4f4f4;
    }
    .proudct_heading
    {
    font-size: 20px;
    margin-bottom: 40px;
    display: flex;
    align-items: center;
    font-weight: bold;
    }
    .proudct_heading svg
    {
    width: 46px;
    height: 32px;
    fill: black;
    border: 1px solid #000;
    padding: 5px 11px;
    border-radius: 4px;
    margin-right: 18px;
    cursor: pointer;
    }
    .proudct_heading svg path
    {
    fill: #000;
    }
    .prdt_item {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
    }
    .prdct_dec_scnd svg
    {
    width: 75px;
    height: auto;
    }
    .prdct_dec_scnd .upld_btn
    {
    margin-top: 0px;
    }
    .prdct_dec_scnd .upld_btn .Polaris-DropZone-FileUpload__Button
    {
    border: 1px solid #000;
    background: unset !important;
    color: #000;
    font-weight: bold;
    padding: 10px 10px;
    min-height: 27px;
    height: 27px; 
    }
    .prdct_scnd_inner
    {
    background-color: #fff;
    padding: 45px 18px;
    padding-top: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    }
    .prdct_media
    {
    padding: 0px;
    padding-bottom: 15px;
    }
    .prdt_item label , .prdt_item3 label
    {
    margin-bottom: 0px;
    }
    .prdt_item3 {
    margin-bottom: 15px;
    display: flex;
    }
    .prdt_item3 .Polaris-Label__Text , .product_container .Polaris-Labelled__LabelWrapper .Polaris-Label__Text
    {
    margin-bottom: 0;
    }
    .prdouct__variants
    {
        margin-bottom: 25px;
      margin-top: 25px;
    }
    .prdct_variant .prdct_color , .prdct_variant .prdct_size
    {
        color: #a0a1e5;
      padding: 0px;
      font-weight: bold;
    }
    .prdct_variant .prdct_size
    {
    text-align: right;
    }
    .prdct_hr
    {
    margin-top: 35px;
    margin-bottom: 30px;
    border: 0;
    border-top: 1px solid #d2d0d0;
    }
    .prdt_item4 , .prdt_item5
    {
    margin-bottom: 15px;
    }
    .btn--location
    { 
    text-align: right;
    padding: 1.2rem 2rem;
    }
    .prdt_item .form-control , .prdt_item5 .form-control
    {
    color: #999898;
    }
    .prodct_btns
    {
    text-align: right;
    margin-top: 20px;
    }
    .product_prfit_margin
    {
        margin-top: 20px;
    }
    .product_prfit_margin div
    {
    padding: 0px;
    font-weight:bold;
    }
    .prodct_weight
    {
        display: flex;
    }
    .prodct_weight .form-control
    {
    width: 83px;
        min-height: 36px;
        border-left: 0px;
        border-radius: 0px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
            font-weight: bold;
    }
    .prodct_weight .Polaris-Connected
    {
          width: 100%;
    }
    .prodct_weight .Polaris-TextField__Backdrop
    {
         border-top-left-radius: 4px !important;
        border-bottom-left-radius: 4px !important;
        border-radius: 0px;
    }
    .prdct_discard
    {
    border: 1px solid #000;
    background: transparent;
    color: #000;
    font-weight: bold;
    min-height: 20px;
    height: 30px;
    padding: 12px;
    margin-right: 45px;
    }
    .prdct_discard:hover
    {
    border: 1px solid #000;
    background: transparent;
    }
    .prdct_discard .Polaris-Button__Text
    {
    font-weight: bold;
      letter-spacing: -0.7px;
    }
    .prdct_save
    {
    background: green;
    color: #fff;
    font-weight: bold;
    min-height: 20px;
    height: 30px;
    padding: 12px;
    border: 1px solid green;
    }
    .prdct_save:hover
    {
    background: green;
      border-color: green;
    }
    </style>
{{-- End Product --}}

{{-- Order --}}

<style type="text/css">
    .orderpage_heading
    {
      display: flex;
      align-items: center;
          margin-bottom: 20px;
    }
    .orderpage_innerheading svg {
      width: 46px;
      height: 32px;
      fill: black;
      border: 1px solid #000;
      padding: 5px 11px;
      border-radius: 4px;
      margin-right: 18px;
      cursor: pointer;
    }
    .orderpage_innerheading .ordertext_heading
    {
      display: flex;
      align-items: center;
    }
    .orderpage_btns
    {
    text-align: right;
    }
    .orderpage_discard {
      border: 1px solid #000;
      background: transparent;
      color: #000;
      font-weight: bold;
      min-height: 20px;
      height: 30px;
      padding: 12px;
      margin-right: 20px;
    }
    .orderpage_save {
      background: green;
      color: #fff;
      font-weight: bold;
      min-height: 20px;
      height: 30px;
      padding: 12px;
      border: 1px solid green;
    }
    .orderpage_details
    {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 20px;
            font-weight: bold;
        font-size: 15px;
    }
    .orderpage_orderr
    {
      padding: 0px;
    }
    .orderpage_orderr_add
    {
      text-align: right;
          color: #a0a1e5;
    }
    .orderpage_create_customer
    {
    
    }
    .orderpage_rightsection .Polaris-Filters
    {
      display: flex;
    }
    .orderpage_rightsection .Polaris-Filters-ConnectedFilterControl__Wrapper
    {
          flex-grow: 1;
              margin-right: 20px;
    }
    .orderpage_prices span , .orderpage_total_prices span
    {
        display: block;
      margin-bottom: 23px;
      text-align: right;
    }
    .orderpage_prices span:first-child , .orderpage_prices span:nth-of-type(4) , .orderpage_prices span:nth-of-type(5)
    {
        color: #a0a1e5;
    }
    .orderpage_invoice_main , .orderpage_invoice_mian
    {
          border-top: 1px solid #ddd;
        padding: 35px 0px;
    }
    .orderpage_invoice
    {
          display: flex;
        align-items: center;
            font-weight: bold;
                padding: 0px;
    }
    .orderpage_invoice svg
    {
        width: 34px;
      margin-right: 30px;
    }
    
    .orderpage_email_invoice_btn
    {
      padding: 0px;
          text-align: right;
    }
    .orderpage_btns_grp
    {
          text-align: right;
          padding: 0px;
    }
    .orderpage_btns_grp button:nth-of-type(2)
    {
        margin: 0px 15px;
    }
    .orderpage_create_a_customer
    {
         display: inline-block;
        width: 100%;
        padding: 30px 5px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 30px;
    }
    .orderpage_rightsection
    {
          padding-left: 0px;
        padding-right: 0px;
            margin-top: 30px;
    }
    .orderpage_rightsection .Polaris-Button__Content
    {
          font-weight: bold;
    }
    .orderpage_find_or_create_a_customer
    {
          margin-bottom: 20px;
          font-weight: bold;
    }
    .orderpage_notes , .orderpage_discount
    {
          padding: 0px;
    }
    .orderpage_innertag
    {
      font-weight: bold;
    }
    .orderpage_tags
    {
     display: inline-block;
        border: 1px solid #ddd;
        padding: 30px 5px;
        width: 100%;
        border-radius: 4px;
    }
    .orderpage_viewalltags
    {
          text-align: right;
          color: #a0a1e5;
    }
    .orderpage_taags
    {
          margin-top: 20px;
    }
    </style>

<style type="text/css">
    .order_heading
    {
    font-size: 20px;
    font-weight: bold;
    }
    .Polaris-Button__Text
    {
    font-size: 15px;
    letter-spacing: 0px;
    line-height: 24px;
    color: #4f555c;
    }
    input#PolarisTextField14
    {
    line-height: 28px;
    }
    input#PolarisTextField14::placeholder
    {
    font-size: 15px;
    letter-spacing: 0px;
    line-height: 24px;
    }
    .Polaris-DataTable__ScrollContainer
    {
    width: 100%;
    border-spacing: 0;
    border: 1px solid #ddd;
    max-width: 97.5%;
    margin: auto;
    border-radius: 4px;
    }
    .Polaris-DataTable__Table tbody
    {
    table-layout: fixed;
    width: 100%;
    white-space: nowrap;
    
    }
    .Polaris-DataTable__Table .custom_header .Polaris-DataTable__Cell
    {
    font-size: 14px;
    letter-spacing: 0px;
    color: #363553;
    font-weight: bold;
    }
    .Polaris-DataTable__Table .Polaris-DataTable__Cell--numeric {
    text-align: left;
    }
    .Polaris-DataTable__Table .Polaris-DataTable__TableRow .Polaris-DataTable__Cell
    {
    color: #000;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-weight: 400;
    }
    .Polaris-DataTable__Table .custom_check
    {
    width: 20px;
    padding-right: 6px;
    
    }
    .custom_fullfiled , .custom_deliverd
    {
    background-color: #fc5d5d;
    padding: 4px 16px;
    border-radius: 20px;
    color: #fff;
    }
    .Polaris-Card .custom_edit 
    {
    margin: 0px 15px;
    }
    .order_batch
    {
    margin-left: 20px;
    }
    .Polaris-Select__Content
    {
    width: 100px;
    margin-left: 20px;
    }
    .Polaris-Card__Section .order_batch .form-control
    {
    padding: 10px 20px !important;
    border-right: 0px !important;
    border: 1px solid #ccc;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    font-weight: bold;
    color: #a1a1a1;
    }
    .order_date .form-control
    {
    border-left: 0px !important;
    padding: 10px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    }
    .order_batch .form-control , .order_status .form-control , .order_date .form-control
    {
    padding: 10px !important;
    border-color: #ccc;
    font-weight: bold;
    padding: 8px 15px;
    }
    .order_btns , .order_nav
    {
    display: flex;
    align-items: center;
      padding: 2rem;
    }
    .order_inner_btns
    {
      flex-grow: 1;
    }
    .order_childer_btns
    {
    text-align: right;
    }
    .order_inner_btns .order_expoert
    {
      background: #fff;
          border: 0px;
      box-shadow: unset;
          margin-right: 20px;
    }
    .order_inner_btns .order_expoert .Polaris-Button__Text
    {
          font-weight: bold;
    }
    .order_inner_btns .order_create
    {
          border: 1px solid green;
        background: green;
        color: #fff;
    }
    .order_create .Polaris-Button__Content .Polaris-Button__Text
    {
      color: #fff;
    }
    .order_create .Polaris-Button__Text
    {
      color: #fff;
    }
    .order_nav div:first-child .order_heading
    {
    padding-left: 0px;
    }
    .order_nav div .order_heading
    {
    padding: 0px 20px;
    }
    </style>
{{-- End Order --}}