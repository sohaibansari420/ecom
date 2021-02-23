@extends('admin.layouts.app')
@section('head')


<style type="text/css">
    .product_container
    {
    background-color: #f4f4f4;
    }
    .kt-grid.kt-grid--ver
    {
        padding-top: 0px !important;
    }
    label {
    font-size: 16px;
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
      cursor: pointer;
    }
    .prdct_variant .prdct_size
    {
    text-align: right;
    cursor: pointer;
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
    .color_model
    {
        background-color: #d7dbef;
    }
    .color_popoup
    {
        display: flex;
    }
    .color_popoup .form-control
    {
        width: 170px;
        margin-right: 5px;
        border: 1px solid #000;
        font-size: 15px;
    }
    .color_popoup .color__add{
        border: 1px solid #ccc;
    padding: 0px 15px;
    color: #000;
    font-size: 13px;
    border-radius: 3px;
    background-color: transparent;
    }
    .color_list 
    {
        border:1px solid #000;
        overflow-y: scroll;
        background-color: #fff;
        min-height: 200px;
        height: 200px;
    }
    .color_list ul
    {
        padding:0px;
        padding: 0px;
    padding-left: 10px;
    padding-top: 10px;
    }
    .color_list ul li{
        list-style: none;
        font-size: 15px;
    }
    .color_delete
    {
        margin-top: 12px;
    }
    .color_delete button:nth-of-type(2){
        margin-left: 5px;

    }
    .color_list ul{ 
        cursor: pointer; 
    }
    </style>

@endsection
@section('main-content')

<div class="product_container p-4">
    <form class="kt-form" action="{{ route('admin.invoice.add_product') }}" method="POST" enctype="multipart/form-data" id="add_bikeForm">
    {{ csrf_field() }}
    <div class="Polaris-TextContainer">
    <h2 class="proudct_heading"><svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M19 9H3.661l5.997-5.246a1 1 0 00-1.316-1.506l-8 7c-.008.007-.011.018-.019.025a.975.975 0 00-.177.24c-.018.03-.045.054-.059.087a.975.975 0 000 .802c.014.033.041.057.059.088.05.087.104.17.177.239.008.007.011.018.019.025l8 7a.996.996 0 001.411-.095 1 1 0 00-.095-1.411L3.661 11H19a1 1 0 000-2z" fill="#5C5F62"/></svg> Add Products</h2>
    </div>
    <div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12 prdct_dec_first">
    <div class="prdt_item">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Product Title</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6"><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
    <div class="">
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="p_tiltle" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="Product Title">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    <div id="PolarisPortalsContainer"></div>
    </div>
    </div> 
    </div>
    
    <div class="prdt_item">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Brand</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6">
    <select class="form-control bk-select2" name="brand" id="product_brand">
        <option value="add_new" onclick="selectBrand()">Add New</option>
        @foreach ($brands as $brand)
            <option value="{{$brand->id}}">{{$brand->name}}</option>
        @endforeach
    </select> 
    </div> 
    </div>
    
    <div class="prdt_item">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Sub-category</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6"><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
    <div class="">
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="sub_category" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="Sub-category">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    <div id="PolarisPortalsContainer"></div>
    </div>
    </div> 
    </div>
    
    <div class="prdt_item">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Category</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6"><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
    <div class="">
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="category" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="Category">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    <div id="PolarisPortalsContainer"></div>
    </div>
    </div> 
    </div>
    
    <div class="prdt_item">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Unit</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6"><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
    <div class="">
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="unit" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="box/pcs">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    <div id="PolarisPortalsContainer"></div>
    </div>
    </div> 
    </div>
    
    <div class="prdt_item">
    <div class="col-md-6 col-sm-6 col-xs-6"></div>
    <div class="col-md-6 col-sm-6 col-xs-6">
    <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><label class="Polaris-Choice" for="PolarisCheckbox2"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input name="company_adress" id="PolarisCheckbox2" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
    </svg></span></span></span></span><span class="Polaris-Choice__Label">Copy address from company information</span></label>
    <div id="PolarisPortalsContainer"></div>
    </div>
    </div> 
    </div>
    
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12 prdct_dec_scnd">
    <div class="prdct_scnd_inner">
    <div class="col-md-12 prdct_media">Media</div>
    <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
    <div class="Polaris-Labelled--hidden">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisDropZone2Label" for="PolarisDropZone2" class="Polaris-Label__Text">Upload file</label></div>
    </div>
    <div class="Polaris-DropZone Polaris-DropZone--hasOutline Polaris-DropZone--sizeExtraLarge" aria-disabled="false">
    <div class="Polaris-DropZone__Container">
    <div class="Polaris-DropZone-FileUpload ">
    <div class="Polaris-Stack Polaris-Stack--vertical">
    <div class="Polaris-Stack__Item">
    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    width="548.176px" height="548.176px" viewBox="0 0 548.176 548.176" style="enable-background:new 0 0 548.176 548.176;"
    xml:space="preserve">
    <g>
    <path d="M524.326,297.352c-15.896-19.89-36.21-32.782-60.959-38.684c7.81-11.8,11.704-24.934,11.704-39.399
    c0-20.177-7.139-37.401-21.409-51.678c-14.273-14.272-31.498-21.411-51.675-21.411c-18.083,0-33.879,5.901-47.39,17.703
    c-11.225-27.41-29.171-49.393-53.817-65.95c-24.646-16.562-51.818-24.842-81.514-24.842c-40.349,0-74.802,14.279-103.353,42.83
    c-28.553,28.544-42.825,62.999-42.825,103.351c0,2.474,0.191,6.567,0.571,12.275c-22.459,10.469-40.349,26.171-53.676,47.106
    C6.661,299.594,0,322.43,0,347.179c0,35.214,12.517,65.329,37.544,90.358c25.028,25.037,55.15,37.548,90.362,37.548h310.636
    c30.259,0,56.096-10.711,77.512-32.12c21.413-21.409,32.121-47.246,32.121-77.516C548.172,339.944,540.223,317.248,524.326,297.352
    z M362.729,289.648c-1.813,1.804-3.949,2.707-6.42,2.707h-63.953v100.502c0,2.471-0.903,4.613-2.711,6.42
    c-1.813,1.813-3.949,2.711-6.42,2.711h-54.826c-2.474,0-4.615-0.897-6.423-2.711c-1.804-1.807-2.712-3.949-2.712-6.42V292.355
    H155.31c-2.662,0-4.853-0.855-6.563-2.563c-1.713-1.714-2.568-3.904-2.568-6.566c0-2.286,0.95-4.572,2.852-6.855l100.213-100.21
    c1.713-1.714,3.903-2.57,6.567-2.57c2.666,0,4.856,0.856,6.567,2.57l100.499,100.495c1.714,1.712,2.562,3.901,2.562,6.571
    C365.438,285.696,364.535,287.845,362.729,289.648z"/>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    <g>
    </g>
    </svg>
    </div>
    <div class="Polaris-Stack__Item upld_btn">
    <div class="Polaris-DropZone-FileUpload__Button product_add_input_file">Add file</div>
    </div>
    <div class="Polaris-Stack__Item"><span class="Polaris-TextStyle--variationSubdued product_input_file_name">or drop files to upload</span></div>
    </div>
    </div>
    </div><span class="Polaris-VisuallyHidden"><input name="p_file" class="form-control-file product_file_input" id="PolarisDropZone2" type="file" multiple="" autocomplete="off"></span>
    </div>
    </div>
    <div id="PolarisPortalsContainer UppyDragDrop"></div>
    </div>
    
    
    </div>
    </div>
    
    </div>
    <hr class="prdct_hr">
    <div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12" prdct_dec_third>
    
    <div class="prdt_item3">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Inventory</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">SKU (Stock keeping Unit)</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="sku" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="SKU (Stock keeping Unit)">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="prdt_item3">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Shipping</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Dimensions</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="dimension" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="0,0">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="prdt_item3">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Pricing</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Price</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="price" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="HKD">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="prdt_item3">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Cost per item</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Cost</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="cost" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="HKD">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="prdt_item3 prdouct__variants">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Varinats</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6 prdct_variant">
    <div class="col-md-6 col-sm-6 col-xs-6 prdct_color" onclick="selectColor()"><span>Color Settings</span></div>
    <div class="col-md-6 col-sm-6 col-xs-6 prdct_size" onclick="selectSize()"><span>Size Settings</span></div>
    </div>
    </div>
    
    <div class="prdt_item3">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Inventory</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6">
    <div class="">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Availabe</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="inventory_available" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="0">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    
    <div class="col-md-4 col-sm-12 col-xs-12">
    <div class="prdt_item4">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Barcode (ISBN, GTIN, etc)</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="barcode" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="Barcode (ISBN, GTIN, etc)">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="prdt_item4">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Weight</label></div>
    </div class="prodct_weight">
    <div class="prodct_weight">
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="weight" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="0, 0">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    <select class="form-control" name="weight_measure">
    <option>Kg</option>
    <option>kg</option>
    <option>kg</option>
    </select>
    </div>
    </div>
    
    <div class="prdt_item4">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Promotion Price</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="prmotion_price" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="HKD">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    
    <div class="prdt_item4 product_prfit_margin">
    <div class="col-md-6 col-sm-6 col-xs-6">Margin<div>-</div></div>
    <div class="col-md-6 col-sm-6 col-xs-6">Profit<div>-</div></div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-4 col-sm-12 col-xs-12" style="padding-left: 30px"><label>Customer Information</label></div>
    <div class="col-md-8 col-sm-12 col-xs-12">
    <div class="prdt_item5">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Country/ Regionof origin</label></div>
    </div>
    <select class="form-control" name="country">
    <option>Country/ Regionof origin</option>
    <option>Country/ Regionof origin</option>
    <option>Country/ Regionof origin</option>
    </select>
    </div>
    
    <div role="combobox" aria-expanded="false" aria-owns="PolarisComboBox2" aria-controls="PolarisComboBox2" aria-haspopup="true" tabindex="0">
    <div>
    <div class="">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">HS (Harmonized System) code</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField">
    <div class="Polaris-TextField__Prefix" id="PolarisTextField2Prefix"><span class="Polaris-Icon Polaris-Icon--colorInkLighter Polaris-Icon--isColored"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
    <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414z"></path>
    </svg></span></div><input name="hs_code" id="PolarisTextField2" placeholder="Search by product keyword or HS code" autocomplete="off" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label PolarisTextField2Prefix" aria-invalid="false" aria-autocomplete="list" aria-multiline="false" value="" tabindex="0" aria-controls="Polarispopover2" aria-owns="Polarispopover2" aria-expanded="false">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    </div>
    
    </div>
    
    <div class="col-md-12 col-sm-12 col-xs-12 prodct_btns">
    <div><button class="Polaris-Button prdct_discard" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Discard</span></span></button><button class="Polaris-Button prdct_save" type="submit"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Save</span></span></button></div>
    </div>
    </form>
</div>

<div>
    <div class="modal fade" id="brand_modal" tabindex="-1"  role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content color_model">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="kt-form" id="brand_modal_form"  enctype="multipart/form-data">
                    <div class="container w-100">
                        <div class="form-group">
                            <label>Brand:</label>
                            <input required type="text" class="form-control" name="brand" placeholder="Enter Brand">
                        </div>
                        <div class="modal-footer border-top-0 d-flex justify-content-right">
                            <button class="upload-button btn btn-success add_impound_state">Add Brand</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
<div>
    <div class="modal fade" id="color_modal" tabindex="-1"  role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Color Setting</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="kt-form" id="color_modal_form"  enctype="multipart/form-data">
                    <div class="container w-100">
                        <div class="form-group color_popoup">
                            <input type="text" class="form-control" name="add_color" autocomplete="off" placeholder="">
                            <button class="color__add" onclick="change_settings('add','color'); return false;">add color</button>
                            
                        </div>
                        <div class="color_list">
                            <ul>
                                @foreach ($pro_settings as $color_setting)
                                    @if ($color_setting->type=="color")
                                        <li onclick="edit_setting('{{$color_setting->name}}','{{$color_setting->id}}','color')">{{$color_setting->name}}</li>  
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="form-group color_popoup color_delete">
                            <input type="text" class="form-control" name="edit_color" autocomplete="off" placeholder="">
                            <button class="color__add" onclick="change_settings('edit','color'); return false;">edit</button>
                            <button class="color__add" onclick="change_settings('delete','color'); return false;">delete</button>
                            <input type="hidden" name="color_id">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
<div>
    <div class="modal fade" id="size_modal" tabindex="-1"  role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel">Size Setting</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="kt-form" id="size_modal_form"  enctype="multipart/form-data">
                    <div class="container w-100">
                        <div class="form-group color_popoup">
                            <input type="text" class="form-control" name="add_size" autocomplete="off" placeholder="">
                            <button class="color__add" onclick="change_settings('add','size'); return false;">add size</button>
                            
                        </div> 
                        <div class="color_list"> 
                            <ul>
                                @foreach ($pro_settings as $size_setting)
                                    @if ($size_setting->type=="size")
                                        <li onclick="edit_setting('{{$size_setting->name}}','{{$size_setting->id}}','size')">{{$size_setting->name}}</li>  
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="form-group color_popoup color_delete">
                            <input type="text" class="form-control" name="edit_size" autocomplete="off" placeholder="">
                            <button class="color__add" onclick="change_settings('edit','size'); return false;">edit</button>
                            <button class="color__add" onclick="change_settings('delete','size'); return false;">delete</button>
                            <input type="hidden" name="size_id">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>

@endsection
@section('foot')
<script>
    $(document).ready(function(){
        $('[name="brand"]').on('change.select2',function(){
            var _val=$(this).val();
            if (_val=="add_new") {
                selectBrand();
                $('[name="brand"]').val('').trigger('change');
            }
        });
        $('[name="brand"]').val('').trigger('change.select2');
    
        $('form#brand_modal_form').off('submit').on('submit',function(e){
        var _self = $(this);
        _self.find('[type="submit"]').prop('disabled',true);
        e.preventDefault();
        var _form = $(this);
        var url ="{{ url('/add-product-brand') }}";
        $.ajax({
            url : url,
            type : 'POST',
            data: _form.serializeArray(),
            success: function(data){
                $('#brand_modal').modal('hide');
                console.log(data);
                var brand=data.request.brand;
                $('[name="brand"]').val(brand).trigger('change.select2');
                _self.find('[type="submit"]').prop('disabled',false);
            },
            error: function(error){
                _self.find('[type="submit"]').prop('disabled',false);
            }
        });
    });

    });
    function selectBrand(){
        $('#brand_modal').modal('show');
    }
    function selectColor(){
        $('#color_modal').modal('show');
    }
    function selectSize(){
        $('#size_modal').modal('show');
    }
    function change_settings(_setting_condition,type){
        if (type=="color") {
            if (_setting_condition=="add") {
                var _val=$('#color_modal_form [name="add_color"]').val();
                var data={
                    condition:_setting_condition, 
                    val:_val,
                    type:type,
                }
            }
            if (_setting_condition=="edit") {
                var _val=$('#color_modal_form [name="edit_color"]').val();
                var _id=$('#color_modal_form [name="color_id"]').val();
                var data={
                    condition:_setting_condition, 
                    val:_val,
                    id:_id,
                    type:type,
                }
            }
            if (_setting_condition=="delete") {
                var _id=$('#color_modal_form [name="color_id"]').val();
                var data={
                    condition:_setting_condition,
                    type:type,
                    id:_id,
                }
            }
        }
        if (type=="size") {
            if (_setting_condition=="add") {
                var _val=$('#size_modal_form [name="add_size"]').val();
                var data={
                    condition:_setting_condition, 
                    val:_val,
                    type:type,
                }
            }
            if (_setting_condition=="edit") {
                var _val=$('#size_modal_form [name="edit_size"]').val();
                var _id=$('#size_modal_form [name="size_id"]').val();
                var data={
                    condition:_setting_condition, 
                    val:_val,
                    id:_id,
                    type:type,
                }
            }
            if (_setting_condition=="delete") {
                var _id=$('#size_modal_form [name="size_id"]').val();
                var data={
                    condition:_setting_condition,
                    type:type,
                    id:_id,
                }
            }
        }
        
        
        var url ="{{ url('/change-product-color-setting') }}";
        $.ajax({
            url : url,
            type : 'POST',
            data: data,
            success: function(data){
                console.log(data);
                
                var type=data.type;
                if (type=="color") {
                    $('#color_modal_form .color_list ul').html('');
                    $('#color_modal_form [name="add_color"]').val('');
                    $('#color_modal_form [name="edit_color"]').val('');
                    var product_setting=data.p_set;
                    var li_html='';
                    if (product_setting!=null) {
                        product_setting.forEach(function(i,j){
                            if (i.type=="color") {
                                li_html+='<li onclick="edit_setting(\''+i.name+'\',\''+i.id+'\',\''+i.type+'\')">'+i.name+'</li>';
                            }
                        });
                        $('#color_modal_form .color_list ul').append(li_html);
                    }
                }
                if (type=="size") {
                    $('#size_modal_form .color_list ul').html('');
                    $('#size_modal_form [name="add_size"]').val('');
                    $('#size_modal_form [name="edit_size"]').val('');
                    var product_setting=data.p_set;
                    var li_html='';
                    if (product_setting!=null) {
                        product_setting.forEach(function(i,j){
                            if (i.type=="size") {
                                li_html+='<li onclick="edit_setting(\''+i.name+'\',\''+i.id+'\',\''+i.type+'\')">'+i.name+'</li>';
                            }
                        });
                        $('#size_modal_form .color_list ul').append(li_html);
                    }
                }
                
            },
            error: function(error){

            }
        });
    }
    function edit_setting(name,id,type){
        if (type=="color") {
            $('#color_modal_form [name="edit_color"]').val(name);
            $('#color_modal_form [name="color_id"]').val(id);
        }
        if (type=="size") {
            $('#size_modal_form [name="edit_size"]').val(name);
            $('#size_modal_form [name="size_id"]').val(id);
        }
        
    }
</script>
@endsection