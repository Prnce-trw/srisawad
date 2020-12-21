   <!-- footer-start -->
   <footer class="footer-area ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/icon-footer.jpg" alt=""> </a>
                        <p>มีหลักฐานที่เป็นข้อเท็จจริงยืนยันมานานแล้ว ว่าเนื้อหาที่อ่านรู้เรื่องมันจะไปกวนสมาธิของคนอ่านให้เขวไปจากส่วน ที่เป็น Layout เรานำ Lorem Ipsum มาใช้เพราะความที่มันมีการกระจายของตัวอักษรธรรมดาๆ</p>
                        <div class="single-footer-widget">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i> srisawa.y@srisawadpower.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> 02-000-0123</a></li>
                                    <li><a href="#"><i class="material-icons">place</i> 99/132 ซอยแจ้งวัฒนะ 10 แยก 3 (เบญจมิตร)</a></li>
                                </ul>
        
                            </div>


                    </div>
                </div>

                <div class="col-md-2 ">
                    <div class="single-footer-widget">
                        <!-- <h4>Company</h4> --><br>
                        <ul>
                            <li style="color: #fff; font-family: 'prompt',sans-serif;">ติดต่อเรา</li>
                            <hr class="line" align="left">
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;"></i> เกี่ยวกับเรา</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;"></i> ติดต่อเรา</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;"></i> ข่าวสารบริษัท</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-footer-widget">
                        <!-- <h4>Solutions</h4> --><br>
                        <ul>
                            <li style="color: #fff; font-family: 'prompt',sans-serif;">สินเชื่อส่วนบุคคล</li>
                            <hr class="line" align="left">
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;"></i> วงเงินสูงสุด 2 ล้าน และไม่เกิน 5 เท่าของรายได้</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;"></i> ผ่อนสบ๊าย สบาย ได้สูงสุดถึง 60 เดือน</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;"></i> มั้นใจกับ อัตราดอกเบี้ยแบบลดต้นลดดอก</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true" style="color: #fff;"></i> ไม่ต้องยุ่งยากกับการค้ำประกัน</a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <div class="copyright_part_text ">

        <div class="container">
                <div class="row">
                        <div class="col-md-8">
                                <div class="title-content">
                           <p class="footer-text m-0">Copyright @ 2019 Srisaead Co,Ltd.All Rigjts Reserved.</p>
                    
                           </div>
        
                         </div>
                         <div class="col-md-4">
                                <div class="title-content">
                                        <div class="social-links">
                                               <a href="#"><img src="img/facebook.jpg"></a>
                                               <a href="#"><img src="img/youtube.jpg"></a>
                                               <a href="#"><img src="img/line.jpg"></a>
                                                
                                            </div>
                           </div>
        
                         </div>
        
                </div>
            </div></div>


    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>


    <script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
var owl = $('.owl-carousel');
owl.owlCarousel();
// Go to the next item
$('#customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('#customPrevBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})


});
    
    </script>

<script>
    $(document).ready(function(){
        $('.owl-carousel2').owlCarousel({
    loop:true,
    margin:10,
    // nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
var owl = $('.owl-carousel2');
owl.owlCarousel();
// Go to the next item
$('.customNextBtn2').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn2').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
});


});
    
    </script>    

</body>

</html>