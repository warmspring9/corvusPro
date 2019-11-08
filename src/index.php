<?php echo file_get_contents("header.php"); ?>
    <!-- Slider -->
    <p>Welcome back, <?=$_SESSION['name']?>!</p> 
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="https://2yadzef1einezk6p1rplhvzy-wpengine.netdna-ssl.com/wp-content/uploads/2016/11/VidyoRoom-HD3.jpg" alt="slider-image" />
                    <div class="tp-caption sfl title-slide" data-x="277" data-y="478" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                        Plannit
                    </div>  
                    <div class="tp-caption sfr desc-slide" data-x="446" data-y="582" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">                       
                        Plan your events and share them with the world
                    </div>                            
                </li>

                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="https://wallup.net/wp-content/uploads/2016/07/19/18271-minimalism-post-it_notes-748x421.png" alt="slider-image" />

                    <div class="tp-caption sfb" data-x="335" data-y="233" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                        <img src="https://www.sccpre.cat/mypng/full/75-751581_post-it-transparent-post-it-png.png" alt="image">
                    </div>

                    <div class="tp-caption sfb title-slide style1" data-x="450" data-y="465" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">Plannit</div>

                    <div class="tp-caption sfb desc-slide style1" data-x="500" data-y="418" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">
                    As easy as it gets</div>                    
                </li>
            </ul>
        </div>
    </div>
    <!-- Flat iconbox  -->
    <section class="flat-row pad-bottom90px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section">
                        <h3 class="title">We help you <span>Plan</span> anything anywhere</h3>
                        <div class="desc">
                            <p>See our events of the day!!!!</p>
                        </div>
                        <div class="icon">
                            <img src="images/icon/line.png" alt="image">
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="flat-divider d51px"></div>
        <?php
        $count = 0;
        $conn = mysqli_connect("localhost", "WPPro2", "Password9", "prodb");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT i.url img, e.name title, e.id_user author from event_photos i
        join events e on i.id_event=e.id group by i.id_event";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "<div class=\"row\">";
		    echo "<div class=\"col-md-4\">";
		    echo   " <div class=\"flat-iconbox style3\">";
		    echo "       <div class=\"icon-image\">";
				echo "<img src=".$row["img"]." alt=\"image\">";
		    echo "       </div>";
				echo"<div class=\"content\">"; //poner en el href de abajo un .php que genere la info por su id
					echo "<h6 class=\"title\"><a href=\"#\">".$row["title"]."</a></h6>";            
					echo "<p>".$row["author"]."</p>"; 
				echo"</div>";
			echo"</div><!-- /.flat-iconbox -->";
            echo"</div><!-- /.col-md-4 -->";
            $count = $count+1;
            if($count% 3 == 0){
                echo "<div class=\"flat-divider d51px\"></div>";
            }
            }
        }else { echo "0 results"; }
        $conn->close();
        ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Flat count down -->
    <section class="flat-row background-color-ecf1f5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="flat-iconbox style1 v1">
                        <div class="icon-image">
                            <span class="icon-Alarm-Clock"></span>
                        </div>
                        <div class="flat-countdown">
                            <div class="numb-count" data-to="2360" data-speed="2000" data-waypoint-active="yes">2360</div>
                        </div>
                        <div class="icon-img">
                            <img src="images/icon/line1.png" alt="image">
                        </div>
                        <div class="content">
                            <p>Days of Experience</p>
                        </div>
                    </div><!-- /.flat-iconbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="flat-iconbox style1 v2">
                        <div class="icon-image">
                            <span class="icon-Alien-2"></span>
                        </div>
                        <div class="flat-countdown">
                            <div class="numb-count" data-to="2360" data-speed="2000" data-waypoint-active="yes">2360</div>
                        </div>
                        <div class="icon-img">
                            <img src="images/icon/line1.png" alt="image">
                        </div>
                        <div class="content">
                            <p>Days of Experience</p>
                        </div>
                    </div><!-- /.flat-iconbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="flat-iconbox style1 v3">
                        <div class="icon-image">
                            <span class="icon-Archery-2"></span>
                        </div>
                        <div class="flat-countdown">
                            <div class="numb-count" data-to="2360" data-speed="2000" data-waypoint-active="yes">2360</div>
                        </div>
                        <div class="icon-img">
                            <img src="images/icon/line1.png" alt="image">
                        </div>
                        <div class="content">
                            <p>Days of Experience</p>
                        </div>
                    </div><!-- /.flat-iconbox center style1 -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="flat-iconbox style1 v4">
                        <div class="icon-image">
                            <span class="icon-Atom"></span>
                        </div>
                        <div class="flat-countdown">
                            <div class="numb-count" data-to="2360" data-speed="2000" data-waypoint-active="yes">2360</div>
                        </div>
                        <div class="icon-img">
                            <img src="images/icon/line1.png" alt="image">
                        </div>
                        <div class="content">
                            <p>Days of Experience</p>
                        </div>
                    </div><!-- /.flat-iconbox center style1 -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

   

          <!-- Flat information -->
    <section class="flat-row parallax parallax1 pad-top270px pad-bottom270px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section">
                        <h3 class="title">Let’s Be Friends</h3>
                        <div class="desc">
                            <p>Contact us to see more of our amazing work!</p>
                        </div>
                        <div class="icon">
                            <img src="images/icon/line.png" alt="image">
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="flat-divider d51px"></div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="flat-information">
                        <span class="phone"><a href="25525333 " title="Phone Number">+ 61 3 8376 6284 </a></span>   
                        <span class="address"><a href="#" title="Address">Tec Barrio Amon</a></span>
                        <span class="email"><a href="nicolas01001110@gmail.com" title="Email Address">nicolas01001110@gmail.com</a></span>
                        <div class="flat-button bg-themes" data-text="Contact us"><a href="#">Contact us</a></div>
                    </div><!-- /.flat-information -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

  
<?php echo file_get_contents("content.html"); ?>

<?php echo file_get_contents("footer.html"); ?>