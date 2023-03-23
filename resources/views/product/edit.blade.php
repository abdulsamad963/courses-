@extends('product.layout')
@section('content')
<div class="container" style="padding-top: 12%">

    <div class="card">


  
     <div class=" card-body">
                <p class="card-text">product name: {{$product->name}}</p>
                <a href="{{route('products.index')}}">Back</a>
    </div>
  </div>

</div>
</div>
   


<div class="container" style="padding-top: 2%" >
<form action="{{ route('products.update',$product->id)}}"method="POST" >
    @csrf 
    @method('PUT')
    <div class="form-group">
      <label for="exampleFormControlInput1">Name</label>
      <input type="text" name="name" class="form-control"  placeholder="{{$product->name}}">
    </div>


    <div class="form-group">
        <label for="exampleFormControlInput1">price</label>
        <input type="text" name="price" class="form-control"  placeholder="{{$product->price}}">
      </div>



    <div class="form-group">
      <label for="exampleFormControlTextarea1">Ditals</label>
      <textarea class="form-control" name="detall" id="exampleFormControlTextarea1" rows="3">
        {{$product->detall}}
      </textarea>
    </div>



<div class="form-group">

   <button type="submit" class="btn btn-primary">save</button> 


</div>
 
  </form>
    
</div>

@endsection
