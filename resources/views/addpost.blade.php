@extends('layouts.app')


@section('content')


<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area pt-100px pb-100px">

    <div class="container">

        <form action="/ad" class="row" enctype="multipart/form-data" method="POST"> @csrf

            <div class="row  ">
                <div class=" pt-5 col-5 text-center ">
                    <h3 class="fs-22 font-weight-semi-bold pb-4 offset-md-1">Add A Post</h3>

                    <div class="input-box col-lg-12  offset-md-1">
                        <label class="label-text">Title</label>
                        <div class="form-group">
                            <input type="text" class="form-control form--control pl-3" name="title"
                                placeholder="Write a Title" value="">
                        </div>
                    </div>

                    <div class="input-box col-lg-12  offset-md-1">
                        <label class="label-text">Post</label>
                        <div class="form-group">
                            <textarea class="form-control form--control pl-3" name="messeges"
                                placeholder="Write Message" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group  mr-1 p-2">
                        <label for="">Image</label>
                        <input type="file" name='image' accept="image/*" class="form-control">
                    </div>

                    <!-- end input-box -->
                </div><!-- end add-comment-wrap -->


                <div class="btn-box col-lg-12">
                    <!-- end btn-box -->
                    <button class="btn theme-btn mt-4 mb-5 mr-6" type="submit">Submit
                        Post</button>
                </div><!-- end btn-box -->

            </div>
        </form>



        <div class="col-1"></div>



        {{-- Category area --}}
        <div class=" col-5    ">
            <form action="/ad" class="row" enctype="multipart/form-data" method="POST"> @csrf
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title fs-18 pb-2">Categories</h3>
                        <div class="divider"><span></span></div>
                        <div class="custom-control custom-checkbox mb-1 fs-15">
                            <input type="checkbox" class="custom-control-input" name="Business" required>
                            <label class="custom-control-label custom--control-label text-black" for="Business">
                                Business<span class="ml-1 text-gray">(12,300)</span>
                            </label>
                        </div><!-- end custom-control -->
                        <div class="custom-control custom-checkbox mb-1 fs-15">
                            <input type="checkbox" class="custom-control-input" name="UI & UX" required>
                            <label class="custom-control-label custom--control-label text-black" for="UI & UX">
                                UI & UX<span class="ml-1 text-gray">(12,300)</span>
                            </label>
                        </div><!-- end custom-control -->
                        <div class="custom-control custom-checkbox mb-1 fs-15">
                            <input type="checkbox" class="custom-control-input" name="Animation" required>
                            <label class="custom-control-label custom--control-label text-black" for="Animation">
                                Animation<span class="ml-1 text-gray">(12,300)</span>
                            </label>
                        </div><!-- end custom-control -->
                        <div class="custom-control custom-checkbox mb-1 fs-15">
                            <input type="checkbox" class="custom-control-input" name="Game Design" required>
                            <label class="custom-control-label custom--control-label text-black" for="Game Design">
                                Game Design<span class="ml-1 text-gray">(12,300)</span>
                            </label>
                        </div><!-- end custom-control -->
                        <div class="collapse" id="collapseMore">
                            <div class="custom-control custom-checkbox mb-1 fs-15">
                                <input type="checkbox" class="custom-control-input" name="Graphic Design" required>
                                <label class="custom-control-label custom--control-label text-black"
                                    for="Graphic Design">
                                    Graphic Design<span class="ml-1 text-gray">(12,300)</span>
                                </label>
                            </div><!-- end custom-control -->
                            <div class="custom-control custom-checkbox mb-1 fs-15">
                                <input type="checkbox" class="custom-control-input" name="Typography" required>
                                <label class="custom-control-label custom--control-label text-black" for="Typography">
                                    Typography<span class="ml-1 text-gray">(12,300)</span>
                                </label>
                            </div><!-- end custom-control -->
                            <div class="custom-control custom-checkbox mb-1 fs-15">
                                <input type="checkbox" class="custom-control-input" name="Web Development" required>
                                <label class="custom-control-label custom--control-label text-black"
                                    for="Web Development">
                                    Web Development<span class="ml-1 text-gray">(12,300)</span>
                                </label>
                            </div><!-- end custom-control -->
                            <div class="custom-control custom-checkbox mb-1 fs-15">
                                <input type="checkbox" class="custom-control-input" name="Photography" required>
                                <label class="custom-control-label custom--control-label text-black" for="Photography">
                                    Photography<span class="ml-1 text-gray">(12,300)</span>
                                </label>
                            </div><!-- end custom-control -->
                            <div class="custom-control custom-checkbox mb-1 fs-15">
                                <input type="checkbox" class="custom-control-input" name="Finance" required>
                                <label class="custom-control-label custom--control-label text-black" for="Finance">
                                    Finance<span class="ml-1 text-gray">(12,300)</span>
                                </label>
                            </div><!-- end custom-control -->
                        </div><!-- end collapse -->
                        <a class="collapse-btn collapse--btn fs-15" data-toggle="collapse" href="#collapseMore"
                            role="button" aria-expanded="false" aria-controls="collapseMore">
                            <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-14"></i></span>
                            <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-14"></i></span>
                        </a>
                    </div>
                </div>
                <div class="btn-box col-lg-12">
                    <!-- end btn-box -->
                    <button class="btn theme-btn mr-5 mt-4 mb-5 offset-md-1" type="submit">Submit
                        Category</button>
                </div><!-- end btn-box -->
            </form>
        </div>


    </div>





    <div class="container">
        <div class="row">

            {{--Recent Post area --}}

            <div class="col-6">
                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title fs-18 pb-2">Recent Posts</h3>
                        <div class="divider"><span></span></div>
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <a href="course-details.html" class="media-img">
                                <img class="mr-3" src="images/small-img-2.jpg" alt="Related course image">
                            </a>
                            <div class="media-body">
                                <h5 class="fs-15"><a href="course-details.html">The Complete JavaScript Course
                                        2021</a></h5>
                                <span class="d-block lh-18 py-1 fs-14">Kamran Ahmed</span>
                                <p class="text-black font-weight-semi-bold lh-18 fs-15">$12.99 <span
                                        class="before-price fs-14">$129.99</span></p>
                            </div>
                        </div><!-- end media -->
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <a href="course-details.html" class="media-img">
                                <img class="mr-3" src="images/small-img-3.jpg" alt="Related course image">
                            </a>
                            <div class="media-body">
                                <h5 class="fs-15"><a href="course-details.html">Learning jQuery Mobile for
                                        Beginners</a></h5>
                                <span class="d-block lh-18 py-1 fs-14">Kamran Ahmed</span>
                                <p class="text-black font-weight-semi-bold lh-18 fs-15">$129.99</p>
                            </div>
                        </div><!-- end media -->
                        <div class="media media-card border-bottom border-bottom-gray pb-4 mb-4">
                            <a href="course-details.html" class="media-img">
                                <img class="mr-3" src="images/small-img-4.jpg" alt="Related course image">
                            </a>
                            <div class="media-body">
                                <h5 class="fs-15"><a href="course-details.html">Introduction LearnPress LMS
                                        plugin</a></h5>
                                <span class="d-block lh-18 py-1 fs-14">Kamran Ahmed</span>
                                <p class="text-black font-weight-semi-bold lh-18 fs-15">Free</p>
                            </div>
                        </div><!-- end media -->
                        <div class="view-all-course-btn-box">
                            <a href="blog-no-sidebar.html" class="btn theme-btn w-100">View All Posts <i
                                    class="la la-arrow-right icon ml-1"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Contact Author Form area --}}

            <div class="col-6">

                <div class="card card-item">
                    <div class="card-body">
                        <h3 class="card-title fs-18 pb-2">Contact Author Form</h3>
                        <div class="divider"><span></span></div>
                        <form method="post">
                            <div class="form-group">
                                <input class="form-control form--control" type="text" name="text" placeholder="Name">
                                <span class="la la-user input-icon"></span>
                            </div>
                            <div class="form-group">
                                <input class="form-control form--control" type="email" name="email" placeholder="Email">
                                <span class="la la-envelope input-icon"></span>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form--control pl-3" name="message" rows="4"
                                    placeholder="Write message"></textarea>
                            </div>
                            <div class="btn-box">
                                <button class="btn theme-btn w-100">Contact Author <i
                                        class="la la-arrow-right icon ml-1"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">

            <div class="col-4">
            </div>

            <div class="col-4 ">

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
                </div>

            </div>

            <div class="col-4">
            </div>
        </div>

    </div>





</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->



@endsection
