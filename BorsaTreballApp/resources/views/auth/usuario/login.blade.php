@extends('layouts.master')

@section('content')
  
<div class="row" style="margin-top:40px">
  <div class="offset-md-3 col-md-6">
    <div class="card">
      <div class="card-header text-center">
        Login
      </div>
      <div class="card-body" style="padding:30px">
        <form method="POST" action="">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="form-control">
          </div>

          <div class="form-group text-center">
              <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                Login
              </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@stop