@extends('website.master')

@section('title')
    pobitrodeb | course-detatil
@endsection

@section('body')
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Online course detail</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">Description</a></li>
                    <li><a href="#lessons">Lessons</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                </ul>
            </div>
        </nav>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">

                    <section id="description">
                        <h2>Description</h2>
                        <p>Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                        <h5>What will you learn</h5>
                        <ul class="list_ok">
                            <li>
                                <h6>Suas summo id sed erat erant oporteat</h6>
                                <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
                            </li>
                            <li>
                                <h6>Illud singulis indoctum ad sed</h6>
                                <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
                            </li>
                            <li>
                                <h6>Alterum bonorum mentitum an mel</h6>
                                <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
                            </li>
                        </ul>
                        <hr>
                        <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="bullets">
                                    <li>Dolorem mediocritatem</li>
                                    <li>Mea appareat</li>
                                    <li>Prima causae</li>
                                    <li>Singulis indoctum</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="bullets">
                                    <li>Timeam inimicus</li>
                                    <li>Oportere democritum</li>
                                    <li>Cetero inermis</li>
                                    <li>Pertinacia eum</li>
                                </ul>
                            </div>
                        </div>
                        <!-- /row -->
                    </section>
                    <!-- /section -->

                    <section id="lessons">
                        <div class="intro_title">
                            <h2>Lessons</h2>
                            <ul>
                                <li>18 lessons</li>
                                <li>01:02:10</li>
                            </ul>
                        </div>
                        <div id="accordion_lessons" role="tablist" class="add_bottom_45">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i> Introdocution</a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-bs-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
                                                <li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="indicator ti-plus"></i>Generative Modeling Review
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-bs-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
                                                <li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="indicator ti-plus"></i>Variational Autoencoders
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-bs-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
                                                <li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->

                            <div class="card">
                                <div class="card-header" role="tab" id="headingFourth">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                            <i class="indicator ti-plus"></i>Gaussian Mixture Model Review
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-bs-parent="#accordion_lessons">
                                    <div class="card-body">
                                        <div class="list_lessons">
                                            <ul>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
                                                <li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
                                                <li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                        </div>
                        <!-- /accordion -->
                    </section>
                    <!-- /section -->

                    <section id="reviews">
                        <h2>Reviews</h2>
                        <div class="reviews-container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div id="review_summary">
                                        <strong>4.7</strong>
                                        <div class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                        </div>
                                        <small>Based on 4 reviews</small>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                    <div class="row">
                                        <div class="col-lg-10 col-9">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                    </div>
                                    <!-- /row -->
                                </div>
                            </div>
                            <!-- /row -->
                        </div>

                        <hr>

                        <div class="reviews-container">

                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar1.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Admin – April 03, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar2.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Ahsan – April 01, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                            <div class="review-box clearfix">
                                <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar3.jpg" alt="">
                                </figure>
                                <div class="rev-content">
                                    <div class="rating">
                                        <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                    </div>
                                    <div class="rev-info">
                                        Sara – March 31, 2016:
                                    </div>
                                    <div class="rev-text">
                                        <p>
                                            Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /review-box -->
                        </div>
                        <!-- /review-container -->
                    </section>
                    <!-- /section -->
                </div>
                <!-- /col -->

                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail">
                        <figure>
                            <a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video"><i class="arrow_triangle-right"></i><img src="http://via.placeholder.com/800x533/ccc/fff/course_1.jpg" alt="" class="img-fluid"><span>View course preview</span></a>
                        </figure>
                        <div class="price">
                            $29<span class="original_price"><em>$49</em>60% discount price</span>
                        </div>
                        <a href="cart-1.html" class="btn_1 full-width">Purchase</a>
                        <a href="#0" class="btn_1 full-width outline"><i class="icon_heart"></i> Add to wishlist</a>
                        <div id="list_feat">
                            <h3>What's includes</h3>
                            <ul>
                                <li><i class="icon_mobile"></i>Mobile support</li>
                                <li><i class="icon_archive_alt"></i>Lesson archive</li>
                                <li><i class="icon_mobile"></i>Mobile support</li>
                                <li><i class="icon_chat_alt"></i>Tutor chat</li>
                                <li><i class="icon_document_alt"></i>Course certificate</li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
@endsection
