
@extends('layouts.app')
@section('content')
<section class="breadcrumb-area pt-80px pb-80px pattern-bg">
    <div class="container">
        <div class="breadcrumb-content">
            <div class="section-heading pb-3">
                <h2 class="section__title">{{$posts->title}}</h2>
            </div>
            <ul class="generic-list-item generic-list-item-arrow d-flex flex-wrap align-items-center">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog-no-sidebar.html">Student Blog area</a></li>
                <li>{{$posts->title}}</li>
            </ul>
            <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center flex-wrap fs-14 pt-2">
                <li class="d-flex align-items-center">By<a href="#">{{auth()->user()->name}}</a></li>
                <li class="d-flex align-items-center">{{$posts->created_at->format('M')}}</li>
                <li class="d-flex align-items-center"><a href="#comments" class="page-scroll">4 Comments</a></li>
                <li class="d-flex align-items-center">130 Shares</li>
            </ul>
        </div><!-- end breadcrumb-content -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="fs-20 font-weight-semi-bold">Content</h3>
                        <p class="card-text pb-3">{{$posts->messeges}}</p>
                        <p class="card-text pb-3">{{$posts->messeges}}</p>
                        <div class="row pb-3">
                            <div class="col-lg-6">
                               <div class="mt-3">
                                   <img src="/postimage/{{$posts->image}}" data-src="/postimage/{{$posts->image}}" alt="blog-img" class="img-fluid rounded-rounded lazy">
                               </div>
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                        <div class="section-block"></div>
                        <h3 class="fs-18 font-weight-semi-bold pt-3">Tags</h3>
                        <div class="d-flex flex-wrap justify-content-between align-items-center pt-3">
                            <ul class="generic-list-item generic-list-item-boxed d-flex flex-wrap fs-15">
                                <li class="mr-2"><a href="#">Web Design</a></li>
                                <li class="mr-2"><a href="#">UI Design</a></li>
                            </ul>
                            <form action="" class="d-flex" method="post">
                            <div class="share-wrap mt-2 mr-1">
                                <ul class="social-icons social-icons-styled">
                                    <li class="mr-0"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                                    <li class="mr-0"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                                    <li class="mr-0"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                                </ul>
                                <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="Toggle to expand social icons"><i class="la la-share-alt"></i></div>
                            </div>


                                            <div class="d-flex">

                                                <form action="" class="d-flex" method="post">
                                                    @csrf
                                                    <button class="btn theme-btn  mt-1 mb-2 mr-2 " type="submit">Unlike</button>

                                                </form>



                                                <form action="{{route('like',$posts->id)}}"class="d-flex" method="post" >                                                 
                                                    @csrf 
                                                    <button class="btn theme-btn  mt-1 mb-2 ml-2 " type="submit">Like</button>

                                                </form>
                                                <span class=" mt-3  ml-2">{{$posts->like->count()}} {{Str::plural('like',$posts->like->count())}}</span>

                                            </div>



                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="instructor-wrap py-5">
                    <h3 class="fs-22 font-weight-semi-bold pb-4">About the author</h3>
                    <div class="media media-card">
                        <div class="media-img rounded-full avatar-lg mr-4">
                            <img src="images/img-loading.png" data-src="images/small-avatar-1.jpg" alt="Avatar image" class="rounded-full lazy">
                        </div>
                        <div class="media-body">
                            <h5>Alex Smith</h5>
                            <span class="d-block lh-18 pt-2 pb-2">www.techydevs.com</span>
                            <p class="pb-3">I'm a growth-oriented digital marketer with a passion for content marketing, social media marketing wonders, conversion rate optimization, and keyword research. I strongly support permission marketing and earned media. More than anything</p>
                            <ul class="social-icons social-icons-styled social--icons-styled">
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-instagram"></i></a></li>
                                <li><a href="#"><i class="la la-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end instructor-wrap -->
                <div class="section-block"></div>
                <div class="comments-wrap pt-5" id="comments">
                    <div class="d-flex align-items-center justify-content-between pb-4">
                        <h3 class="fs-22 font-weight-semi-bold">Comments</h3>
                        <span class="ribbon ribbon-lg">4</span>
                    </div>
                    @foreach ($comment as $comments)
                    <div class="comment-list">



                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <div class="media-img mr-4 rounded-full">
                                <img class="rounded-full lazy" src="images/img-loading.png" data-src="images/small-avatar-1.jpg" alt="User image">
                            </div>
                            <div class="media-body">
                                <h5 class="pb-2">{{$comments->user->name}}</h5>
                                <span class="d-block lh-18 pb-2">a month ago</span>
                                <p class="pb-3">{{$comments->comment}}</p>
                                <div class="helpful-action d-flex align-items-center justify-content-between">
                                    <a class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30" href="#" data-toggle="modal" data-target="#replyModal"><i class="la la-reply mr-1"></i> Reply</a>
                                    <div class="pl-2">
                                        <span class="fs-13">{{$comments->user->post->count()}}</span>
                                        <button class="btn">Yes</button>
                                        <button class="btn">No</button>
                                    </div>
                                </div>
                            </div>

                        </div><!-- end media -->

                    </div>
                    @endforeach
                    <div class="load-more-btn-box text-center pt-3 pb-5">
                        <button class="btn theme-btn theme-btn-sm theme-btn-transparent lh-30"><i class="la la-refresh mr-1"></i> Load More Comment</button>
                    </div>
                </div>
                <div class="section-block"></div>
                <div class="add-comment-wrap pt-5">
                    <h3 class="fs-22 font-weight-semi-bold pb-4">Add a Comment</h3>
                    <form  action="{{route('comment',$posts->id)}}"  method="POST" class="row">@csrf

                        <div class="input-box col-lg-12">
                            <label class="label-text">Comment</label>
                            <div class="form-group">
                                <textarea class="form-control form--control pl-3" name="comment" placeholder="Write Message" rows="5"></textarea>
                            </div>
                        </div><!-- end input-box -->
                        <div class="btn-box col-lg-12">
                            <div class="custom-control custom-checkbox mb-3 fs-15">
                                <input type="checkbox" class="custom-control-input" id="saveCheckbox" required>
                                <label class="custom-control-label custom--control-label" for="saveCheckbox">
                                    Save my name, and email in this browser for the next time I comment.
                                </label>
                            </div><!-- end custom-control -->
                            <button class="btn theme-btn" type="submit">Submit Comment</button>
                        </div><!-- end btn-box -->
                    </form>
                </div><!-- end add-comment-wrap -->
            </div><!-- end col-lg-8 -->
                    <div class="card card-item">
                        <div class="card-body">
                            <h3 class="card-title fs-18 pb-2">Connect & Follow</h3>
                            <div class="divider"><span></span></div>
                            <ul class="social-icons social-icons-styled social--icons-styled">
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-twitter"></i></a></li>
                                <li><a href="#"><i class="la la-instagram"></i></a></li>
                                <li><a href="#"><i class="la la-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- end card -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

<!-- ================================
         END FOOTER AREA

================================= -->

@endsection
