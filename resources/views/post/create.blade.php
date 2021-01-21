				@extends('backend')
				@section('content')

				
					<form action="{{route('post.store')}}" class="form-inline justify-content-center mt-5" method="POST" enctype="multipart/form-data" style="margin-top: 100px;">
						@csrf
						<div id="myCard">
							<div class="card " style="width: 500px;">
  								<div class="card-header">
   							 <span style="font-size: 30px;"><strong>Insert Form</strong></span>
   				 			<a href="{{route('post.index')}}" class="btn btn-primary float-right" >Back</a>
  						</div>
  						<div class="card-body">
  							<div class="row">
  								<div class="col-lg-4">
									<div class="form-group">
										<label for="name">Post Title</label>

											<input id="name" name="name" type="text" class="@error('name') is-invalid @enderror">

											@error('name')
											    <div class="alert alert-danger"><small>{{$message}}</small></div>
											@enderror
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label for="name1">Picture</label>
										<input type="file" name="image" id="name1" class="form-control" multiple="">
										@error('image')
											    <div class="alert alert-danger"><small>{{$message}}</small></div>
										@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label for="name1">Description</label>
											<input type="text" name="description" id="name1" class="form-control">
											@if($errors->has('description'))
											<p class="text-danger">Please Fill the field</p>
											@endif
									</div>
								</div>
							</div>
							</div>
						</div>
			<div class="row form-inline justify-content-center">
				<div class=" mt-3">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="form-group ">
						<button type="submit" class=" btn btn-success mr-lg-3 form-control">Insert</button>
						<button type="reset" class="btn btn-primary ml-lg-3   form-control">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</form>
					
			
@endsection
@section("js")
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    var route = "{{ url('autocomplete') }}";
    $('#name').typeahead({
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
                return process(data);
            });
        }
    });
</script>   
@endsection
