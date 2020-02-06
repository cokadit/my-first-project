@extends('layouts.app')

@section('content')
<h1>
    contact us
</h1>

@if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        <strong>Success</strong>{{session()->get('message')}}
    </div>
@endif


<form action="{{route('contact.store')}}" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
            <div class="input-group">
                <input type="text" name="name" value="{{ old('name')}} " class="form-control ">
            </div>
        <div>{{$errors->first('name')}}</div>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <div class="input-group">
            <input type="text" name="email" value="{{ old('email')}}" class="form-control ">
        </div>
        <div>{{$errors->first('email')}}</div>
    </div>
    
    <div class="form-group">
        <label for="message">Message</label>
        <div class="input-group">
            <textarea name="message" id="" cols="30" rows="10" class="form-control">{{ old('message')}}</textarea>
        </div>
        <div>{{$errors->first('message')}}</div>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
@endsection

