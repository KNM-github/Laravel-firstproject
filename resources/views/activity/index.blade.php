@extends('backend')
@section('content')
<div id="myCard" style="margin-left: 250px;margin-top: 100px;" ng-app="myApp" ng-controller="myCtrl">
<div class="card">
  <div class="card-header">
    Featured
    <p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
<h1>Hello {%name%}</h1>
    <a href="{{route('act.create')}}" ng-click="act()" class="btn btn-primary " style="margin-left: 700px;" >Insert</a>
  </div>
  <div class="card-body">
    <div >
    <h5 >Special title treatment</h5>
    
</div>
   <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">About</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    @php
    $i=1;
    @endphp
    @foreach($products as $product)
    <tr>
      <td>{{$i}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->image}}</td>
      <td>{{$product->description}}</td>
      <td>
                            <div class="form-button-action">

                              <a href="{{route('act.edit',$product->id)}}" class="btn  btn-primary ">Edit</a>

                              <form method="POST" action="{{route('act.destroy',$product->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                      @csrf
                                      @method('DELETE')

                                      <input type="submit" name="submitbtn" class="btn btn-danger" value="Delete">
                                    </form>
                            </div>
                          </td>
                        </tr>
                        @php
                        $i++;
                        @endphp
                        @endforeach

  </tbody>
</table>
  </div>
</div>
</div>
@endsection
