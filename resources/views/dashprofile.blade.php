@extends('layouts.dashlayout')


@section('content')



<div class="dashboard-heading mb-5">
    <h3 class="fs-22 font-weight-semi-bold">My Profile</h3>
</div>
<div class="profile-detail mb-5">
    <ul class="generic-list-item generic-list-item-flash">
        <li><span class="profile-name">Registration Date:</span><span class="profile-desc">{{auth()->user()->created_at->format('M')}}
            {{auth()->user()->created_at->format('d')}} {{auth()->user()->created_at->format('Y')}}
        </span></li>
        <li><span class="profile-name">Name:</span><span class="profile-desc">{{auth()->user()->name}}</span></li>
        <li><span class="profile-name">User Name:</span><span class="profile-desc">{{auth()->user()->username}}</span></li>
        <li><span class="profile-name">Email:</span><span class="profile-desc">{{auth()->user()->email}}</span></li>
        <li><span class="profile-name">Phone Number:</span><span class="profile-desc">(91) 7547 622250</span></li>
        <li>
            <span class="profile-name">Bio:</span>
            <span class="profile-desc">Hello! I am a Alex Smith, Washington area graphic designer with over 6 years of graphic design experience. I specialize in designing infographics, icons, brochures, and flyers.</span>
        </li>
    </ul>
</div>
<div class="row align-items-center dashboard-copyright-content pb-4">
    <div class="col-lg-6">
        <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 justify-content-end">
            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
        </ul>
    </div><!-- end col-lg-6 -->
</div><!-- end row -->
</div><!-- end container-fluid -->
</div><!-- end dashboard-content-wrap -->
</section><!-- end dashboard-area -->
<!-- ================================
END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
<i class="la la-arrow-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Modal -->
<div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body text-center">
    <span class="la la-exclamation-circle fs-60 text-warning"></span>
    <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">Your account will be deleted permanently!</h4>
    <p>Are you sure you want to delete your account?</p>
    <div class="btn-box pt-4">
        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Ok, Delete</button>
    </div>
</div><!-- end modal-body -->
</div><!-- end modal-content -->
</div><!-- end modal-dialog -->
</div><!-- end modal -->


@endsection

