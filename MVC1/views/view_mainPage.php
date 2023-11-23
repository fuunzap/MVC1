
<section class="blog-section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-header">
                        <h2 class="section-title">Our Latest News & Tips</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-header">
                        <p>Hsto iaculis mauris nec dis, donec nulla quam quisque amet nulla. Parturient mattis, urna cras eleifend metus, varius turpis enim Tellus at libero eu et, felis id rhonc eros dui. Elementum ante congue odio duis mollis nulla quis </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <?php foreach ($arrayResult as $data) {?>
                <div class="col-lg-4 col-sm-8 mb-30">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="<?=$data['IMAGE']?>" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="meta-post d-flex flex-wrap">
                                <div class="meta-user">
                                    <a href="#"><i class="fas fa-user"></i> <span><?=$data['AUTHOR']?></span></a>
                                </div>
                                <div class="meta-date">
                                    <a href="#"><i class="fas fa-calendar-alt"></i> <span><?=$data['DATE']?></span></a>
                                </div>
                            </div>
                            <h5 class="title"><a href="blog-details.html"><?=$data['TITLE']?></a> </h5>
                            <p><?=$data['TEXT']?></p>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="col-lg-4 col-sm-8 mt-30">
                    <div class="blog-item">
                        <div class="blog-content blog-content--style">
                            <h5 class="title"><a href="blog-details.html">It’s Complicated The Path of Palestinian Love Story</a></h5>
                            <div class="meta-post meta-post--style d-flex flex-wrap">
                                <div class="meta-user">
                                    <a href="#"> <span>Post by Keven Feil</span></a>
                                </div>
                                <div class="meta-date">
                                    <a href="#"> <span>21 Jun 2019</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-content blog-content--style">
                            <h5 class="title"><a href="blog-details.html">British Columbia’s Business Temp Opaque Array of Tax Breaks</a></h5>
                            <div class="meta-post meta-post--style d-flex flex-wrap">
                                <div class="meta-user">
                                    <a href="#"> <span>Post by Reta Schmidt        </span></a>
                                </div>
                                <div class="meta-date">
                                    <a href="#"> <span>30 Jun 2019</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-content blog-content--style">
                            <h5 class="title"><a href="blog-details.html">Meet Toronto’s Gavel-Wielding Puck-Shooting</a></h5>
                            <div class="meta-post meta-post--style d-flex flex-wrap">
                                <div class="meta-user">
                                    <a href="#"> <span>Post by Bette Herzog</span></a>
                                </div>
                                <div class="meta-date">
                                    <a href="#"> <span>15 Aug 2019</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  