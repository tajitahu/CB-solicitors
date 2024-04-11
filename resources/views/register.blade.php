@extends('navigation.master')

@section('login','active')

@section('content')

<!-- CONTACT SECTION -->
<section class="whiteSection commonSection clearfix">
	<div class="container">
		<div class="main-content">
			<div class="row contact-info">
				<div class="col-sm-3 text-center"></div>

				<div class="col-sm-6">
                    <div class="sectionTitle text-center">
                        <p><b>Create account</b></p>
                    </div>
					<div class="panel formPanel">
                        <div class="panel-body">
                            <form action="#" method="POST" role="form">
                                <div class="form-group formField formField-left">
                                    <label class="form-label" for="username">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter first name" required>  
                                    <div class="text-danger">
                                       @error('fname')
                                       {{ $message }}
                                       @enderror
                                   </div>                             
                                </div><!--end form-group--> 

                                <div class="form-group formField formField-right">
                                    <label class="form-label" for="username">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter last name" required> 
                                    <div class="text-danger">
                                        @error('lname')
                                        {{ $message }}
                                        @enderror
                                    </div>                              
                                </div><!--end form-group--> 

                                <div class="form-group formField formField-left">
                                    <label class="form-label" for="useremail">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required> 
                                    <div class="text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </div>                              
                                </div><!--end form-group-->

                                <div class="form-group formField formField-right">
                                    <label class="form-label" for="mobileNo">Mobile Number</label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" required> 
                                    <div class="text-danger">
                                        @error('phone')
                                        {{ $message }}
                                        @enderror
                                    </div>                             
                                </div><!--end form-group--> 

                                <div class="form-group formField formField-left">
                                    <label class="form-label" for="useremail">Practice Area</label>
                                    <select class="form-control" name="specialty" id="specialty">
                                        <option selected="" disabled="">Select area of practice</option>
                                        @foreach ($practiceAreas as $specialty)
                                            <option value="{{ $specialty->name }}">{{ ucwords($specialty->name) }}</option>
                                        @endforeach
                                    </select> 
                                    <div class="text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </div>                              
                                </div><!--end form-group-->

                                <div class="form-group formField formField-right">
                                    <label class="form-label" for="useremail">Speciality</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="eg. inheritance"> 
                                    <div class="text-danger">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </div>                              
                                </div><!--end form-group-->

                             
                                <div class="form-group formField ">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group formField text-center ">
                                    <button type="submit" class="btn btn-common btn-full-round btn-theme" value="Submit Request">Resister</button>
                                </div>
                            </form>
                            <div class="form-group formField ">
                                <p>Already have an account ? <a href="{{ route('login')}}">Log in</a></p>
                            </div> 
                        </div>
                    </div>
				</div>

				<div class="col-sm-3 text-center"></div>
			</div>

		</div>
	</div>
</section>


@endsection