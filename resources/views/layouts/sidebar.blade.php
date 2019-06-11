

<div class="col-lg-4 col-md-5 col-sm-5">
        <div class="side-bar mb-0">
            <!--
            <div class="side-bar-box search-box">
                <form>
                    <input type="text" class="form-control" name="search" id="search-input" placeholder="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            -->
            <div class="side-bar-box categories-box">
                <h3 class="title">Categories</h3>
                @foreach ($categories as $category)
                <ul>
                    <li><a href="{{ route('category', $category->slug) }}"><i class="fa fa-angle-double-right"></i> {{ $category->title }} </a>
                    <span class="badge pull-right"> {{ $category->posts->count() }}</span>
                    </li>
                  
                    
                </ul>
                @endforeach
            </div>
            <!--
            <div class="side-bar-box tags-box">
                <h3 class="title">Tags</h3>
                <ul>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Law</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Illegal</a></li>
                    <li><a href="#">Criminal</a></li>
                    <li><a href="#">Family</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Civil</a></li>
                    <li><a href="#">Divorce</a></li>
                    <li><a href="#">Investment</a></li>
                </ul>
            </div>
            -->
            
            <div class="side-bar-box recent-post mb-0">
                <h3 class="title">Recent Post</h3>
               
               
                <div class="single-recent-post">
                    
                   
                    <div class="recent-post-img">
                        <a href="{{ route('blog.show', $post->slug) }}"><img src="{{ $post->image_url }}" alt="blog-img"></a>
                    </div>
                  
                    <div class="recent-post-content">
                        <ul>
                            <li><a href="#">By Admin</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i> {{ $post->date }}</a></li>
                        </ul>
                        <h3><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h3>
                    </div>
                   
                </div>
                
               
            </div>
           
        </div>
    </div>

    