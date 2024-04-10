@extends('navigation.master')

@section('solicitors','active')

@section('content')

<!-- BLOG GRID SECTION -->
<section class="whiteSection commonSection clearfix blog blog-grid">
	<div class="container">
		<div class="main-content">
			<div class="row">
				<div class="col-md-9 col-sm-8 col-xs-12 pull-right">
					<div class="primary-content">
						
            <div class="row">
              <div class="col-sm-3 col-xs-12">
                <div class="teamContent text-center">
                  <div class="teamImage">
                    <img src="{{ asset('user/img/home/team3.jpg') }}" alt="Image" class="img-responsive">
                    <div class="overlay">
                      <a href="{{route('view-solicitor')}}"></a>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="{{route('view-solicitor')}}">Mark Brown</a></h3>
                    <p>Solicitor </p>
                    <ul class="list-inline">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-sm-3 col-xs-12">
                <div class="teamContent text-center">
                  <div class="teamImage">
                    <img src="{{ asset('user/img/home/team2.jpg') }}" alt="Image" class="img-responsive">
                    <div class="overlay">
                      <a href="{{route('view-solicitor')}}"></a>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="{{route('view-solicitor')}}">Amanda Stone</a></h3>
                    <p>Lawyer &amp; ceo</p>
                    <ul class="list-inline">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-sm-3 col-xs-12">
                <div class="teamContent text-center">
                  <div class="teamImage">
                    <img src="{{ asset('user/img/home/team4.jpg') }}" alt="Image" class="img-responsive">
                    <div class="overlay">
                      <a href="{{route('view-solicitor')}}"></a>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="{{route('view-solicitor')}}">Mark Brown</a></h3>
                    <p>Lawyer &amp; ceo</p>
                    <ul class="list-inline">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-sm-3 col-xs-12">
                <div class="teamContent text-center">
                  <div class="teamImage">
                    <img src="{{ asset('user/img/home/team1.jpg') }}" alt="Image" class="img-responsive">
                    <div class="overlay">
                      <a href="{{route('view-solicitor')}}"></a>
                    </div>
                  </div>
                  <div class="teamInfo">
                    <h3><a href="{{route('view-solicitor')}}">Amanda Stone</a></h3>
                    <p>Lawyer &amp; ceo</p>
                    <ul class="list-inline">
                      <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>

            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">Prev</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">Next</span>
                </a>
              </li>
            </ul>

                      </div>
                    </div>

                    <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="sidebar">

                <div class="block">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search by name">
                    <button type="submit" class="input-group-addon btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>

                <div class="block">
                  <h3>Filter by</h3>
                  <div class="block-inner">
                    <ul class="list-unstyled sideNav">
                      <li>
                        <form action="#" method="POST" role="form">
                          <div class="form-group">
                              <input type="text" class="form-control" name="location" placeholder="Location">
                          </div>
                          <div class="form-group">
                              <select class="form-control" name="specialty" id="specialty">
                                <option selected="" disabled="">Select specialty</option>
                                @foreach ($practiceAreas as $specialty)
                                    <option value="{{ $specialty->name }}">{{ ucwords($specialty->name) }}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                              <input type="number" class="form-control" name="fee" placeholder="Fee">
                          </div>
                          <div class="form-group">
                              <input type="number" class="form-control" name="rating" placeholder="Rating">
                          </div>
                      </form>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="block">
                  <a href="#" class="btn btn-common btn-full-round btn-theme">Apply Filter</a>
                </div>

              </div>
            </div>


			</div>
		</div>
	</div>
</section>


@endsection