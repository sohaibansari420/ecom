@extends('admin.layouts.app')
@section('head')


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


@endsection
@section('main-content')


<div class="Polaris-Card">
    <div class="Polaris-TextContainer">
    <div class="order_btns">
    <div><h2 class="order_heading">Order</h2></div>
    
    <div class="order_inner_btns"><div class="col-md-12 col-sm-12 col-xs-12 order_childer_btns">
    <div><button class="Polaris-Button order_expoert" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Export</span></span></button><button class="Polaris-Button order_create" type="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Create Order</span></span></button></div>
    </div>
    </div>
    </div>
    </div>
    <div class="Polaris-TextContainer">
    <div class="order_nav">
    <div><h2 class="order_heading">All</h2></div>
    <div><h2 class="order_heading">Pending</h2></div>
    <div><h2 class="order_heading">Overdue</h2></div>
    <div class="order_inner_btns">
    </div>
    </div>
    <div class="Polaris-Card__Section">
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
    <div class="order_batch">
    <select class="form-control">
    <option>Batch actions</option>
    <option>Brands</option>
    <option>Batch actions</option>
    </select> 
    </div>
    
    <div class="order_status">
    <select class="form-control">
    <option>Brand</option>
    <option>Brands</option>
    <option>Branded</option>
    </select> 
    </div>
    
    <div class="order_date">
    <select class="form-control">
    <option>Brand</option>
    <option>Brands</option>
    <option>Branded</option>
    </select> 
    </div>
    </div>
    </div>
    </div>
    <div class="">
    <div class="Polaris-DataTable__Navigation"><button type="button" class="Polaris-Button Polaris-Button--disabled Polaris-Button--plain Polaris-Button--iconOnly" disabled="" aria-label="Scroll table left one column"><span class="Polaris-Button__Content"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
    <path d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414L8.414 10l4.293 4.293A.999.999 0 0 1 12 16" fill-rule="evenodd"></path>
    </svg></span></span></span></button><button type="button" class="Polaris-Button Polaris-Button--plain Polaris-Button--iconOnly" aria-label="Scroll table right one column"><span class="Polaris-Button__Content"><span class="Polaris-Button__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
    <path d="M8 16a.999.999 0 0 1-.707-1.707L11.586 10 7.293 5.707a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5A.997.997 0 0 1 8 16" fill-rule="evenodd"></path>
    </svg></span></span></span></button></div>
    <div class="Polaris-DataTable">
    <div class="Polaris-DataTable__ScrollContainer">
    <table class="Polaris-DataTable__Table">
    <thead>
    <tr class="custom_header">
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header" scope="col"><label class="Polaris-Choice" for="PolarisCheckbox2"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input id="PolarisCheckbox2" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
          <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
        </svg></span></span></span></span></label></th> 
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header" scope="col">Invoice No</th>
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Date</th>
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Type</th>
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Customer</th>
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Amount</th>
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Currency</th>
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Terms</th>
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">By</th>
    <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    <tr class="Polaris-DataTable__TableRow">
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric custom_check">
    <label class="Polaris-Choice" for="PolarisCheckbox2"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input id="PolarisCheckbox2" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value=""><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
          <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
        </svg></span></span></span></span></label>
    </td>
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn custom_code" scope="row">10288</td>
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">06/25/2020</td>
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Wholesale</td>
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Trident Softech</td>
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">$38,000.00</td>
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">USD</td>
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Wire Transfer</td>
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">Team A</td>
    <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric"><span class="custom_deliverd">Payment</span>
    </td>
    </tr>
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>


@endsection
@section('foot')


@endsection