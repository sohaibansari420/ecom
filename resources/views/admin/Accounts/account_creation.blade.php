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
<div class="row">
<h2 class="page__account">Account Creation</h2>
<div class="col-md-12 col-lg-12 col-sm-12">
<div class="col-md-4 col-lg-4"><h4>Company Information</h4></div>


<div class="col-md-8 col-lg-8">
    <div class="col-md-6 col-lg-6">
        <form action="/action_page.php">
            <div class="form-group">
                <input type="text" class="form-control" id="compnay_name" placeholder="Compnay Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="company_id" placeholder="Compnay ID">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="b_r_number" placeholder="Business Registration No">
            </div>
            <div class="form-group">
            <select class="form-control select_input" id="exampleFormControlSelect1">
                <option>Payment Method</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control select_input" id="exampleFormControlSelect1">
                    <option>Discount Rate</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
            <div class="form-group">
                <input type="text" class="form-control" id="url" placeholder="URL">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="ph_no" placeholder="Phone No">
            </div>
        </form>
    </div>

    

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            <select class="form-control select_input" id="exampleFormControlSelect1">
                <option>Business type</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>
          <div class="form-group">
            <select class="form-control select_input" id="exampleFormControlSelect1">
                <option>Locations</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>
          <div class="form-group">
            <select class="form-control select_input" id="exampleFormControlSelect1">
                <option>year Established</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>
          <div class="form-group">
            <select class="form-control select_input" id="exampleFormControlSelect1">
                <option>Credit Terms</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>
          <div class="form-group">
            <select class="form-control select_input" id="exampleFormControlSelect1">
                <option>Currency</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="fax_no" placeholder="Fax No">
        </div>


    </div>
<div class="col-md-12 col-lg-12">
    <div class="form-group">
        <input type="text" class="form-control" id="add_1" placeholder="Addres 1">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="add_2" placeholder="Addres 2">
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
        <select class="form-control select_input" id="exampleFormControlSelect1">
            <option>Prefer Courier</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
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
        <input type="text" class="form-control" id="p_c" placeholder="Postal Code">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="courier_account_no" placeholder="Courier Account No">
    </div>
</div>
</div>
</div>


<div class="col-md-12 col-lg-12">
<div class="col-md-4 col-lg-4">
<h4>Document Upload</h4>
</div>
<div class="col-md-8 col-lg-8">
    <form class="file_upload">
        <div class="custom-file custom_upper_file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Upload File</label>
        </div>
      </form>
</div>
</div>

<div class="col-md-12 col-lg-12">
<div class="col-md-4 col-lg-4"><h4>Billing Contact</h4></div>


<div class="col-md-8 col-lg-8">
    <div class="col-md-6 col-lg-6">
        <form action="/action_page.php">
            <div class="form-group">
                <input type="text" class="form-control" id="first_name" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone_number" placeholder="Phone No">
            </div>
        </form>
    </div>

    

    <div class="col-md-6 col-lg-6">
        <form action="/action_page.php">
            <div class="form-group">
                <input type="text" class="form-control" id="last_name" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="mobile" placeholder="Mobile">
            </div>
        </form>
    </div>
<div class="col-md-12 col-lg-12">
    <div class="form-group">
        <input type="text" class="form-control" id="add_1" placeholder="Addres 1">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="add_2" placeholder="Addres 2">
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
      <form>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
          <label class="custom-control-label" for="customCheck">Copy Address from company information</label>
        </div>
      </form>
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
        <input type="text" class="form-control" id="p_c" placeholder="Postal Code">
    </div>
</div>
</div>
</div>

<div class="col-md-12 col-lg-12 contact_shipping">
    <div class="col-md-4 col-lg-4"><h4>Shipping Contact</h4></div>
    <div class="col-md-8 col-lg-8">
        <div class="col-md-6 col-lg-6">
            <form action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" id="first_name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="phone_number" placeholder="Phone No">
                </div>
            </form>
        </div>
        <div class="col-md-6 col-lg-6">
            <form action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="mobile" placeholder="Mobile">
                </div>
            </form>
        </div>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <input type="text" class="form-control" id="add_1" placeholder="Addres 1">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="add_2" placeholder="Addres 2">
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
          <form>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
              <label class="custom-control-label" for="customCheck">Copy Address from company information</label>
            </div>
          </form>
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
            <input type="text" class="form-control" id="p_c" placeholder="Postal Code">
        </div>
    </div>
    </div>
    </div>

<div class="col-md-12 col-lg-12">
    <div class="contact_button">
        <button type="button" class="btn btn-light">Discard</button>
        <button type="button" class="btn btn-success">Save</button>
    </div>
</div>





</div>







@endsection
@section('foot')

@endsection