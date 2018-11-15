<?php
$header_json = json_decode(file_get_contents("json/header.json"),true);
$footer_json = json_decode(file_get_contents("json/footer.json"),true);
?>
@extends("FrontEnd.Layout.master")

@section("content")


<section class="engine"><a href="https://mobirise.info/x">css templates</a></section><section class="header8 cid-r9hgk6gCaj mbr-fullscreen mbr-parallax-background" id="header8-i">

    

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center py-2 mbr-bold mbr-fonts-style display-1">
                        {{ $header_json['en_title'] }}
                </h1>
                <p class="mbr-text align-center py-2 mbr-fonts-style display-5">
                        {{ $header_json['en_description'] }}
                </p>
                <!-- <div class="mbr-media show-modal align-center py-2" data-modal=".modalWindow">
                         <span class="mbri-play mbr-iconfont"></span>
                </div> -->
                <!-- <div class="icon-description align-center font-italic pb-3 mbr-fonts-style display-7">
                        Icon's descriptions
                </div> -->
                <div class="mbr-section-btn text-center">
                     <a class="btn btn-md btn-secondary display-4" href="{{ url('about' )}}">MORE</a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="modalWindow" style="display: none;">
            <div class="modalWindow-container">
                <div class="modalWindow-video-container">
                    <div class="modalWindow-video">
                        <iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="http://www.youtube.com/watch?v=uNCr7NdOJgw"></iframe>
                    </div>
                    <a class="close" role="button" data-dismiss="modal">
                        <span aria-hidden="true" class="mbri-close mbr-iconfont closeModal"></span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content9 cid-r9hf6aMvAx" id="content9-c">
    
     

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">
                    {{ $header_json['en_description'] }}
                </div>
            <hr class="line" style="width: 25%;">
        </div>
        </div>
</section>

<section class="cid-r9heLGC5TG" id="pricing-tables1-8">

    

    
    <div class="container">
        <div class="media-container-row">
			
			
				@foreach($packages as $package)
				<?php
					
				$features = \App\PackageFeatures::where('package_id',$package['id'])->get();
					
					
				?>

			            <div class="plan col-12 mx-2 my-2 justify-content-center col-lg-4">
			                <div class="plan-header text-center pt-5">
			                    <h3 class="plan-title mbr-fonts-style display-5">
			                        {{ $package['ar_title'] }}
			                    </h3>
			                    <div class="plan-price">
			                        <span class="price-value mbr-fonts-style display-5">
			                            $
			                        </span>
			                        <span class="price-figure mbr-fonts-style display-1">
			                              {{ $package['price'] }}</span>
			                        <!-- <small class="price-term mbr-fonts-style display-7">
			                            per month
			                        </small> -->
			                    </div>
			                </div>
			                <div class="plan-body pb-5">
			                    <div class="plan-list align-center">
			                        <ul class="list-group list-group-flush mbr-fonts-style display-7">
			                           
									   
									  @foreach($features as $feature)
			                            <li class="list-group-item">
			                                {{ $feature['en_feature'] }}
			                            </li>
										@endforeach
			                        </ul>
			                    </div>
			                    <div class="mbr-section-btn text-center pt-4">
			                        <a href="{{ url('register?package='.$package['id']  ) }}" class="btn btn-primary display-4">JOIN NOW</a>
			                    </div>
			                </div>
			            </div>
						
				
				@endforeach
			
			
			
		</div>
    </div>
</section>

<section class="progress-bars3 cid-r9hf1gfLe9" id="progress-bars3-b">
 
     


<section class="header4 cid-r9hfj1N5PC mbr-parallax-background" id="header4-e">

    

    

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="media-content col-md-10">
                <h1 class="mbr-section-title align-center mbr-white pb-3 mbr-bold mbr-fonts-style display-1">
                    INTRO WITH IMAGE
                </h1>
                
                <div class="mbr-text align-center mbr-white pb-3">
                    <p class="mbr-text mbr-fonts-style display-5">
                        Intro with background image, color overlay and a picture at the bottom. Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface.
                    </p>
                </div>
                <div class="mbr-section-btn align-center">
                    <a class="btn btn-md btn-primary display-4" href="https://mobirise.co">LEARN MORE</a>
                    <a class="btn btn-md btn-white-outline display-4" href="https://mobirise.co">LIVE DEMO</a>
                </div>
            </div>
            <div class="mbr-figure pt-5">
                <img src="assets/images/01.jpg" alt="Mobirise" style="width: 60%;">
            </div>
        </div>
    </div>
</section>

<section class="map1 cid-r9hfGomg1t" id="map1-h">

     

    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
</section>

<section class="cid-r9heTcp3ab" id="social-buttons1-9">
    
    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-section-title mbr-fonts-style display-2">
                    SHARE THIS PAGE!
                </h2>
                <div>
                    <div class="mbr-social-likes" data-counters="false">
                        <span class="btn btn-social facebook mx-2" title="Share link on Facebook">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter mx-2" title="Share link on Twitter">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                        <span class="btn btn-social plusone mx-2" title="Share link on Google+">
                            <i class="socicon socicon-googleplus"></i>
                        </span>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection