@extends('layouts.app')

@section('title','Edit details for' . $customer->name)

@section('content')

<div class="row">
    <div class="col-12">
        <h1>Edit Details For {{ $customer->name }}</h1>
    </div>
</div>

<div class="col">
    <div class="col-12">
        <form action="/customers/{{$customer->id}}" method="POST">
            @method('PATCH')
            @include('customers.form')

            <button type="submit" class="btn btn-primary">Save Customer</button>
        </form>
    </div>
</div>


@endsection