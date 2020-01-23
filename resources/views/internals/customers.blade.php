@extends('layouts')

@section('title','Customer List')

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
    </div>
</div>

<div class="col">
    <div class="col-12">
        <form action="customers" method="POST">
            @csrf

            <label for="name">Name</label>
            <div class="input-group">
                <input type="text" name="name" value="{{ old('name')}}" class="form-control ">
                <div>{{$errors->first('name')}}</div>
            </div>

            <label for="email">Email</label>
            <div class="input-group">
                <input type="text" name="email" value="{{ old('name')}}" class="form-control ">
                <div>{{$errors->first('email')}}</div>
            </div>

            <div class="form-group">
                <label for="active">Status</label>
                <select name="active" id="active" class="form-control ">
                    <option value="" disabled>Select Customer Status</option>
                    <option value="1">Active</option>
                    <option value="0">InActive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Customer</button>
        </form>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-16">
        <h3>Active Customer</h3>
        <ul>
            @foreach ($activeCustomers as $activecustomer)
                
                    <li>{{$activecustomer->name}}
                    <span class="text-muted">({{$activecustomer->email }})</li></span>
                    
            @endforeach
        </ul>
    </div>
    <div class="col-16">
        <h3>Inactive Customer</h3>
        <ul>
            @foreach ($inactiveCustomers as $inactivecustomer)
                
                    <li>{{$inactivecustomer->name}}
                    <span class="text-muted">({{$inactivecustomer->email }})</li></span>
                    
            @endforeach
        </ul>
    </div>
</div>



@endsection