@extends('layouts.app')

@section('content')

<div class="row m-2">
   <div class="col-md-4 mx-auto ">
      <div class="card shadow">
           <form action="#" class="form-group  m-2">

            <div class="form-group  m-1 p-2">
                <label for="">Title</label>
                <input type="text" class="form-control"  placeholder="Enter your product title">
            </div>

            <div class="form-group  m-1 p-2">
                <label for="">Description</label>
                <textarea  id="" rows="3" class="form-control" name='content' placeholder="Enter your product description" ></textarea>
            </div>

            <div class="form-group  m-1 p-2">
                <label for="">Price</label>
                <input type="number" class="form-control" placeholder="Enter your product price">
            </div>

            <div class="form-group  m-1 p-2">
                <label for="">Category</label>
                <input type="text" class="form-control" placeholder="Enter your product category">
            </div>

            <div class="form-group  m-1 p-2">
                <label for="">Quantity</label>
                <input type="number" class="form-control" placeholder="Enter your product quantity avaliable">
            </div>

            <div class="form-group  m-1 p-2">
                <label for="">Image</label>
                <input type="file" class="form-control">
            </div>

            <button class="btn btn-primary my-2">Submit</button>

           </form>
      </div>
    </div>
</div>

@endsection
