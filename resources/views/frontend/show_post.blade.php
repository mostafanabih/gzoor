@extends('frontend.site.app')

@section('content')
  <!-- Start _post -->
  <div class="blog blog-post ">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-10 mx-auto">
            <!--post heading area2021-->
            
            <h2 class="post-title">{{$info->name}}</h2>
            <div class="post-img-wrapper post-featured-area"><img class="featured-img" loading="lazy" src="{{asset("storage/$info->image")}}" alt="Featured Image"></div>
          </div>
          <div class="col-12 col-lg-9 mx-auto">
            <div class="post-main-area">
              <div class="post-info"><a class="info post-cat" href="{{route('show_post',$info->id)}}"><i class="bi bi-bookmark icon"></i></i>{{$info->type}}</a><a class="info post-author" href="#"><i class="fas fa-user icon"></i>{{$info->user}}</a><a class="info post-date" href="#"><i class="fas fa-history icon"></i>{{ $info->created_at->format('d M Y') }}</a></div>
              <div class="post-content">
                <p class=" first-litter post-text">
                  {{$info->description}}
                  
                </p>
                
              </div>
              <!--tags panel-->
              
             
              <!--other-posts panel-->
              <div class="other-posts panel">
                <h6 class="panel-title">المدونات الاخري </h6>
                <div class="row">
                  @foreach($posts as $key => $post)
                  <div class="col-12 col-sm-6 mb-3">
                    <div class="prev-post"><a class="other-post-link" href="{{route('show_post',$key > 0 ? $posts[$key - 1]->id : $post->id)}}">
                        <div class="other-post-img" title="Previous Post"><img class="img-fluid" loading="lazy" src="{{asset("storage/$post->image")}}" alt="other posts Image"><i class="bi bi-chevron-left icon "></i>
                        </div>
                        <h6 class="other-post-title">{{$post->name}}</h6></a></div>
                  </div>
                  @endforeach
                  
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End _post -->
    @endsection





   