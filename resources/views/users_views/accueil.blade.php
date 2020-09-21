@extends('users_views/layouts/master')

@section('content')


<div><marquee behavior="" direction=""><h2>Bienvenue  Sur l'agenda numérique de  @foreach($universites  as $universite) {{$universite->nom_uiv}} 	@endforeach!</h2></marquee> </div>
  <!--================ Start Department Area =================-->
 
 
  
  <div class="department_area section_gap border">

        <div class="container">
            <div class="row align-items-center  ">
                <div class="col-lg-6 ">
                    <div class="dpmt_courses">
                        <div class="row">
                            <!-- single course -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100  ">
                                <div class="single_department ftk_border">
                                  
                                    <h4>IGEDD</h4>
                                </div>
                            </div>
                             <!-- single course -->
                             <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100 ">
                                <div class="single_department ftk_border">
                                  
                                    <h4>SEA</h4>
                                </div>
                            </div>
                            <!-- single course -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100 ">
                                <div class="single_department ftk_border">
                                  
                                    <h4>SDS</h4>
                                </div>
                            </div>
                              <!-- single course -->
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100 ">
                                <div class="single_department ftk_border">
                                  
                                    <h4>LAC</h4>
                                </div>
                            </div>
                              <!-- single course -->
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100 ">
                                <div class="single_department ftk_border">
                                  
                                    <h4>SEG</h4>

                                </div>
                            </div>
                              <!-- single course -->
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100 ">
                                <div class="single_department ftk_border">
                                  
                                    <h4>ISPP</h4>
                                </div>
                            </div>
                              <!-- single course -->
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100 ">
                                <div class="single_department ftk_border">
                                  
                                    <h4>IGEDD</h4>
                                </div>
                            </div>
                            
                              <!-- single course -->
                              <div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100 ">
                                <div class="single_department ftk_border">
                                  
                                    <h4>IGEDD</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5 entry">
                 
                    <div class="dpmt_right border ">
                    @foreach($universites as $universite)
                    <h2> <img src=" {{asset('storage').'/'.$universite->logo}}" style="width:100px;height:100px;" class="bf5  rounded-circle"> </h2>
                    <p> {{$universite->historique}}</p>
                     	@endforeach!
                                                <a href="#" class="primary-btn text-uppercase">Explore Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Department Area =================-->

<!--============== Barre horizontal de division =================-->
<div class="ftk_sticky2 " id="search_input_box">
                    <div class="container   ">
                    <h2 class="ftk_header_text  " >TOP ACTUALITE </h2>
                        
                    </div>
    </div>
<!--================Fin Barre horizontal de division =================-->

	<!--================ TOP ACTUALITE Courses Area =================-->
	<div class="popular_courses lite_bg ">
		<div class="container bg bg-white border">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
					<h2>Dernieres infos education</h2>
						<p>Toute l'actualité sur le sujet Éducation. Consultez 
                        l'ensemble des articles, reportages, directs, </p>	</div>
				</div>
            </div>
            <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-10 entries">
          <?php $i=0; ?>
        @foreach($actualites as $actualite)
        <?php $i++; ?>
       
            <article class="entry">

              <div class="entry-img">
                 <img src=" {{asset('storage').'/'.$actualite->image}}" style="width:900px;height:400px;" class="bf5  "> </td>
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{$actualite->titre}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"> @foreach($universites  as $universite) {{$universite->nom_uiv}} 	@endforeach</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$actualite->created_at}}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">Commentaire</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {{$actualite->description}}
               </p>
                <div class="read-more">
                  <a href="blog-single.html">Lire plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            <article class="entry">
            @endforeach

           

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

  
        </div>

      </div>
    </section><!-- End Blog Section -->

		</div>
	</div>
	<!--================ End Popular Courses Area =================-->
<br>

<!--============== Barre horizontal de division =================-->
    <div class="ftk_sticky2 " id="search_input_box">
                    <div class="container   ">
                    <h2 class="ftk_header_text  " >communiqué officiel </h2>
                        
                    </div>
    </div>
<!--================Fin Barre horizontal de division =================-->

<!--================DEBUT Section communique officiel =================-->
<hr>

<div class="section-top-border text-right popular_courses lite_bg p-1  ml-5 mr-5 mb-1 slow-transition">
				<h3 class="mb-30 title_color">Right Aligned</h3>
				<div class="row">
					<div class="col-md-8">
                     <h2 class="text-center">Communiqué 00014</h2>
						<p class="text-right">
                        Le Ministre de l'Education Nationale et de l'Alphabétisation se réjouit de la reprise progressive des cours dans la quasi-totalité des établissements scolaires du primaire et du secondaire.
                        Il informe  se faisant tous les enseignants ayant effectivement repris leurs activités et dont les listes ont été communiquées à la division des ressources humaines par le biais des DPE DCE 
                        depuis le début du mois de novembre 2018, que  leurs soldes et accessoires de soldes de novembre 2018,  
                        leur seront entièrement payés conformément aux dispositions de l'article 70 du statut général de la fonction 
                        publique.
                        Par ailleurs pour des raisons de qualité, les contractuels en service dans nos écoles seront également pris en charge après la remontée de leurs fiches d'évaluation de pratique de classe.
                        Par conséquent, le département de l'Education Nationale et de l'Alphabétisation invite les intéressés à poursuivre sans relâche leurs tâches quotidiennes. Il encourage l'ensemble du personnel enseignant en situation de classe à se mettre à la tâche afin de mener à bien l'exécution normale des programmes d'enseignement.
                        Le Ministre</p>
						<p class="text-right">Before we discuss all of the things that could be affecting your PC’s performance, let’s
							talk a little about what symptoms</p>
					</div>
					<div class="col-md-4 border border-warning">
						<img src="users/img/ftk-img/2ie.jpg" alt="" class="img-fluid mr-2">
					</div>
                </div>
                <hr>
</div>

@endsection