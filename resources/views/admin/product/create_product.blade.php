@extends('admin.layouts.app')
@section('head')

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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="Product Title">
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
    <select class="form-control" name="">
    <option>Brand</option>
    <option>Brands</option>
    <option>Branded</option>
    </select> 
    </div> 
    </div>
    
    <div class="prdt_item">
    <div class="col-md-6 col-sm-6 col-xs-6"><label>Sub-category</label></div>
    <div class="col-md-6 col-sm-6 col-xs-6"><div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
    <div class="">
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="Sub-category">
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="Category">
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="box/pcs">
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
    <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;"><label class="Polaris-Choice" for="PolarisCheckbox2"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input name="" id="PolarisCheckbox2" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
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
    <div class="Polaris-DropZone-FileUpload">
    <div class="Polaris-Stack Polaris-Stack--vertical">
    <div class="Polaris-Stack__Item"><?xml version="1.0" encoding="iso-8859-1"?>
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
    <div class="Polaris-DropZone-FileUpload__Button">Add file</div>
    </div>
    <div class="Polaris-Stack__Item"><span class="Polaris-TextStyle--variationSubdued">or drop files to upload</span></div>
    </div>
    </div>
    </div><span class="Polaris-VisuallyHidden"><input name="" class="form-control-file" id="PolarisDropZone2" type="file" multiple="" autocomplete="off"></span>
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="SKU (Stock keeping Unit)">
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="0,0">
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="HKD">
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="HKD">
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
    <div class="col-md-6 col-sm-6 col-xs-6 prdct_color"><span>Color Settings</span></div>
    <div class="col-md-6 col-sm-6 col-xs-6 prdct_size"><span>Size Settings</span></div>
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="0">
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="Barcode (ISBN, GTIN, etc)">
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="0, 0">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    <select class="form-control" name="">
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
    <div class="Polaris-TextField Polaris-TextField--hasValue"><input name="" id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="" placeholder="HKD">
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
    <select class="form-control" name="">
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
    </svg></span></div><input name="" id="PolarisTextField2" placeholder="Search by product keyword or HS code" autocomplete="off" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label PolarisTextField2Prefix" aria-invalid="false" aria-autocomplete="list" aria-multiline="false" value="" tabindex="0" aria-controls="Polarispopover2" aria-owns="Polarispopover2" aria-expanded="false">
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
@endsection
@section('foot')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    function myFunction() {
      alert("Hello! I am an alert box!"); 
    }
</script>
@endsection