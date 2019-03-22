@extends ('layouts.main')

 @section ('content')
        
        <!-- Start Search Popup Area -->
        <div id="search">
                <button type="button" class="close">×</button>
                <form>
                    <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- End Search Popup Area -->
            
            <!-- Start Page Title Area -->
            <div class="page-title">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <h3>Blog Details</h3>
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>/</li>
                                        <li>Blog Details</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Title Area -->
          
            <!-- Start Blog Details Area -->
            <section class="blog-details-area ptb-80">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-7 col-sm-12">
                               
                            <div class="blog-details">
                             
                                    @if ($post->image_url)
                                <div class="img">
                                       
                                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                                
                                    <div class="date">
                                        <span> {{ $post->date }} </span>
                                    </div>
                                </div>
                                @endif
                               
                                <div class="blog-details-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> {{ $post->author->name }}</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i> 301</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 31</a></li>
                                        <li><a href="#"><i class="fa fa-tag"></i> Divorce Case</a></li>
                                    </ul>
                                    <h3>{{ $post->title}}</h3>
                                    
                                    
                                    <div class="text">
                                        {{ $post->body }}
                                    </div>
                                    
                                    
                                    <div class="blog-categories">
                                        <ul>
                                            <li class="title">Categories:</li>
                                            <li><a href="#">Business Law</a></li>
                                            <li>,</li>
                                            <li><a href="#">Deffective Product</a></li>
                                            <li>,</li>
                                            <li><a href="#">Tax</a></li>
                                            <li>,</li>
                                            <li><a href="#">Divorce</a></li>
                                            <li>,</li>
                                            <li><a href="#">Insurance</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="blog-share-social">
                                        <ul>
                                            <li class="title">Did You Like This Post? Share on:</li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="post-prev-next-button">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <a href="#"><i class="fa fa-angle-left"></i> Prev Post</a>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                                                <a href="#">Next Post <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   @include('blog.comments') 
                                    
                                    
                                </div>
                            </div>
                            
                        </div>

                        @include('layouts.sidebar')
                     
                    </div>
                </div>
            </section>
            <!-- End Blog Details Area -->
            
            <!-- Start Partner Area -->
            <section class="partner-area ptb-80">
                <div class="container">
                    <div class="section-title">
                        <h3>Clinet</h3>
                        <h2>Our <span>Partner</span></h2>
                    </div>
                    <div class="row">
                        <div class="partner-slider">
                            <div class="item">
                                <a href="https://icpc.gov.ng/"><img src="/assets/img/partner-icpc.png" alt="ICPC"></a>
                            </div>
                            
                            <div class="item">
                                <a href="https://www.nigeriarights.gov.ng/"><img src="/assets/img/partner-nhrc.png" alt="National Human Right Commission"></a>
                            </div>
                            
                            <div class="item">
                                <a href="http://lagosministryofjustice.org/"><img src="/assets/img/partner-ministry-of-justice.png" alt="Lagos State Ministry of Justice"></a>
                            </div>
                            
                            <div class="item">
                                <a href="https://www.naptip.gov.ng/"><img src="/assets/img/partner-naptip.png" alt="National Agency for the Prohibition of Trafficking in Persons"></a>
                            </div>
                            
                            <div class="item">
                                <a href="https://icpc.gov.ng/"><img src="/assets/img/partner-icpc.png" alt="partner"></a>
                            </div>
                            
                            <div class="item">
                                <a href="https://www.nigeriarights.gov.ng/"><img src="/assets/img/partner-nhrc.png" alt="partner"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Partner Area -->


       @endsection