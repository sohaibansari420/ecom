@extends('admin.layouts.app')
@section('head')
<style>
.page__account
{
    margin-bottom: 20px;
}
.container.page_account input , .container.page_account select  {
    font-size: 15px;
    color: #8a8a8a;
}
.page_account .select_input
{
    height: 34px !important;
}
.page_account .file_upload
{
    width: 200px;
    max-width: 200px;
    margin-left: 15px;
    margin-bottom: 10px;
}
.custom_upper_file
{
    height: 39px;
    border: 1px dotted #000;
    border-radius: 6px;
}
.page_account .file_upload .custom-file-label
{
    font-size: 15px;
    text-align: center;
    color: blue;
}
.page_account .file_upload .custom-file-label::after{
    content:'' !important;
    display: none !important;
}
.page_account .contact_shipping
{
    margin-top: 10px;
}
.page_account .contact_button
{
    text-align: right;
    margin-top: 20px;
}
.page_account .btn-light
{
    margin-right: 20px;
    border:1px solid #000;
}


    </style>
@endsection
@section('main-content')
<div class="container page_account">
    <form class="kt-form" action="{{ route('admin.save_account_creation') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <h2 class="page__account">Account Creation</h2>
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="col-md-4 col-lg-4"><h4>Company Information</h4></div>
                <div class="col-md-8 col-lg-8">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="compnay_name" name="company_name" placeholder="Compnay Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="company_id" name="company_id" placeholder="Compnay ID">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="b_r_number" name="bss_reg_number" placeholder="Business Registration No">
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input bk-select2" id="exampleFormControlSelect1" name="payment_method">
                                <option>Payment Method</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input bk-select2" id="exampleFormControlSelect1" name="discount_rate">
                                <option>Discount Rate</option>
                                <option value="30">30% off</option>
                                <option value="40">40% off</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="url" placeholder="URL" name="url">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="ph_no" placeholder="Phone No" name="phone_number">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <select class="form-control select_input bk-select2" id="exampleFormControlSelect1" name="bus_type">
                                <option value="wholesale">Wholesale</option>
                                <option value="retailer">Retailer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input bk-select2" id="exampleFormControlSelect1" name="location">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input bk-select2" id="exampleFormControlSelect1" name="year">
                                @for ($i = 0; $i <= 70; $i++) @php $_m=Carbon\Carbon::now()->addYear(-$i);@endphp
                                    <option value="{{$_m->format('Y')}}">{{$_m->format('Y')}}</option> 
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input bk-select2" id="exampleFormControlSelect1" name="credit_terms">
                                <option value="cod">COD</option>
                                <option value="net_7">NET 7</option>
                                <option value="net_14">NEt 14</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input bk-select2" id="exampleFormControlSelect1" name="currency">
                                <option value="hkd">HKD</option>
                                <option value="usd">USD</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="fax_no" placeholder="Fax No" name="fax_no">
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="add_1" placeholder="Addres 1" name="adress_1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="add_2" placeholder="Addres 2" name="adress_2">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1">
                                <option>Country</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1">
                                <option>City</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1" name="prefer_courier">
                                <option value="DHL">DHL</option>
                                <option value="Fedex">Fedex</option>
                                <option value="UPS">UPS</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1">
                                <option>States</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="p_c" placeholder="Postal Code" name="postal_code">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="courier_account_no" placeholder="Courier Account No" name="courier_acc_no">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12">
                <div class="col-md-4 col-lg-4">
                    <h4>Document Upload</h4>
                </div>
                <div class="col-md-8 col-lg-8 file_upload">
                    <div class="custom-file custom_upper_file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Upload File</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12">
                <div class="col-md-4 col-lg-4"><h4>Billing Contact</h4></div>
                <div class="col-md-8 col-lg-8">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" name="bill_first_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="bill_title">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone_number" placeholder="Phone No" name="bill_phone_number">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="bill_last_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="bill_email_bill">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="bill_mobile">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="add_1" placeholder="Addres 1" name="bill_address_1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="add_2" placeholder="Addres 2" name="bill_address_2">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1">
                                <option>Country</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1">
                                <option>City</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="bill_company_address">
                            <label class="custom-control-label" for="customCheck">Copy Address from company information</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1">
                                <option>States</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="p_c" placeholder="Postal Code" name="postal_code">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 contact_shipping">
                <div class="col-md-4 col-lg-4"><h4>Shipping Contact</h4></div>
                <div class="col-md-8 col-lg-8">
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" name="ship_first_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="ship_title">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone_number" placeholder="Phone No" name="ship_phone_number">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="ship_last_name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="ship_email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="ship_mobile">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="add_1" placeholder="Addres 1" name="ship_address_1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="add_2" placeholder="Addres 2" name="ship_address_2">
                        </div>
                    </div>     
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1">
                                <option>Country</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1">
                                <option>City</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="ship_company_info">
                            <label class="custom-control-label" for="customCheck">Copy Address from company information</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <select class="form-control select_input" id="exampleFormControlSelect1">
                                <option>States</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="p_c" placeholder="Postal Code" name="ship_postal_code">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="contact_button">
                    <button type="button" class="btn btn-light">Discard</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('foot')

@endsection