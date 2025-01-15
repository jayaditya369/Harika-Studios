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
        <div class="options-container">
                <div class="options" ><a href="/realestate/index.php?n=<?php echo $number; ?>"><i class="fa-solid fa-circle-info"></i> Overview</a></div>
                <div class="options" ><a class="active" href="#" style="color: var(--menu-text-color);"><i class="fa-solid fa-image"></i> Gallery</a></div>
                <?php 
                if($y_link)
                {
                    echo " <div class='options' ><a href='/realestate/hometour.php?n=".$number."' ><i class='fa-solid fa-video'></i> Home Tour</a></div> ";
                }
                ?>
        </div>
            
        
        <div class="pics-realestate" id="b2">
            <?php
		        for($i=1;$i<=$h_pictures;$i++)
		        {
		            echo "<div class='image-container' onclick='openImage(".$number.",".$i.");'><img loading='lazy' src='".$number."/".$i.".jpg'></div>";
		        }
            ?>
        </div>
        
    </div>
    <script>
        function openImage(a,b)
        {
            location.href="https://www.harikastudios.com/realestate/displayphotos.php?n="+a+"&p="+b;
        }
    </script>
  </body>
</html>