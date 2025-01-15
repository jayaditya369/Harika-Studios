<!DOCTYPE html>
<html lang="en" id="swup">
  <head>
    <title>Real Estate Photography in GTA</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="A Production Studio specialized in Real-Estate and AirBNB Photography located in GTA, Ontario." />
    <meta name="keywords" content="Photography, Photos, Real Estate, Real Estate Photography" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Real Estate Photography in GTA" />
    <meta property="og:description" content="A Production Studio specialized in Filmmaking, Real-Estate and AirBNB Photography, Virtual Tours located in GTA, Ontario." />
    <meta property="og:url" content="https://www.harikastudios.com/" />
    <meta property="og:site_name" content="Harika Studios" />
    
    <link rel="stylesheet" href="index.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  </head>
  <body>
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
        <br><h2 style="margin-bottom:0px;margin-left:20px;">Our Gallery</h2>
        <div class="main-realestate">
        
        <?php
		    $con = mysqli_connect("localhost","u150026636_jaya369","Harika@369", "u150026636_real_estate");
			if(mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: ". mysqli_connect_error();
			}

			$query = "SELECT * FROM houses";
			$result = mysqli_query($con,$query);
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result))
				{
					static $count=1;
					$h_street = $row["street"];
					$h_city = $row["city"];
					$h_type = $row["type"];
					$h_youtube = $row["youtube"];
					$h_id = $row["house_id"];

                    echo "
                    <div class='box-container' onclick='openGallery(".$h_id.")'>";
                    echo "<script>function openGallery(x) { location.href='https://www.harikastudios.com/realestate/index.php?n='+x; }</script>";
                    if($h_type=="Sale")
                    {
                        echo "<div class='top-tag sale'>For ".$h_type."</div>";
                    }
                    else if($h_type=="Rent")
                    {
                        echo "<div class='top-tag rent'>For ".$h_type."</div>";
                    }
                    else if($h_type=="Sold")
                    {
                        echo "<div class='top-tag sold'>".$h_type."</div>";
                    }
                        echo "
                        <div class='image-container'>
                            <img loading='lazy' src='realestate/".$h_id.".jpg'>
                        </div>
                        <div class='title'>".$h_street."</div>
                        <div class='city'>".$h_city."</div>
                        <div class='service'>
                            <span class='tag'>#Photos</span>";
                            
                    if($h_youtube)
                    {
                        echo "<span class='tag'>#Home Tour</span>";
                    }
                    if($h_type=="Sale"|| $h_type=="Sold")
                    {
                            echo "
                            <span class='tag'>#Listing</span>";
                    }
                    echo "
                        </div>
                    </div>";
                }
            }
        ?>
          
           
        </div>
        
    </div>
    <div class="section2">
        <div class="matter">
            <div class="heading"><b>How To Prepare Your Home For Real-Estate Photography?</b></div>
            <div class="desc">
                1. <b>Declutter:</b> <div class="inner-desc">Remove clutter from surfaces, such as countertops, kitchen benches, and bathroom counters</div>
                2. <b>Depersonalize:</b> <div class="inner-desc">Remove personal items like photos and family trinkets</div>
                3. <b>Clean:</b> <div class="inner-desc">Vacuum and dust, and clean mirrors and windows</div>
                4. <b>Make beds:</b> <div class="inner-desc">Straighten linens, fluff pillows, and make the beds</div>
                5. <b>Hide trash:</b> <div class="inner-desc">Store trashcans in closets or the garage</div>
                6. <b>Turn on lights:</b> <div class="inner-desc">Check that all lights work and turn them on before the photographer arrives</div>
                7. <b>Open windows:</b> <div class="inner-desc">Open blinds or window shades to let in natural light</div>
                8. <b>Prepare the yard:</b> <div class="inner-desc">Mow the lawn, weed, remove leaves, and move vehicles from the outside of the property</div>
                9. <b>Choose the right time of day:</b> <div class="inner-desc">Pick a clear, bright day when the front of the house is well lit</div>
            </div>
        </div>
    </div>
  </body>
</html>