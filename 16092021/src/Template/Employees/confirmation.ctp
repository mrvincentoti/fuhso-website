    <!--====== BLOG PART START ======-->
    
    <section id="blog-page" class="pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div class="col-lg-8 offset-lg-2" id="GFG">
                   <div class="singel-blog mt-30" id="hello">
                       <div class="blog-cont">
                          <div class="success-img text-center">
                              <?=$this->Html->image('logo.jpg',['alt'=>'Federal University Of Health Sciences Otukpo'])?>
                          </div>
                          <h5 class="mt-5 mb-5 text-center">Your application has been received</h5>
                          <!--p>Your application number is <b>#<?=isset($applicantData) ? $applicantData->id : "NIL"?></b></p-->
                          
                            <p>
                                Federal University of Health Sciences<br/>
                                Akwete-Akpa,<br/>
                                Otukpo LGA,<br/>
                                Benue State,<br/>
                                Nigeria
                            </p>

                            <br>

                            <p>Dear <?=isset($applicantData) ? $applicantData->firstname : "NIL". " "?> <?= isset($applicantData) ? $applicantData->surname : "NIL"?></p><br>

                            <p>This letter is to let you know that we have received your application. We appreciate your interest in Federal University Of Health Sciences Otukpo. 
                              We are reviewing applications currently and expect to schedule interviews soon. If you are selected for an interview, you can expect a phone call or an SMS from us shortly.</p>
                            <br>
                            <p>Thank you, again, for your interest. We do appreciate the time that you invested in this application.</p>
                            <br>
                            <p>Regards,</p>
                          
                       </div>
                   </div> <!-- singel blog -->
                  <!--input type="button" value="click here to print" onclick="printDiv()"-->  
                  <!--input type="button" class="main-btn mt-5" value="Print" onclick="codespeedy()"-->
               </div>
        
           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== BLOG PART ENDS ======-->


      <script type="text/javascript">
        function codespeedy(){
            var print_div = document.getElementById("hello");
            var print_area = window.open();
            print_area.document.write(print_div.innerHTML);
            print_area.document.close();
            print_area.focus();
            print_area.print();
            print_area.close();
            // This is the code print a particular div element
        }
    </script>