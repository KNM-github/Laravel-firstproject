@extends('backend')
@section('content')

<!-- Material form subscription -->
  <div class="card mt-3"style="width: 500px;margin: 0 auto;float:none;margin-bottom: 30px;margin-top: 100px;" id="myCard" >

	    <h5 class="card-header info-color white-text text-center py-4 bg-success" >
	        <strong>School Info</strong>
	    </h5>

    <!--Card content-->
    	<div class="card-body  px-lg-5">

        <!-- Form -->
        <form  class="text-center mr-5" style="color: skyblue;" action="{{route('school.store')}}" enctype="multipart/form-data" method="POST">
                @csrf

            <!-- Name -->
            <div class="md-form mt-3">
            	<label>Name</label>
                <input type="text" name="name" id="sname" class="form-control">
                
            </div>

            <div class="md-form mt-3">
            	<label for="">Email</label>
                <input type="text" name="email" id="semail" class="form-control">
                
            </div>

             <div class="md-form mt-3">
            	<label for="materialSubscriptionFormPasswords">Phone</label>
                <input type="text" name="phone" id="sphone" class="form-control">
                
            </div>

            <div class="md-form mt-3">
            	<label for="materialSubscriptionFormPasswords">Profile</label>
                <input type="file" name="image" id="sprofile" class="form-control">
                
            </div>
            <div class="md-form mt-3">
            	<label for="materialSubscriptionFormPasswords">Students</label>
            	<select  class="form-control"  name="pname">
            		@foreach($posts as $post)
            		<option value="{{$post->id}}">
            			{{$post->name}}
            		</option>
            		@endforeach
                </select>
            </div>

            <!-- E-mai -->
            
            <!-- Sign in button -->
            <button class="btn btn-success mt-3" type="submit">Save</button>

        	</form>
        <!-- Form -->

    	</div>

	</div>

		

	



<!-- Material form subscription -->

@endsection