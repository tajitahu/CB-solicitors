@extends('navigation.master')

@section('solicitors','active')

@section('content')

<!-- WHITE SECTION -->
<section class="whiteSection clearfix detail-section  lighter-section">
	<div class="container">
		<div class="commonSection border-bottom">
			<div class="row">
				<div class="col-md-9 col-sm-8 col-xs-12">
					<div class="detail-content">
						<h2>What to expect when using a solicitor</h2>
						<p>Legal issues can be confusing and complex. Using a solicitor means they can guide you through legal processes, let you know what choices are available and answer your questions.</p>
            <p>Solicitors are legal experts and can help you with legal issues such as:</p>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="detail-left">
									<ul class="list-unstyled para-list">
										<li><i class="fa fa-check" aria-hidden="true"></i>Help with buying a house.</li>
										<li><i class="fa fa-check" aria-hidden="true"></i>Getting a divorce.</li>
										<li><i class="fa fa-check" aria-hidden="true"></i>Making a will.</li>
										<li><i class="fa fa-check" aria-hidden="true"></i>Starting your own business.</li>
										<li><i class="fa fa-check" aria-hidden="true"></i>Get legal advice.</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Legal Umbudsman.</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="detail-right">
									<ul class="list-unstyled para-list">
										<li><i class="fa fa-check" aria-hidden="true"></i>Help with resolving legal issues.</li>
										<li><i class="fa fa-check" aria-hidden="true"></i>Represent you (e.g court or tribunal).</li>
										<li><i class="fa fa-check" aria-hidden="true"></i>Verify, approve sign, stamp, legal docs.</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Other probate & conveyance duties.</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Help with drawing-up Contract (t&c, policies, nda).</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Power of attorney.</li>
									</ul>
								</div>
							</div>
						</div>

            <h3>Finding a solicitor</h3>
            <p>To find a solicitor best fit for you, <a href="{{ route('find-solicitor')}}">click here</a>.</p>

            <h3>Costs</h3>
            <p>At your first appointment, your solicitor should make you aware of:
              <br>
              <li style="margin-left: 30px;">the likely cost of the case</li><br>
              <li style="margin-left: 30px;">how they’ll charge for their service</li>
            </p>

            <p>Your solicitor must keep you updated on costs throughout your case and give you a clear bill detailing the work completed and the amount charged.</p>
          
					</div>
				</div>

			</div>
		</div>
	</div>
</section>


@endsection