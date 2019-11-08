<?php echo file_get_contents("header.php"); ?>
<?php //revice
include "dataAccess/EventList.php";
 $events = get_events();
 echo $events
?>
<!-- Page title -->
<div class="page-title parallax parallax1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                    
                        <div class="page-title-heading">
                            <h3 class="title">Eventos</h3>
                        </div><!-- /.page-title-captions --> 
                    </div><!-- /.col-md-12 -->  
                </div><!-- /.row -->  
            </div><!-- /.container -->                      
        </div><!-- /.page-title --> 

        <section class="flat-row pad-top60px pad-bottom60px background-color-f6f6f6">
            <div class="flat-portfolio portfolio-fullwidth">
                <div class="flat-portfolio-filter">
                    <ul class="portfolio-filter">
                        <li class="active"><a data-filter="*" href="#">All</a></li>
                        <li><a data-filter=".webdesign" href="#">Web Design</a></li>
                        <li><a data-filter=".graphicdesign" href="#">Graphic Design</a></li>
                        <li><a data-filter=".photoshop" href="#">Photoshop</a></li>
                        <li><a data-filter=".illustration" href="#">Illustration</a></li>
                        <li><a data-filter=".development" href="#">Development</a></li>
                    </ul><!-- /.project-filter -->
                </div><!-- /.flat-portfolio-filter -->

                <div class="portfolio-wrap flat-grid clearfix">                        
                    <div class="flat-iconbox flat-one-four style3 webdesign graphicdesign photoshop">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/1.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->
                
                    <div class="flat-iconbox flat-one-four style3 webdesign development graphicdesign">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/2.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->
                
                    <div class="flat-iconbox flat-one-four style3 graphicdesign photoshop illustration">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/3.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->
                    
                    <div class="flat-iconbox flat-one-four style3 illustration webdesign graphicdesign">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/4.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->
                
                    <div class="flat-iconbox flat-one-four style3 photoshop development">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/5.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox --> 
                
                    <div class="flat-iconbox flat-one-four style3 webdesign development photoshop">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/6.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->

                    <div class="flat-iconbox flat-one-four style3 webdesign graphicdesign photoshop">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/7.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->
                
                    <div class="flat-iconbox flat-one-four style3 webdesign development graphicdesign">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/8.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->
                
                    <div class="flat-iconbox flat-one-four style3 graphicdesign photoshop illustration">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/9.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->
                    
                    <div class="flat-iconbox flat-one-four style3 illustration webdesign graphicdesign">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/10.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->
                
                    <div class="flat-iconbox flat-one-four style3 photoshop development">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/11.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox --> 
                
                    <div class="flat-iconbox flat-one-four style3 webdesign development photoshop">
                        <div class="portfolio-content">
                            <div class="icon-image">
                                <a href="work_detail_1.html"><img src="images/portfolio/v6/12.jpg" alt="image"></a>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="work_detail_1.html">WORK NAME TITLE</a></h6>            
                                <p>Branding, Graphic</p> 
                            </div>
                        </div><!-- /.portfolio-content -->
                    </div><!-- /.flat-iconbox -->
                    
                </div><!-- /.portfolio-wrap -->

                <div class="flat-box">
                    <div class="flat-button bg-white no-border-radius" data-text="Load more"><a href="#">Load more</a></div>
                </div>
            </div><!-- /.flat-portfolio -->
        </section>

<?php echo file_get_contents("content.html"); ?>
<?php echo file_get_contents("footer.html"); ?>