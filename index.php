<!DOCTYPE html>
<?php
                $con = mysqli_connect("localhost","u150026636_jaya369","Harika@369", "u150026636_real_estate");
			    if(mysqli_connect_errno())
			    {
				    echo "Failed to connect to MySQL: ". mysqli_connect_error();
			    }
			    if($_GET["n"])
			    {
			        $number=$_GET["n"];
            
			        $query = "SELECT * FROM houses WHERE house_id=$number";
			        $result = mysqli_query($con,$query);
			        if(mysqli_num_rows($result) > 0)
			        {
				        $row = mysqli_fetch_array($result);
				        $h_pictures = $row["pictures"];
				        $y_link = $row["youtube"];
				        $l_link = $row["listing"];
				        $h_street = $row["street"];
				        $h_city = $row["city"];
				        $h_bed = $row["bedrooms"];
				        $h_bath = $row["bathrooms"];
				        $h_park = $row["parking"];
				        $h_type = $row["h_type"];
				        $h_listing = $row["h_listing"];
				        $h_realtor_id = $row["realtor_id"];
			        }
			        $query2 = "SELECT * FROM realtors WHERE r_id=$h_realtor_id";
			        $result2 = mysqli_query($con,$query2);
			        if(mysqli_num_rows($result2) > 0)
			        {
			            $row2 = mysqli_fetch_array($result2);
			            $r_name = $row2["r_name"];
			            $r_link = $row2["r_link"];
			        }
			    }
?>
<html lang="en" id="swup">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <title><?php echo $h_street." | Harika Studios"; ?></title>
    <script src="https://kit.fontawesome.com/8868d161da.js" crossorigin="anonymous"></script>
  </head>
  <body onresize="getsize();" onload="getsize();">
    <div class="menu-bar-container">
        <div class="menu-bar">
            <div class="left-box">
                <div class="menu"><a class="active" href="https://www.harikastudios.com/">Home</a></div>
                <!--<div class="menu"><a href="about.html">About</a></div>-->
            </div>
            <div class="right-box">
                <!--<div class="menu"><a href="films.html">Films</a></div> -->
                <!--<div class="menu"><a href="events.html">Events</a></div>-->
                <!-- <div class="menu"><a class="active" href="index.html">Real Estate</a></div> -->
                <div class="action"><a href="mailto:info@harikastudios.com?cc=jayaditya369@gmail.com&subject=Regarding%20Photography%20Business%20Enquiry" target="_top">Contact now</a></div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="options-container">
                <div class="options" ><a class="active" href="#" style="color: var(--menu-text-color);"><i class="fa-solid fa-circle-info"></i> Overview</a></div>
                <div class="options" ><a href="/realestate/gallery.php?n=<?php echo $number; ?>"><i class="fa-solid fa-image"></i> Gallery</a></div>
                <?php 
                if($y_link)
                {
                    echo " <div class='options' ><a href='/realestate/hometour.php?n=".$number."'><i class='fa-solid fa-video'></i> Home Tour</a></div> ";
                }
                ?>
        </div>
            
        <div class="details-realestate" id="b1">
            <div class="details-container">
                <div class="details">
                    <div class="first-line">
                        <div class="house-address">
                            <i class="fa-solid fa-house icons"></i>
                            <div class="house-details">
                                <div class="address"><?php echo $h_street.", ".$h_city."<br>"; ?></div>
                                <div class="type"><?php echo $h_type; ?></div>
                            </div>
                        </div>
                        <!--<div class="share-list">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i>
                        </div>-->
                    </div>
                    <div class="house-container">
                        <div class="metrics-container">
                            <div class="metrics">
                                <i class="fa-solid fa-bed"></i>
                                <div class="m-number"><?php echo $h_bed; ?></div>
                            </div>
                            <div class="m-title">Bedrooms</div>
                        </div>
                        
                        <div class="metrics-container">
                            <div class="metrics">
                                <i class="fa-solid fa-bath"></i>
                                <div class="m-number"><?php echo $h_bath; ?></div>
                            </div>
                            <div class="m-title">Bathrooms</div>
                        </div>
                        
                        <div class="metrics-container">
                            <div class="metrics">
                                <i class="fa-solid fa-car"></i>
                                <div class="m-number"><?php echo $h_park; ?></div>
                            </div>
                            <div class="m-title">Parking</div>
                        </div>
                        
                        <!--<div class="metrics-container">
                            <<div class="metrics">
                                <i class="fa-solid fa-layer-group"></i>
                                <div class="m-number">600 sqft</div>
                            </div>
                            <div class="m-title">Total Area</div>
                        </div>-->
                        
                    </div>
                    
                    <!-- 
                    <i class="fa-solid fa-location-arrow"></i>
                    <i class="fa-solid fa-phone"></i>
                    <i class="fa-solid fa-user"></i> <br> -->
                    
                </div>
                <div class="links">
                    <button id="button1" onclick="copyText();"></button>
                    <button id="button2" onclick="location.href='<?php echo $h_listing; ?>';" ></button>
                    <button id="button3" onclick="location.href='<?php echo $r_link; ?>';"></button>
                </div>
            </div>
        </div>
        
        <script>
            function getsize()
            {
                var w = window.innerWidth;
                var x= document.getElementById("button1");
                var y = document.getElementById("button2");
                var z = document.getElementById("button3");
                
                if(w>=715)
                {
                    x.innerHTML = "<i class='fa-solid fa-share'></i> Share";
                    y.innerHTML = "<i class='fa-solid fa-file'></i> Listing";
                    z.innerHTML = "<i class='fa-solid fa-user'></i> Realtor";
                    
                    x.style.width = "180px";
                    y.style.width = "180px";
                    z.style.width = "180px";
                }
                else
                {
                    x.innerHTML = "<i class='fa-solid fa-share'></i>";
                    y.innerHTML = "<i class='fa-solid fa-file'></i>";
                    z.innerHTML = "<i class='fa-solid fa-user'></i>";
                    x.style.width = "50px";
                    y.style.width = "50px";
                    z.style.width = "50px";
                }
            }
            
            function copyText()
            {
                // Get the text field
                var text = "https://www.harikastudios.com/realestate/index.php?n=<?php echo $number; ?>";

                // Select the text field
                //text.select();
                // text.setSelectionRange(0, 99999); // For mobile devices

                // Copy the text inside the text field
                navigator.clipboard.writeText(text);
  
                // Alert the copied text
                alert("Copied the text: " + text);
            }
        </script>
  </body>
</html>