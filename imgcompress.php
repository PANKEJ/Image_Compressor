<?php
$name = ''; $type = ''; $size = ''; $error = '';
   function compress_image($source_url, $destination_url, $quality,$dest_imagex=500,$dest_imagey=300) {

      $info = getimagesize($source_url);

          if ($info['mime'] == 'image/jpeg')
          $image = imagecreatefromjpeg($source_url);

          elseif ($info['mime'] == 'image/gif')
          $image = imagecreatefromgif($source_url);

          elseif ($info['mime'] == 'image/png')
          $image = imagecreatefrompng($source_url);

			$source_imagex = imagesx($image);

			$source_imagey = imagesy($image);

      	  $dest_image = imagecreatetruecolor($dest_imagex, $dest_imagey);

			imagecopyresampled($dest_image, $image, 0, 0, 0, 0, $dest_imagex,$dest_imagey, $source_imagex, $source_imagey);

          imagejpeg($dest_image, $destination_url, $quality);
          return $destination_url;
        }


            
?>
<html>
    <head>
        <title>Compress Image</title>
        <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="css/font.css">
         <!-- <link rel="stylesheet" href="css/style.css"> -->
         <link rel="stylesheet" href="css/bootstrap.css">
         
   <style type="text/css">
.slidecontainer {
  width: 30%; 
}

.slider {
  -webkit-appearance: none;  /* Override default CSS styles */
  appearance: none;
  width: 100%;
  height: 20px; 
  background: #d3d3d3; 
  outline: none; 
  opacity: 0.5; 
  -webkit-transition: .2s; /* 0.2 seconds transition on hover */
  transition: opacity .2s;
}

/* Mouse-over effects */
.slider:hover {
  opacity: 1; /* Fully shown on mouse-over */
}

/* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */ 
.slider::-webkit-slider-thumb {
  -webkit-appearance: none; /* Override default look */
  appearance: none;
  width: 20px; /* Set a specific slider handle width */
  height: 20px; /* Slider handle height */
  background: #4CAF50; /* Green background */
  cursor: pointer; /* Cursor on hover */
}

.slider::-moz-range-thumb {
  width: 25px; /* Set a specific slider handle width */
  height: 25px; /* Slider handle height */
  background: #4CAF50; /* Green background */
  cursor: pointer; /* Cursor on hover */
}



@-webkit-keyframes sk-scaleout {
  0% { -webkit-transform: scale(0) }
  100% {
    -webkit-transform: scale(1.0);
    opacity: 0;
  }
}

@keyframes sk-scaleout {
  0% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 100% {
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
    opacity: 0;
  }
}

body {
  font-family: 'Asap', Arial, Helvetica, sans-serif;
  color:white;
  background:black url(27317.jpg) no-repeat 50% 0px;
  margin:3% 10% 0 10%;
  overflow:hidden;
}
}




