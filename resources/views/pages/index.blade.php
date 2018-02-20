@extends('layout.template')
@section('content')
	<div class="container ">
        <div class="col-md-12">
					<div style="margin:50px;" class="text-center text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
						<h3 class="featurette-heading"><b>Bonjour et bienvenue !</b><br> Comment pouvons nous vous aider ?</h3>
					</div>
					<br>
					<div class="col-md-12 text-center">
						<div class="jobs__item col-md-3 ">
							<a href="" >
								<div class="jobs__item__cover" id="auto">
									<div class='jobs__filter'>
										<div class='jobs__item__title'>
                                            <h4>Assurance<br>auto</h4>

											<img src="/images/auto2.png" width="128px" height="128px">
											<hr>
											<p>
												<a href="#" class="btn with-arrow" style="border-color: #FFB74D">
													Souscrire  <i class="icon-long-arrow-right" style="color: gray"></i>
												</a>
											</p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class='jobs__item col-sm-3 col-md-3 '>
							<a href="" >
								<div class="jobs__item__cover" id="habitation" >
									<div class='jobs__filter'>
										<div class='jobs__item__title'>
												<h4>Assurance<br>habitation</h4>
											    <img src="/images/home2png.png"  width="128px" height="128px">
											    <hr>
											    <p>
													<a href="#" class="btn with-arrow" style="border-color: #FFB74D">
														Souscrire  <i class="icon-long-arrow-right" style="color: gray"></i>
													</a>
											    </p>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class='jobs__item col-sm-3 col-md-3 '>
							<a href="" >
									<div class="jobs__item__cover" id="sante" >
										<div class='jobs__filter'>
											<div class='jobs__item__title'>
												<h4>Assurance<br>Sante</h4>
												<img src="/images/Life_sante.png"  width="128px" height="128px">
												<hr>
												<p>
													<a href="#" class="btn with-arrow" style="border-color: #FFB74D">
														Souscrire  <i class="icon-long-arrow-right" style="color: gray"></i>
													</a>
												</p>
											</div>
										</div>
									</div>
							</a>
						</div>
						<div class='jobs__item col-sm-3 col-md-3 '>
							<div class="jobs__item__cover" id="bank" >
									<div class='jobs__item__title' >
										<h4>Assurance<br>Capitalisation</h4>
										   <img src="/images/Life_monney.png"  width="128px" height="128px"><br>
											 <hr>
												<p>
													<a href="#" class="btn with-arrow" style="border-color: #FFB74D">
															Souscrire  <i class="icon-long-arrow-right" style="color: gray"></i>
													</a>
												</p>

									</div>
							</div>
						</div>
					</div>
					<hr>
					<br clear="all">
					<div class='jobs__see-all row text-center'>
						<div class='col-md-12' id="bouton">
							<a class="b3-btn b3-btn-white "  href="">
								<button class="form-control text-center with-arrow"  style="width: 150px;height:90px;border-color: #2ca02c">Voir tous les assureurs</button>
							</a>
						</div>
					</div>
		    </div>
            <div class="col-md-12">

				<div class="col-md-12 text-center">

					<div class="col-md-6 col-lg-offset-3">
						<hr style="background-color: #00AEBB">
						<div style="margin-top:20px;" class="text-center text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
							<h2><b>Tout savoir sur le code CIMA</b></h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
							</p>
						</div>
						<div class="text-center" style="">
							<!-- <h2 style="margin-top:0px; margin-bottom:-5px">Tout savoir sur le code CIMA</h2> -->
							<img src="/images/Logo-CIMA.png" alt="CIMA" width="280px" height="200px">
							<p>
								La CIMA, Conférence Interafricaine des Marchés d’Assurances, est l’autorité de régulation et de contrôle des assurances pour
								l’Afrique de l’ouest et l’Afrique centrale.
								<p class="">
									Sa mission est d’accompagner les autorités nationales dans le service de l’intérêt public et dans la poursuite des objectifs
									de régulation du secteur des assurances, d’une manière optimale, en respect de la volonté des États Membres.
								</p>
								<a href="" class="btn btn-default">En savoir plus</a>
								<a href="" class="btn btn-default">Télécharger</a>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="container">
							<blockquote class="quote-box">
								<p class="quotation-mark">
									“
								</p>
								<p class="quote-text">
									L’activité de l’assurance en Côte d’Ivoire est réglementée par le code des assurances des États
									membres de la Conférence Interafricaine des Marchés d'Assurance (CIMA)..
									<br>
									<button class="btn btn-default">voir plus</button>
								</p>
								<hr>
								<div class="blog-post-actions">
									<p class="blog-post-bottom pull-left">
										CIMA
									</p>
									<p class="blog-post-bottom pull-right">
										<span class="badge quote-badge">27</span> membres
									</p>
								</div>
							</blockquote>
						</div>

					</div>
				</div>
			</div>
			<div class="container">
				<div class="col-md-12">
					<div id="inbox">
						<div class="fab btn-group show-on-hover dropup">
							<div data-toggle="tooltip" data-placement="left" title="Nous suivre" style="margin-left: 5px;">
								<button type="button" class="btn btn-danger btn-io dropdown-toggle" data-toggle="dropdown">
				<span class="fa-stack fa-2x">
					<i class="fa fa-circle fa-stack-2x fab-backdrop"></i>
					<i class="fa fa-plus fa-stack-1x fa-inverse fab-primary"></i>
					<i class="fa fa-pencil fa-stack-1x fa-inverse fab-secondary"></i>
				</span>
								</button></div>
							<ul class="dropdown-menu dropdown-menu-right" role="menu">
								<li><a href="#" data-toggle="tooltip" data-placement="left" title="facebook"><i class="icon-facebook-f"></i></a></li>
								<li><a href="#" data-toggle="tooltip" data-placement="left" title="instagram"><i class="icon-instagram"></i></a></li>
								<li><a href="#" data-toggle="tooltip" data-placement="left" title="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" data-toggle="tooltip" data-placement="left" title="gmail"><i class="icon-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection