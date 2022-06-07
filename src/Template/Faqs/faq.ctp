<!-- Breadcrumb -->
<div class="container" style="background-color: #ffffff;">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">About Us</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content" style="background-color: #ffffff;">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section id="shortcodes">
                        <header><h1>FAQ</h1></header>
                        <article>
                            <div class="panel-group" id="accordion">
                                <?php $count = 1; foreach($faqs as $faq):?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#question-<?=$count?>">
                                                <span class="question"><?=$faq->question?></span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question-<?=$count?>" class="panel-collapse collapse <?php if($count == 1){echo "in";}?>">
                                        <div class="panel-body">
                                            <?=$faq->answer?>
                                        </div>
                                    </div>
                                </div>
                                <?php $count = $count + 1; endforeach?>
                                <!-- <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#question-2">
                                                <span class="question">2. CAN THE SCREENING BE DONE BY PROXY</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            NO
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#question-3">
                                                <span class="question">3. CAN I STILL APPLY TO CHANGE INSTITUTION TO FUHSO</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            NO
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#question-4">
                                                <span class="question">4. WHAT CREDENTIALS SHOULD I COME WITH?</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Original copies of WAEC/NECO results. Evidence/print out of JAMB change of institution to FUHSO, JAMB result sheet, state of origin, birth certificate and any other relevant document.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#question-5">
                                                <span class="question">5. DOES THIS CALL INCLUDE EMPLOYMENT APPLICANTS</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question-5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            NO
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#question-6">
                                                <span class="question">6. DO I NEED TO PAY MONEY TO GAIN ADMISSION TO FUHSO?</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question-6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            NO. FUHSO admits only qualified candidates. Any one asking for or soliciting for money for himself or on behalf of any official of FUHSO is a fraudster and should be reported immediately. BEWARE OF FRAUDSTERS!!
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#question-7">
                                                <span class="question">7. WHAT SHOULD I DO IF OFFERED AN ALTERNATIVE COURSE</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question-7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Proceed to any accredited JAMB CBT centre to accept the alternative course if you so wish.
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </article>

                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <?=$this->element('news')?>
                    <?=$this->element('teacher')?>
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->