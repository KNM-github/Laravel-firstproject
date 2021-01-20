				@extends('backend')
				@section('content')

				
					<form action="{{route('act.update',$product->id)}}" method="POST">
						@csrf
						@method('PUT')
						<div id="myCard">
							<div class="card">
  								<div class="card-header">
   							 <span style="font-size: 30px;"><strong>Edit Form</strong></span>
   				 			<a href="{{route('act.index')}}" class="btn btn-primary " style="margin-left: 700px;" >Back</a>
  						</div>
  						<div class="card-body">
							
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="name1">Name</label>
											<input type="text" name="name" value="{{$product->name}}" id="name1" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="name1">About</label>
											<input type="text" name="image" value="{{$product->image}}" id="name1" class="form-control" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="name1">Description</label>
											<input type="text" name="description" value="{{$product->description}}" id="name1" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="text-center mt-3">
					<div class="col-lg-12">
						<button type="submit" class="btn btn-success mr-3">Update</button>
						<button type="reset" class="btn btn-primary ml-3">Cancel</button>
					</div>
				</div>
					</form>
					
			
					@endsection
