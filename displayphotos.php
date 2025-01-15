<!DOCTYPE html>
<?php
                $con = mysqli_connect("localhost","u150026636_jaya369","Harika@369", "u150026636_real_estate");
			    if(mysqli_connect_errno())
			    {
				    echo "Failed to connect to MySQL: ". mysqli_connect_error();
			    }
			    if($_GET["n"]||$_GET["p"])
			    {
			        
			        $number=$_GET["n"];
                    $pno=$_GET["p"];
			        $query = "SELECT * FROM houses WHERE house_id=$number";
			        $result = mysqli_query($con,$query);
			        if(mysqli_num_rows($result) > 0)
			        {
				        $row = mysqli_fetch_array($result);
				        $h_pictures = $row["pictures"];
				        $last=$h_pictures;
				        if($pno=='0')
				        {
				            $pno=$h_pictures;
				        }
				        elseif($pno>$h_pictures)
				        {
				            $pno=1;
				        }
			        }
			    }
?>
<html lang="en" id="swup">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="gallery.css">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <title><?php echo $h_street." | Harika Studios"; ?></title>
    <script src="https://kit.fontawesome.com/8868d161da.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="close">
            <button onclick="closeImage(<?php echo $number; ?>);">Close</button>
    </div>
    <div class="gallery">
        <div class="sides">
            <div class="left-side" onclick="openImage(<?php echo $number; ?>, <?php $d=$pno-1; echo $d; ?>)">
                
            </div>
            <div class="right-side" onclick="openImage(<?php echo $number; ?>, <?php $d=$pno+1; echo $d; ?>)">
                
            </div>
        </div>
        <div id="image">
            <img id="inner-img" src="https://www.harikastudios.com/realestate/<?php echo $number; ?>/<?php echo $pno; ?>.jpg">
        </div>
    </div>
    <script>
        function openImage(a,b)
        {
            location.href="https://www.harikastudios.com/realestate/displayphotos.php?n="+ a +"&p="+ b;
        }
        function closeImage(a)
        {
            location.href="https://www.harikastudios.com/realestate/gallery.php?n="+a;
        }
        
    </script>
  </body>
</html>