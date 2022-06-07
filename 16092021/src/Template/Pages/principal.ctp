    <!--====== TEASTIMONIAL PART ENDS ======-->
    <section id="teachers-part" class="pt-65 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>PRINCIPAL OFFICERS</h5>
                        <h2></h2>
                    </div> <!-- section title -->
                    <div class="teachers-2">
                        <div class="row">
                        <?php foreach($teams as $team): ?>
                            <div class="col-md-4">
                                <div class="teachers-2-singel mt-30">
                                    <!--div class="thum">
                                        <img src="<?=BASE_URL?>img/teachers/teacher-2/tc-1.jpg" alt="Teacher">
                                    </div-->
                                    <div class="cont">
                                        <a href=""><h5><?=$team->name?></h5></a>
                                        <p><?=$team->desinition?></p>
                                        <!--span><i class="fa fa-book"></i>10 Courses</span-->
                                    </div>
                                </div> <!-- teachers 2 singel -->
                            </div>
                        <?php endforeach; ?>
                        </div> <!-- row -->
                    </div> <!-- teachers 2 -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>