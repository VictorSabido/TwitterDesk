@extends('layouts.base')
@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="card card-inverse card-info">
            <div class="box bg-info text-center">
                <h1 class="font-light text-white">2,064</h1>
                <h6 class="text-white">Sessions</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="card card-primary card-inverse">
            <div class="box text-center">
                <h1 class="font-light text-white">1,738</h1>
                <h6 class="text-white">Users</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="card card-inverse card-success">
            <div class="box text-center">
                <h1 class="font-light text-white">5963</h1>
                <h6 class="text-white">Page Views</h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3 col-xlg-3">
        <div class="card card-inverse card-warning">
            <div class="box text-center">
                <h1 class="font-light text-white">10%</h1>
                <h6 class="text-white">Bounce Rate</h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <img class="card-img-top img-responsive" src="../app/images/big/img1.jpg" alt="Card">
            <div class="card-block">
                <ul class="list-inline font-14">
                    <li class="p-l-0">20 May 2016</li>
                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                </ul>
                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <img class="card-img-top img-responsive" src="../app/images/big/img2.jpg" alt="Card">
            <div class="card-block">
                <ul class="list-inline font-14">
                    <li class="p-l-0">20 May 2016</li>
                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                </ul>
                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <img class="card-img-top img-responsive" src="../app/images/big/img4.jpg" alt="Card">
            <div class="card-block">
                <ul class="list-inline font-14">
                    <li class="p-l-0">20 May 2016</li>
                    <li><a href="javascript:void(0)" class="link">3 Comment</a></li>
                </ul>
                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-6 col-md-6">
        <div class="card card-block">
            <h3 class="card-title">Notification</h3>
            <div class="message-box">
                <div class="message-widget">
                    <!-- Message -->
                    <a href="#">
                        <div class="user-img"><span class="round bg-primary"><i class="mdi mdi-email"></i></span></div>
                        <div class="mail-contnet">
                            <h5>You have 3 new messages</h5> <span class="mail-desc">Daniel Kristeen, Hanna Giover, Jeffry Brown</span> <span class="time">9:30 AM</span> </div>
                    </a>
                    <!-- Message -->
                    <a href="#">
                        <div class="user-img"><span class="round bg-danger"><i class="mdi mdi-earth"></i></span></div>
                        <div class="mail-contnet">
                            <h5>Newsfeed available </h5> <span class="mail-desc">Todays headlines : Breakdancing Grandma Proves ..</span> <span class="time">9:10 AM</span> </div>
                    </a>
                    <!-- Message -->
                    <a href="#">
                        <div class="user-img"> <span class="round bg-success"><i class="mdi mdi-currency-usd"></i></span></div>
                        <div class="mail-contnet">
                            <h5>2 Invoices to pay</h5> <span class="mail-desc">$3500 from Krishnan, $2000 from Akhil</span> <span class="time">9:08 AM</span> </div>
                    </a>
                    <!-- Message -->
                    <a href="#">
                        <div class="user-img"><span class="round"><i class="mdi mdi-comment-check-outline"></i></span></div>
                        <div class="mail-contnet">
                            <h5>15 New comments</h5> <span class="mail-desc">Jhonny : Hey this stuff is awesome and how can i ..</span> <span class="time">9:02 AM</span> </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-block">
                <select class="custom-select pull-right">
                    <option selected="">January</option>
                    <option value="1">February</option>
                    <option value="2">March</option>
                    <option value="3">April</option>
                </select>
                <h3 class="card-title">Visit source</h3>
                <div id="m-piechart" style="width:100%; height:278px"></div>
                <div class="text-center">
                    <ul class="list-inline m-t-20">
                        <li>
                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-success"></i>Mobile</h6> </li>
                        <li>
                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-primary"></i>Desktop</h6> </li>
                        <li>
                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-danger"></i>Tablet</h6> </li>
                        <li>
                            <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-muted"></i>Other</h6> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection