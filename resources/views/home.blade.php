@extends('layout')
@section('content')


<div class="container">
    <form action="/detail" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">

                    <label  for="name" class="form-label">Full Name:</label>
                    <input name="name" type="text" class="form-control">
                    <div class="alert-danger">{{$errors->first('name')}}</div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label  for="email" class="form-label">Email Address:</label>
                    <input name="email" type="email" class="form-control">
                    <div class="alert-danger">{{$errors->first('email')}}</div>
                  </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label  for="mobile" class="form-label">Mobile Number</label>
                    <input name="mobile" type="text" class="form-control">
                    <div class="alert-danger">{{$errors->first('mobile')}}</div>
                  </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label  for="house" class="form-label">House Number</label>
                    <input name="house" type="text" class="form-control">
                    <div class="alert-danger">{{$errors->first('house')}}</div>
                  </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-sm-12">
                <div class="mb-3">
                    <label  for="address" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control">
                    <div class="alert-danger">{{$errors->first('address')}}</div>
                  </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
             </div>       
                
            </div>
        </div>
    
    
    </form>
</div>

<div class="container custom">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
        <h2>User Details</h2>
        </div>
    </div>
    

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                  <th>Email Address</th>
                  <th>Mobile Number</th>
                  <th>House Number</th>
                  <th>Address</th>
                </tr>
              </thead>
    @foreach ($userdetail as $detail)
           <tbody>
                 <tr>
                  
                  <td>{{$detail->name}}</td>
                  <td>{{$detail->email}}</td>
                  <td>{{$detail->mobile}}</td>
                  <td>{{$detail->house}}</td>
                  <td>{{$detail->address}}</td>
                </tr>
              </tbody>
    @endforeach
</table>
</div>

@endsection