@extends('product.layout')
@section('content')
<div class="container" style="padding-top: 12%">

    <div class="card">


  
     <div class=" card-body">
                <p class="card-text">product name: {{$product->name}}</p>
    </div>
  </div>

</div>
</div>
   


<div class="container" style="padding-top: 2%" >

    @csrf 
    @method('PUT')
    <div class="form-group">
      <label for="exampleFormControlInput1">{{$product->name}}</label>
    
    </div>


    <div class="form-group">
        <label for="exampleFormControlInput1">{{$product->price}}</label>
    
      </div>



    <div class="form-group">
      <label for="exampleFormControlTextarea1">     {{$product->detall}}</label>
 
   
      </textarea>
    </div>



<div class="form-group">



</div>
 

    
</div>

@endsection
