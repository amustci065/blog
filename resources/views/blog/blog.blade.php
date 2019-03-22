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
                                <h3>Blog</h3>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li>/</li>
                                    <li>Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<!-- End Page Title Area -->
      
        <!-- Start Blog Area -->
        <section class="blog-area blog-style-two ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-7">
                        <div class="row">

                                @foreach($posts as $post)

                            <div class="col-lg-6 col-md-12">  
                                     
                                <div class="single-blog-post">
                                     
                                    <div class="thumb">
                                            
                                        <img src="{{ $post->image_url }}" alt="blog-img">
                                        <div class="blog-link">
                                            <a href="{{ route('blog.show', $post->id) }}"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="date">
                                            <span>{{ $post->date }}</span>
                                        </div>
                                        
                                    </div>
                                   
                                    <div class="post-content">
                                        <h3><a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a></h3>
                                        <p>{{ $post->excerpt }}</p>
                                    </div>
                                    <div class="post-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-user"></i> {{ $post->author->name }}
                                            </a></li>
                                            <li><a href="#"><i class="fa fa-heart-o"></i> 301</a></li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i> 31</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            @endforeach                           

                            <div class="col-lg-12 col-md-12">
                                <div class="pagination-area">
                                    <nav aria-label="Page navigation">
                                        {{ $posts-> links() }}
                                    </nav>
                                </div>
                            </div>
                        </div>
		            </div>
                   @include('layouts.sidebar') 
                   
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        
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