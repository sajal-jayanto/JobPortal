@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h5> Edit Company Profile </h5>  
        </div>
        <form class="m-5" method="POST" action="{{ route('company.profile.store' , $company->id) }}" enctype = "multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Company Name</label>
                    <input type="text" class="form-control"  name="companyname"  value="{{$company->companyname}}" >
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Company Type</label>
                    <select id="companytype" type="text" class="form-control @error('gender') is-invalid @enderror" name="companytype">
                        <option value="Accounting/Finance">Accounting/Finance</option>
                        <option value="Bank">Bank</option>
                        <option value="IT & Telecommunication">IT & Telecommunication</option>
                        <option value="Garments/Textile">Garments/Textile</option>
                        <option value="NGO/Development">NGO/Development</option>
                        <option value="Marketing/Sales">Marketing/Sales</option>
                        <option value="Customer Support/Call Centre">Customer Support/Call Centre</option>
                        <option value=" Medical/Pharma"> Medical/Pharma</option>
                        <option value="NGO/Development">NGO/Development</option>
                        <option value="Law/Legal">Law/Legal</option>
                        <option value="Design/Creative">Design/Creative</option>
                        <option value="Automobile/Industrial Machine">Automobile/Industrial Machine</option>
                        <option value="Hotel/Restaurant">Hotel/Restaurant</option>
                        <option value="Hospitality/Travel">Hospitality/Travel</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$company->email}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{$company->phone}}">
                </div>
            </div>
            <div class="form-row ">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">website</label>
                    <input type="text" class="form-control" name="website" value="{{$company->website}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Address</label>
                    <input type="text" class="form-control" name="address" >
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Linkedin</label>
                <input type="text" class="form-control" id="inputAddress" value="{{$company->address}}" , name="linkedin">
            </div>
            <div class="form-group">
                <label for="inputAddress2">About Company</label>
                <textarea type="text" class="form-control" rows="5" name="aboutme"> {{$company->aboutme}} </textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Upload image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" , name="logo">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">save</button>
        </form>
    </div>
</div>
@endsection
