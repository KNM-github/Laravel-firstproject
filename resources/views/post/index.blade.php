@extends('backend')
@section('content')

<div id="myCard">

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">

<div class="card">
  <div class="card-header">
    Featured
    <a href="{{route('post.create',['items' => $items])}}"  class="btn btn-primary float-right" >Insert</a>
  </div>
  <div class="card-body">
    <div >
    <h5 >Special title treatment
      <div class="row">
      <div class="col-sm-4">
            <label class="control-label">Pagination</label>
            <div>
            <input type="text" class="form-control" value="5" disabled>
            </div>
        </div>
        <div class="col-sm-4">
            <label class="control-label">Year</label>
            <select id="year" class="form-control">
                @foreach(config('option_common.year') as $key => $value)
                    <option value="{{ $value }}"  @if ($year == $value) selected @endif >{{ $value }}</option>
                @endforeach
            </select>
        </div>
      </div>
    </h5>
    
</div>
   <table class="table table-dark table-responsive">
  <thead>
    <tr >
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Picture</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
      @php
    $i=1;
    @endphp
    @foreach($posts as $post)
    <tr>
      <td>{{$i}}</td>
      <td>{{$post->name}}</td>
      <td><img src="/images/{{$post->picture}}" width="100"></td>
      <td>{{$post->description}}</td>
      <td>
        <div class="form-button-action">
          <a href="{{route('post.edit',$post->id)}}" class="btn  btn-primary ">Edit</a>
          <form method="POST" action="{{route('post.destroy',$post->id)}}" class="d-inline" onsubmit="return confirm('Are you sure?');">
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
<div class="row data-pagination">
  <div class="col-md-4 col-sm-12 col-lg-4">
      <p class="pagination">{{ $posts->total() . ' 件中 ' . $posts->firstItem() . ' から ' . $posts->lastItem() . ' まで表示'}}</p>
  </div>
  <div class="col-md-8 col-sm-12 col-lg-8">
      {{ $posts->links() }}
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
@section("js")
<script >
  $('#pagination').on('change', function() {
            window.location = "{{URL::route('post.index')}}?items=" + this.value;
        });
  $('#year').on('change', function() {
            window.location = "{{URL::route('post.index')}}?year=" + this.value;
        });
</script>
@endsection
