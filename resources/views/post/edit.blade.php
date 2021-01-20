				@extends('backend')
				@section('content')

				
					<form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div id="myCard">
							<div class="card">
  								<div class="card-header">
   							 <span style="font-size: 30px;"><strong>Edit Form</strong></span>
   				 			<a href="{{route('post.index')}}" class="btn btn-primary " style="margin-left: 700px;" >Back</a>
  						</div>
  						<div class="card-body">
							
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="name1">Name</label>
											<input type="text" name="name" id="name1" value="{{$post->name}}" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="name1">Picture</label>
											<input type="file" name="image" class="form-control" multiple="">
													<img src="/images/{{($post->picture)}}" width="100"> 

											<input type="hidden" name="oldimg" value="{{($post->picture)}}">

										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="name1">Description</label>
											<input type="text" name="description" value="{{$post->description}}" id="name1" class="form-control">
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
