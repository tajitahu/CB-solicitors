@extends('navigation.master')

@section('solicitors','active')

@section('content')

<!-- WHITE SECTION -->
<section class="whiteSection clearfix detail-section  lighter-section">
	<div class="container">
		<div class="main-content">

			<div class="attorneys-profile commonSection border-bottom">
			  <div class="row">
				<div class="col-sm-3 col-xs-12">
				  <img src="{{ asset('user/img/home/team4.jpg') }}" alt="Image" class="img-responsive">
				</div>
				<div class="col-sm-9 col-xs-12 profile-content">
				  <div class="sectionTitle text-left">
					<h2>Mark Brown</h2>
				  </div>
				  <p class="team-rank">Solicitor</p>
				  <p class="teamDetail">A senior attorney with Rastegar Law Group who practices employment law, representing plaintiffs in litigation involving wrongful termination, harassment, and wage & hour class actions. </p>
				  <div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12 profile-contact">
					  <div class="titleSmall">
						<h3>Practice Areas</h3>
					  </div>
						<li>Employment Litigation</li>
						<li>Business Litigation</li>
					</div>
					
				  </div>
				</div>
			  </div>
			</div>
	  
			<div class="padding-topSmall">
			  <div class="padding-topSmall">
				<div class="titleSmall">
				  <h3><u>Biography</u></h3>
				</div>
				<p style="margin-left: 30px;"> He practices employment law, representing plaintiffs in litigation involving wrongful termination, harassment, and wage & hour class actions. Over his 29 plus years of representing employees in litigation, Mr. Perlman has obtained millions of dollars in recovery for plaintiffs working in numerous industries throughout the State of California.

					He earned his Juris Doctor degree in 1993 from the University of California, Davis, and his B.A. in Philosophy in 1990 from the University of California, Irvine. He is admitted to the State Bar of California, and the U.S. District Courts throughout the State.</p>
			  </div>
			  <div class="padding-topSmall">
				<div class="titleSmall">
				  <h3><u>Education</u></h3>
				</div>
				<li style="margin-left: 30px;">Bachelors on LLB, <span>1980</span> - DePaul University College of Law</li>
				<li style="margin-left: 30px;">Masters on LLB, <span>1980</span> - DePaul University College of Law</li>
				<li style="margin-left: 30px;">PHD on Civil Law, <span>1980</span> - DePaul University College of Law</li>
			  </div><br>
			  <div class="profile-text padding-topSmall">
				<div class="titleSmall">
				  <h3><u>Professional Associations and Memberships</u></h3>
				</div>
				<li style="margin-left: 30px;">London State Bar</li>
			  </div><br>
			 
			</div>
	  
		  </div>
	</div>
</section>


@endsection