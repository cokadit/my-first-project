<label for="name">Name</label>
<div class="input-group">
    <input type="text" name="name" value="{{ old('name')?? $customer->name}} " class="form-control ">
    <div>{{$errors->first('name')}}</div>
</div>

<label for="email">Email</label>
<div class="input-group">
    <input type="text" name="email" value="{{ old('name') ?? $customer->email}}" class="form-control ">
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

<div class="form-group">
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id" class="form-control ">
        @foreach ($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
    </select>
</div>

@csrf