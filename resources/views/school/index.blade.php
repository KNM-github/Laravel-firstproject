@extends('backend')
@section('content')

<div id="myCard">

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">

<div class="card">
  <div class="card-header">
    Featured
    <a href="{{route('school.create')}}"  class="btn btn-primary float-right" >Insert</a>
  </div>
  <div class="card-body">
    <div >
    <h5 >Special title treatment</h5>
    
</div>
   <table class="table table-dark table-responsive">
  <thead>
    <tr >
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">sName</th>
      <th scope="col">sImage</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php
    $i=1;
    @endphp
    @foreach($schools as $school)
    <tr>
      <td>{{$i}}</td>
      <td>{{$school->sname}}</td>
      <td><img src="/images/{{$school->sprofile}}" width="100"></td>
      <td>{{$school->semail}}</td>
      @foreach($school['post'] as $post)
      <td>{{dd($post->name)}}</td>
      {{-- <td><img src="/images/{{$post->picture}}" width="100"></td> --}}
      @endforeach
      <td>
                            <div class="form-button-action">

                              <a href="" class="btn  btn-primary ">Edit</a>

                              <form method="POST" action="" class="d-inline" onsubmit="return confirm('Are you sure?');">
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
</div>
</div>
@endsection
