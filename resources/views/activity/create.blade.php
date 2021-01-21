				@extends('backend')
				@section('content')

				
					<form action="{{route('act.store')}}" method="POST" style="margin-top: 100px;">
						@csrf
						<div id="myCard">
							<div class="card">
  								<div class="card-header">
   							 <span style="font-size: 30px;"><strong>Insert Form</strong></span>
   				 			<a href="{{route('act.index')}}" class="btn btn-primary " style="margin-left: 700px;" >Back</a>
  						</div>
  						<div class="card-body">
							
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="name1">Name</label>
											<input type="text" name="name" id="name1" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="name1">About</label>
											<input type="text" name="image" id="name1" class="form-control" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="name1">Description</label>
											<input type="text" name="description" id="name1" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					
					<div class="row mt-3">
					<div class="col-lg-12 col-md-12 col-sm-12 ml-5">
						<button type="submit" class="btn btn-success " >Insert</button>
						<button type="reset" class="btn btn-primary ">Cancel</button>
					</div>
				</div>

					</form>
					
			
					@endsection