</style>
  <body style=" background-image: url('https://www.pixelstalk.net/wp-content/uploads/2016/06/Free-HD-Gif-Wallpapers.gif');
    background-size: cover;
    height: 100vh;
    padding:0;
    margin:0;">
      <div>
        <nav class="navbar fixed-top navbar-expand-lg bg-dark">
            <a class="navbar-brand exclude logo" href="home.html">
                <h4>COMPRESSOR</h4>
            </a>
            <button class="navbar-toggler collapsed custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-navicon"></i></span>
            </button>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav justify ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Compress<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registerme.php">Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.html">About Us</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
    </nav>
    </div>
    <div class="bgimg">    
    </div><br><br><br><br>
        <div class="error">
            <?php
                if($_POST){
                  if ($error) {
            ?>
            <label class="error"><?php echo'<script>alert("Please select An Image!");</script>' ?></label>
            <?php
            }
         }
       ?>
       </div>
           <fieldset class="well">
               <legend style="margin-left: 120px">Upload Image:</legend>
                   <form action="" name="img_compress" id="img_compress" method="post" enctype="multipart/form-data">
                       <ul style="list-style-type:none;margin-left: 80px">
                       		<li>
                            <img id="input_prev" width="360px" height="240px" align="right" style="margin-right: 90px"; />
                               <label>X ratio: </label>
                                   <input type="text" name="xratio" id="xratio" align="right" value="500"/>
                                   
                            </li>
                       		<li>
                               <label>Y ratio: </label>
                                   <input type="text" name="yratio" id="yratio" align="right" value="300" />
                            </li>
                            

                           <li>
                               <label>Upload:</label>
                                   <input type="file" name="file" id="file" align="right" onchange="showMyImage(this);document.getElementById('Inputsize').innerHTML = 'Image Size : ' + ((this.files[0].size)/(1024*1024)).toPrecision(3)+ 'MB';" />
                                   <img id="" width='relative' height="relative" />
                                   <span id="Inputsize"></span>
                                   <script type="text/javascript">
                                   	 function showMyImage(fileInput) {
									        var files = fileInput.files;
									        for (var i = 0; i < files.length; i++) {           
									            var file = files[i];
									            var imageType = /image.*/;     
									            if (!file.type.match(imageType)) {
									                continue;
									            }           
									            var img=document.getElementById("input_prev");            
									            img.file = file;    
									            var reader = new FileReader();
									            reader.onload = (function(aImg) { 
									                return function(e) { 
									                    aImg.src = e.target.result; 
									                }; 
									            })(img);
									            reader.readAsDataURL(file);
									        }    
									    }
                                   </script>
                                   <?php 
                                   if ($_POST) {

								            if ($_FILES["file"]["error"] > 0) {
								            		$error = $_FILES["file"]["error"];
								        	}		
								            else if (($_FILES["file"]["type"] == "image/gif") ||
								            ($_FILES["file"]["type"] == "image/jpeg") ||
								            ($_FILES["file"]["type"] == "image/png") ||
								            ($_FILES["file"]["type"] == "image/pjpeg")) {

								            $url = './comp4.jpeg';

								        	if(isset($_POST["xratio"])&&isset($_POST["yratio"])&&!empty($_POST["yratio"])&&!empty($_POST["xratio"])&&isset($_POST["myRange"])){
								        		$filename = compress_image($_FILES["file"]["tmp_name"], $url,(int)$_POST["myRange"],(int)$_POST["xratio"],(int)$_POST["yratio"]);	
								        	}
								        	else if(isset($_POST["myRange"])){
								        		$filename = compress_image($_FILES["file"]["tmp_name"], $url, (int)$_POST["myRange"]);
								        }
								        }else {
								            $error = "Uploaded image should be jpg or gif or png";
								        }
								        }
                                   ?>
                            </li>
                            <li>
                            	<label>Quality</label>
           
                            	<div class="slidecontainer">
  									<input type="range" min="1" max="100"  value="95" name="myRange" class="slider" id="myRange" oninput='document.getElementById("demo").innerHTML = "Image Compression Quality : " + document.getElementById("myRange").value;' />
										<span id="range"><script type="text/javascript"></script></span></p></div>
  									<span id="demo"></span>
								</div>
                            	
                            </li>
                           <li>
                               <input type="submit" name="submit" id="submit" value ="Submit" class="submit btn-success"/>
                           </li>
                       </ul>
                  </form>
           </fieldset>
           

           				
                       
                       <?php 
                       	if($_POST){
                       		if ($_FILES["file"]["error"] > 0) {
            					$error = $_FILES["file"]["error"];
        					}		
            				else if (($_FILES["file"]["type"] == "image/gif") ||
            				($_FILES["file"]["type"] == "image/jpeg") ||
            				($_FILES["file"]["type"] == "image/png") ||
            				($_FILES["file"]["type"] == "image/pjpeg")) {
                          $filesize=filesize($url);

                       		echo '<fieldset class="output" style="margin-left:120px;"><legend>Output Image:</legend>';

                          echo '<form action="" name="output" id="output" method="post">';
                          echo '</form>';
                          echo '<legend>Compressed Output Image:</legend><form action="" name="output" id="output" method="post">';
                          echo '<img id="output_prev" width="360px" height="240px" src="comp4.jpeg"class="w3-round-large" onchange="document.getElementById("Outputsize").innerHTML="Image Size : " + ((document.getElementById("Outputsize").size)/(1024*1024)).toPrecision(3)+ "MB"" />';
                          echo '<span id="Outputsize"></span></br>';
                          echo'Output Size : ';
                          echo round ($filesize/(1024*1024),3);
                        
                          echo ' MB         <button class="button button3"><a href="download.php?filename=comp4.jpeg">Download</a></button></form>';
                          echo ' </fieldset>';
                       	}
                       }
                       	
                       	?>

                  
          </font>
     </body>
</html>

<script src="../code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
