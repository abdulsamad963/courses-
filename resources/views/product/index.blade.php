@extends('product.layout')
@section('content')

<div class="jumbotron">

 

   
  <p>لأضافة منتج جديد</p> 
  <a class="btn btn-primary btn-lg" href="{{ route('products.create') }}" role="button">create</a>
</div>

<div class="container">

@if ($message =Session::get('success'))
    
@endif
<div class="alert alert-primary" role="alert">
{{$message}}
</div>
</div>
<div class="container">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">on</th>
        <th scope="col">product name</th>
        <th scope="col">product price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $item)
          
    @php 
       $i=0; 
   
    @endphp
      <tr>
        <th scope="row">{{++$i}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>
          <div class="container">
            <div class="row">
              <div class="col-sm">
                <a  class="btn btn-primary" href="{{ route('products.show' ,$item->id )}}">show</a>
              </div>
              <div class="col-sm">
             
                <a  class="btn btn-success" href="{{ route('products.edit',$item->id )}}">Edit</a>
              </div>
              <div class="col-sm">


                <form action="{{ route('products.destroy',$item->id ) }}" method="POST">
          
                  @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
                  </form>

              </div>
            </div>
          </div>
      

        </td>
      </tr>
   @endforeach
    </tbody>
  </table>
  {{$products->links() }}

</div>
@endsection