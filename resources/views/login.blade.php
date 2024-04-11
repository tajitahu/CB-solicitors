@extends('navigation.master')

@section('login','active')

@section('content')

<!-- CONTACT SECTION -->
<section class="whiteSection commonSection clearfix">
	<div class="container">
		<div class="main-content">
			<div class="row contact-info">
				<div class="col-sm-4 text-center"></div>

				<div class="col-sm-4">
                    <div class="sectionTitle text-center">
                        <p><b>Login to get more features</b></p>
                    </div>
					<div class="panel formPanel">
                        <div class="panel-body">
                            <form action="#" method="POST" role="form">
                                <div class="form-group formField ">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="form-group formField ">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group formField text-center ">
                                    <button type="submit" class="btn btn-common btn-full-round btn-theme" value="Submit Request">Login</button>
                                </div>
                            </form>
                            <div class="form-group formField ">
                                <p>Don't have an account ?  <a href="{{ route('register')}}" >Resister</a></p>
                            </div> 
                        </div>
                    </div>
				</div>

				<div class="col-sm-4 text-center"></div>
			</div>

		</div>
	</div>
</section>


@endsection