@extends('admin.layouts.app')
@section('head')


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

@endsection
@section('main-content')


<div class="orderpage_main">
  <form class="kt-form" action="{{ route('admin.invoice.add_order') }}" method="POST" enctype="multipart/form-data" id="add_bikeForm">
    {{ csrf_field() }}  
    <div class="col-md-12 col-sm-12 col-xs-12 orderpage_heading">
    <div class="col-md-6 col-sm-6 col-xs-6 orderpage_innerheading">
    <div class="Polaris-TextContainer">
    <h2 class="ordertext_heading"><svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M19 9H3.661l5.997-5.246a1 1 0 00-1.316-1.506l-8 7c-.008.007-.011.018-.019.025a.975.975 0 00-.177.24c-.018.03-.045.054-.059.087a.975.975 0 000 .802c.014.033.041.057.059.088.05.087.104.17.177.239.008.007.011.018.019.025l8 7a.996.996 0 001.411-.095 1 1 0 00-.095-1.411L3.661 11H19a1 1 0 000-2z" fill="#5C5F62"></path></svg>Craete Order</h2>
    </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 orderpage_btns">
    <div><button class="Polaris-Button orderpage_discard" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Discard</span></span></button><button class="Polaris-Button orderpage_save" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Save</span></span></button></div>
    </div>
    </div>
    
    <div class="col-md-8 col-sm-12 col-xs-12 orderpage_details">
    <div class="col-md-6 col-sm-6 col-xs-6 order orderpage_orderr">Order details</div>
    <div class="col-md-6 col-sm-6 col-xs-6 orderpage_orderr_add"><span>Add custom item</span></div>
    <div class="Polaris-Card__Section orderpage_rightsection">
    <div class="Polaris-Filters">
    <div class="Polaris-Filters-ConnectedFilterControl__ProxyButtonContainer" aria-hidden="true">
    <div data-key="availability"><button id="Activator-availability" type="button" class="Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Availability</span><span class="Polaris-Button__Icon">
    <div class="Polaris-Button__DisclosureIcon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
    <path d="M5 8l5 5 5-5z" fill-rule="evenodd"></path>
    </svg></span></div>
    </span></span></button></div>
    </div>
    <div class="Polaris-Filters-ConnectedFilterControl__Wrapper">
    <div class="Polaris-Filters-ConnectedFilterControl Polaris-Filters-ConnectedFilterControl--right">
    <div class="Polaris-Filters-ConnectedFilterControl__CenterContainer">
    <div class="Polaris-Filters-ConnectedFilterControl__Item">
    <div class="Polaris-Labelled--hidden">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField14Label" for="PolarisTextField14" class="Polaris-Label__Text">Filter items</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField">
    <div class="Polaris-TextField__Prefix" id="PolarisTextField14Prefix"><span class="Polaris-Filters__SearchIcon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
        <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8m9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414" fill-rule="evenodd"></path>
      </svg></span></span></div><input id="PolarisTextField14" placeholder="Search..." class="Polaris-TextField__Input Polaris-TextField__Input--hasClearButton" aria-labelledby="PolarisTextField14Label PolarisTextField14Prefix" aria-invalid="false" aria-multiline="false" value="">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    
    <button class="Polaris-Button Polaris-Button--outline" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Browse products</span></span></button>
    </div>
    </div>
    
    <div class="col-md-6 col-sm-6 col-xs-6 orderpage_notes">
    <div class="">
      <div class="Polaris-Labelled__LabelWrapper">
        <div class="Polaris-Label"><label id="PolarisTextField6Label" for="PolarisTextField6" class="Polaris-Label__Text">Notes</label></div>
      </div>
      <div class="Polaris-Connected">
        <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
          <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="PolarisTextField6" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField6Label" aria-invalid="false" aria-multiline="false" value="" placeholder="Add a notes...">
            <div class="Polaris-TextField__Backdrop"></div>
          </div>
        </div>
      </div>
    </div>
    
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 orderpage_discount">
    
    <div class="col-md-6 col-sm-6 col-xs-12 orderpage_prices">
    <span>Add discount</span>
    <span>Subtotal</span>
    <span>Add Shipping</span>
    <span>Taxes</span>
    <span>Total</span>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 orderpage_total_prices">
    <span>------</span>
    <span>HK$0.00</span>
    <span>------</span>
    <span>HK$0.00</span>
    <span>HK$0.00</span>
    </div>
    
    </div>
    
    <div class="col-md-12 col-sm-12 col-xs-12 orderpage_invoice_main">
    <div class="col-md-10 col-sm-10 col-xs-10 orderpage_invoice"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>envelope-written-document-outline</title><g id="mail-heart-note"><polygon points="508.34 512 3.66 512 3.66 197.99 43.75 159.96 56.14 173.01 21.66 205.72 21.66 494 490.34 494 490.34 205.72 456.41 173.55 468.79 160.49 508.34 197.98 508.34 512" fill="#231f20"/><polygon points="494.28 510.45 256 348.68 17.72 510.45 7.61 495.55 256 326.92 504.39 495.55 494.28 510.45" fill="#231f20"/><rect x="113.46" y="147.37" width="18" height="264.92" transform="translate(-177.99 224.79) rotate(-55.98)" fill="#231f20"/><rect x="257.09" y="270.83" width="264.92" height="18" transform="translate(-89.88 265.82) rotate(-34.02)" fill="#231f20"/><polygon points="472.29 230.06 454.29 230.06 454.29 18 57.71 18 57.71 230.06 39.71 230.06 39.71 0 472.29 0 472.29 230.06" fill="#231f20"/><rect x="87" y="52.5" width="142" height="18"/><rect x="87" y="106.5" width="338" height="18"/><rect x="87" y="160.5" width="338" height="18"/><rect x="87" y="214.5" width="338" height="18"/><rect x="169.5" y="268.5" width="173" height="18"/></g></svg> EMAIL INVOICE</div>
    <div class="col-md-2 col-sm-2 col-xs-2 orderpage_email_invoice_btn">
      <button class="Polaris-Button Polaris-Button--outline" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Email Invoice</span></span></button>
    </div>
    </div>
    
    
    <div class="col-md-12 col-sm-12 col-xs-12 orderpage_invoice_mian">
      <div class="col-md-4 col-sm-4 col-xs-4 orderpage_invoice">
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>envelope-written-document-outline</title><g id="mail-heart-note"><polygon points="508.34 512 3.66 512 3.66 197.99 43.75 159.96 56.14 173.01 21.66 205.72 21.66 494 490.34 494 490.34 205.72 456.41 173.55 468.79 160.49 508.34 197.98 508.34 512" fill="#231f20"></polygon><polygon points="494.28 510.45 256 348.68 17.72 510.45 7.61 495.55 256 326.92 504.39 495.55 494.28 510.45" fill="#231f20"></polygon><rect x="113.46" y="147.37" width="18" height="264.92" transform="translate(-177.99 224.79) rotate(-55.98)" fill="#231f20"></rect><rect x="257.09" y="270.83" width="264.92" height="18" transform="translate(-89.88 265.82) rotate(-34.02)" fill="#231f20"></rect><polygon points="472.29 230.06 454.29 230.06 454.29 18 57.71 18 57.71 230.06 39.71 230.06 39.71 0 472.29 0 472.29 230.06" fill="#231f20"></polygon><rect x="87" y="52.5" width="142" height="18"></rect><rect x="87" y="106.5" width="338" height="18"></rect><rect x="87" y="160.5" width="338" height="18"></rect><rect x="87" y="214.5" width="338" height="18"></rect><rect x="169.5" y="268.5" width="173" height="18"></rect></g></svg> ACCEPT PAYMENT
      </div>
    <div class="col-md-8 col-sm-8 col-xs-8 orderpage_btns_grp">
        <div>
    <button class="Polaris-Button Polaris-Button--outline" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Email Invoice</span></span></button>
    <button class="Polaris-Button Polaris-Button--outline" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Email Invoice</span></span></button>
    <button class="Polaris-Button Polaris-Button--outline" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Email Invoice</span></span></button>
        </div>
      </div>
    
    </div>
    
    
    
    
    
    
    
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12 orderpage_create_customer">
    <div class="orderpage_create_a_customer">
    <div class="col-md-12 col-sm-12 col-xs-12 orderpage_find_or_create_a_customer">Find or create a customer</div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="Polaris-Filters-ConnectedFilterControl__Wrapper">
    <div class="Polaris-Filters-ConnectedFilterControl Polaris-Filters-ConnectedFilterControl--right">
    <div class="Polaris-Filters-ConnectedFilterControl__CenterContainer">
    <div class="Polaris-Filters-ConnectedFilterControl__Item">
    <div class="Polaris-Labelled--hidden">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField14Label" for="PolarisTextField14" class="Polaris-Label__Text">Filter items</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField">
    <div class="Polaris-TextField__Prefix" id="PolarisTextField14Prefix"><span class="Polaris-Filters__SearchIcon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
        <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8m9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414" fill-rule="evenodd"></path>
      </svg></span></span></div><input id="PolarisTextField14" placeholder="Search customers" class="Polaris-TextField__Input Polaris-TextField__Input--hasClearButton" aria-labelledby="PolarisTextField14Label PolarisTextField14Prefix" aria-invalid="false" aria-multiline="false" value="">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    
    </div>
    
    </div>
    
    <div class="orderpage_tags">
      <div class="col-md-6 col-sm-6 col-xs-6 orderpage_innertag">Tags</div>
      <div class="col-md-6 col-sm-6 col-xs-6 orderpage_viewalltags">View all tags</div>
      <div  class="col-md-12 col-sm-12 col-xs-12 orderpage_taags">
        <div class="Polaris-Filters-ConnectedFilterControl__Wrapper">
    <div class="Polaris-Filters-ConnectedFilterControl Polaris-Filters-ConnectedFilterControl--right">
    <div class="Polaris-Filters-ConnectedFilterControl__CenterContainer">
    <div class="Polaris-Filters-ConnectedFilterControl__Item">
    <div class="Polaris-Labelled--hidden">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label"><label id="PolarisTextField14Label" for="PolarisTextField14" class="Polaris-Label__Text">Filter items</label></div>
    </div>
    <div class="Polaris-Connected">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField">
    <input id="PolarisTextField14" placeholder="Search customers" class="Polaris-TextField__Input Polaris-TextField__Input--hasClearButton" aria-labelledby="PolarisTextField14Label PolarisTextField14Prefix" aria-invalid="false" aria-multiline="false" value="">
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
      </div>
    </div>
    </div>
  </form>
    </div>

@endsection
@section('foot')


@endsection