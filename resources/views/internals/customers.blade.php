@extends('layouts')

@section('content')

<h1>Customers</h1>

<form action="customers" method="POST">
    @csrf
    <div class="input-group">
        <input type="text" name="name">
    </div>
    
    <div>{{$errors->first('name')}}</div>

    <button type="submit">Add Customer</button>
</form>

<ul>
    @foreach ($customers as $customer)
        
            <li>{{$customer->name}}</li>
            
    @endforeach
</ul>

@endsection