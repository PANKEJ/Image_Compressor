
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
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Register Here</title>
		<meta name="description" content="Inspiration for Article Intro Effects" />
		<meta name="keywords" content="title, header, effect, scroll, inspiration, medium, web design" />
		<meta name="author" content="Codrops" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 6px 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}
		</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" >
		<script>
			$(function()
			{	$("#submit").click(function()
				{	$.ajax(
					{	type: "post",
						url: "registerme.php",
						data: $("#img_compress").serialize(),
						success: function(response)
						{	if(response == "done")
							{	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; alert("Form submitted successfully!");	}
							else
							{	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; alert("Form submission failed!");	}
						},
						error:function(response){	alert(response);	}
					});
				});
			});
		</script>

<script type="text/javascript">

	( function( window ) {

	'use strict';

	// class helper functions from bonzo https://github.com/ded/bonzo

	function classReg( className ) {
	  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
	}

	// classList support for class management
	// altho to be fair, the api sucks because it won't accept multiple classes at once
	var hasClass, addClass, removeClass;

	if ( 'classList' in document.documentElement ) {
	  hasClass = function( elem, c ) {
	    return elem.classList.contains( c );
	  };
	  addClass = function( elem, c ) {
	    elem.classList.add( c );
	  };
	  removeClass = function( elem, c ) {
	    elem.classList.remove( c );
	  };
	}
	else {
	  hasClass = function( elem, c ) {
	    return classReg( c ).test( elem.className );
	  };
	  addClass = function( elem, c ) {
	    if ( !hasClass( elem, c ) ) {
	      elem.className = elem.className + ' ' + c;
	    }
	  };
	  removeClass = function( elem, c ) {
	    elem.className = elem.className.replace( classReg( c ), ' ' );
	  };
	}

	function toggleClass( elem, c ) {
	  var fn = hasClass( elem, c ) ? removeClass : addClass;
	  fn( elem, c );
	}

	var classie = {
	  // full names
	  hasClass: hasClass,
	  addClass: addClass,
	  removeClass: removeClass,
	  toggleClass: toggleClass,
	  // short names
	  has: hasClass,
	  add: addClass,
	  remove: removeClass,
	  toggle: toggleClass
	};

	// transport
	if ( typeof define === 'function' && define.amd ) {
	  // AMD
	  define( classie );
	} else if ( typeof exports === 'object' ) {
	  // CommonJS
	  module.exports = classie;
	} else {
	  // browser global
	  window.classie = classie;
	}

	})( window );
	</script>

	<!--  -->
			<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-7243260-2']);
	_gaq.push(['_trackPageview']);
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>

</head>

	<body class="demo-1">
		<div id="container" class="container intro-effect-push">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<!-- <a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Tutorials/SamsungGrid/"><span>Previous Demo</span></a> -->
				<!-- <span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19119"><span>Back to the Codrops Article</span></a></span> -->
			</div>
			<header class="header">
				<div class="bg-img"><img src="27302.jpg" alt="Background Image"/></div>
				<div class="title">
					<nav class="codrops-demos">
						<a class="current-demo" href="home.html" style="color: white";>Home</a>
						<a href="imgcompress.php" style="color: white";>Compression Module</a>
						<a href="aboutus.html" style="color: white";>About Us</a>
					</nav>
					<h1>Register Here</h1>
				</div>
			</header>
			
			<div class="title">
				<nav class="codrops-demos">
						<a class="current-demo" href="index1.html" style="color: white";>Home</a>
						<a href="imgcompress.php" style="color: white";>Compression Module</a>
						<a href="aboutus.html" style="color: white";>About Us</a>
					</nav>
					<br>
				<h1>Student Registration Form</h1>
				
			<article class="content">
				<div style=" text-align:left; ">
						<table align="center" cellpadding = "8">
						 
						<!----- First Name ---------------------------------------------------------->
						<tr>
						<td>FIRST NAME</td> 
						<td><input type="text" name="First_Name" maxlength="30"/>
						(max 30 characters a-z and A-Z)
						</td>
						                            
						 <td rowspan="8">            	
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
						           
						               
						                   <form action="" name="img_compress" id="img_compress" method="post" enctype="multipart/form-data" >
						                      <div class="image_section" style="width:relative;float: right;border-color: black;width:100%;">
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
						                              <ul style="list-style-type: none;">
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

									                       
									                          echo '<img id="output_prev" width="225px" height="200px" src="comp4.jpeg" />';
									                          echo '<span id="Outputsize"></span></br>';
									                          echo'Output Size : ';
									                          echo round ($filesize/(1024*1024),3);

									                          
									                      
									                          echo ' MB';
									                          echo ' </fieldset>';
									                       	}
									                       }
									                       	
									                       	?>
									                       <span id="Inputsize"></span>
						                              <h2>Insert Photo:</h2>
						                               
						                               <li>
						                                <label>X ratio:</label>
						                                <input type="text" name="xratio" id="xratio" align="right" value="500" />
						                                </li>
						                            <li>
						                               <label>Y ratio:</label>
						                                   <input type="text" name="yratio" id="yratio" align="right" value="300" />
						                            </li>
						                           <li>
						                               <label>Select Image:</label>
						                               
						                                   <input type="file" name="file" id="file" align="right" onchange="document.getElementById('Inputsize').innerHTML = 'Image Size : ' + ((this.files[0].size)/(1024*1024)).toPrecision(3)+ ' MB';"/>
						                                    
						                                   
						                                   <li>
						                              <label>Quality</label>
						           
						                              <div class="slidecontainer">
						                    <input type="range" name="myRange" id="myRange" class="slider" value="98" min="1" max="100" oninput="range.value = myRange.value">
						                    </br>Image Quality Ratio:
						                    <output id="range">98</output>
						                   
						                  
						                   
						                </div>
						                              
						                            </li>
						                                   <li>
						                                    </br>
						                               <button class="button button1" name="submit" id="submit" class="submit btn-success">Upload</button>

						                           </li>
						                           
						                                   <!--<script type="text/javascript">
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
						                      }-->
						                                   
						                            </li>
						                          </ul>
						                          </div>
						                        </form>

						                    </td>
						
						</tr>
						 
						<!----- Last Name ---------------------------------------------------------->
						<tr>
						<td>LAST NAME</td>
						<td><input type="text" name="Last_Name" maxlength="30"/>
						(max 30 characters a-z and A-Z)
						</td>
						</tr>
						 
						<!----- Date Of Birth -------------------------------------------------------->
						<tr>
						<td>DATE OF BIRTH</td>
						 
						<td>
						<select name="Birthday_day" id="Birthday_Day">
						<option value="-1">Day:</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						 
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						 
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						 
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						 
						<option value="31">31</option>
						</select>
						 
						<select id="Birthday_Month" name="Birthday_Month">
						<option value="-1">Month:</option>
						<option value="January">Jan</option>
						<option value="February">Feb</option>
						<option value="March">Mar</option>
						<option value="April">Apr</option>
						<option value="May">May</option>
						<option value="June">Jun</option>
						<option value="July">Jul</option>
						<option value="August">Aug</option>
						<option value="September">Sep</option>
						<option value="October">Oct</option>
						<option value="November">Nov</option>
						<option value="December">Dec</option>
						</select>
						 
						<select name="Birthday_Year" id="Birthday_Year">
						 
						<option value="-1">Year:</option>
						<option value="2012">2012</option>
						<option value="2011">2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						 
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						 
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						</select>
						</td>
						</tr>
						 
						<!----- Email Id ---------------------------------------------------------->
						<tr>
						<td>EMAIL ID</td>
						<td><input type="text" name="Email_Id" maxlength="100" /></td>
						</tr>
						 
						<!----- Mobile Number ---------------------------------------------------------->
						<tr>
						<td>MOBILE NUMBER</td>
						<td>
						<input type="text" name="Mobile_Number" maxlength="10" />
						(10 digit number)
						</td>
						</tr>
						 
						<!----- Gender ----------------------------------------------------------->
						<tr>
						<td>GENDER</td>
						<td>
						Male <input type="radio" name="Gender" value="Male" />
						Female <input type="radio" name="Gender" value="Female" />
						</td>
						</tr>
						 
						<!----- Address ---------------------------------------------------------->
						<tr>
						<td>ADDRESS <br /><br /><br /></td>
						<td><textarea name="Address" rows="4" cols="30"></textarea></td>
						</tr>
						 
						<!----- City ---------------------------------------------------------->
						<tr>
						<td>CITY</td>
						<td><input type="text" name="City" maxlength="30" />
						(max 30 characters a-z and A-Z)
						</td>
						</tr>
						 
						<!----- Pin Code ---------------------------------------------------------->
						<tr>
						<td>PIN CODE</td>
						<td><input type="text" name="Pin_Code" maxlength="6" />
						(6 digit number)
						</td>
						</tr>
						 
						<!----- State ---------------------------------------------------------->
						<tr>
						<td>STATE</td>
						<td><input type="text" name="State" maxlength="30" />
						(max 30 characters a-z and A-Z)
						</td>
						</tr>
						 
						<!----- Country ---------------------------------------------------------->
						<tr>
						<td>COUNTRY</td>
						<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
						</tr>
						 
						<!----- Hobbies ---------------------------------------------------------->
						 
						<tr>
						<td>HOBBIES <br /><br /><br /></td>
						 
						<td>
						Drawing
						<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
						Singing
						<input type="checkbox" name="Hobby_Singing" value="Singing" />
						Dancing
						<input type="checkbox" name="Hobby_Dancing" value="Dancing" />
						Sketching
						<input type="checkbox" name="Hobby_Cooking" value="Cooking" />
						<br />
						Others
						<input type="checkbox" name="Hobby_Other" value="Other">
						<input type="text" name="Other_Hobby" maxlength="30" />
						</td>
						</tr>
						 
						<!----- Qualification---------------------------------------------------------->
						<tr>
						<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
						 
						<td>
						<table>
						 
						<tr>
						<td align="center"><b>Sl.No.</b></td>
						<td align="center"><b>Examination</b></td>
						<td align="center"><b>Board</b></td>
						<td align="center"><b>Percentage</b></td>
						<td align="center"><b>Year of Passing</b></td>
						</tr>
						 
						<tr>
						<td>1</td>
						<td>Class X</td>
						<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
						<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
						<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
						</tr>
						 
						<tr>
						<td>2</td>
						<td>Class XII</td>
						<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
						<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
						<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
						</tr>
						 
						<tr>
						<td>3</td>
						<td>Graduation</td>
						<td><input type="text" name="Graduation_Board" maxlength="30" /></td>
						<td><input type="text" name="Graduation_Percentage" maxlength="30" /></td>
						<td><input type="text" name="Graduation_YrOfPassing" maxlength="30" /></td>
						</tr>
						 
						<tr>
						<td>4</td>
						<td>Masters</td>
						<td><input type="text" name="Masters_Board" maxlength="30" /></td>
						<td><input type="text" name="Masters_Percentage" maxlength="30" /></td>
						<td><input type="text" name="Masters_YrOfPassing" maxlength="30" /></td>
						</tr>
						 
						<tr>
						<td></td>
						<td></td>
						<td align="center">(10 char max)</td>
						<td align="center">(upto 2 decimal)</td>
						</tr>
						</table>
						 
						</td>
						</tr>
						 
						<!----- Course ---------------------------------------------------------->
						<tr>
						<td>COURSES<br />APPLIED FOR</td>
						<td>
						BCA
						<input type="radio" name="Course_BCA" value="BCA">
						B.Com
						<input type="radio" name="Course_BCom" value="B.Com">
						B.Sc
						<input type="radio" name="Course_BSc" value="B.Sc">
						B.A
						<input type="radio" name="Course_BA" value="B.A">
						</td>
						</tr>
						 
						<!----- Submit and Reset ------------------------------------------------->
						<tr>
						<td colspan="2" align="center">
						<button class="button button1"><a href="#">Submit</a></button>
						<button class="button button3"><a href="#">Reset</a></button>
						</td>
						</tr>
						</table>
						 
						</form>
				</div>
			</article>
			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script>
			(function() {

				// detect if IE : from http://stackoverflow.com/a/16657946		
				var ie = (function(){
					var undef,rv = -1; // Return value assumes failure.
					var ua = window.navigator.userAgent;
					var msie = ua.indexOf('MSIE ');
					var trident = ua.indexOf('Trident/');

					if (msie > 0) {
						// IE 10 or older => return version number
						rv = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
					} else if (trident > 0) {
						// IE 11 (or newer) => return version number
						var rvNum = ua.indexOf('rv:');
						rv = parseInt(ua.substring(rvNum + 3, ua.indexOf('.', rvNum)), 10);
					}

					return ((rv > -1) ? rv : undef);
				}());


				// disable/enable scroll (mousewheel and keys) from 

				// left: 37, up: 38, right: 39, down: 40,
				// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
				var keys = [32, 37, 38, 39, 40], wheelIter = 0;

				function preventDefault(e) {
					e = e || window.event;
					if (e.preventDefault)
					e.preventDefault();
					e.returnValue = false;  
				}

				function keydown(e) {
					for (var i = keys.length; i--;) {
						if (e.keyCode === keys[i]) {
							preventDefault(e);
							return;
						}
					}
				}

				function touchmove(e) {
					preventDefault(e);
				}

				function wheel(e) {
					// for IE 
					if( ie ) {
						preventDefault(e);
					}
				}
				function disableScrolling(){
				    var x=window.scrollX;
				    var y=window.scrollY;
				    window.onscroll=function(){window.scrollTo(x, y);};
				}

function enableScrolling(){
    window.onscroll=function(){};
}

				function disable_scroll() {
					window.onmousewheel = document.onmousewheel = wheel;
					document.onkeydown = keydown;
					document.body.ontouchmove = touchmove;
				}

				function enable_scroll() {
					window.onmousewheel = document.onmousewheel = document.onkeydown = document.body.ontouchmove = null;  
				}

				var docElem = window.document.documentElement,
					scrollVal,
					isRevealed, 
					noscroll, 
					isAnimating,
					container = document.getElementById( 'container' ),
					trigger = container.querySelector( 'button.trigger' );

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				
				function scrollPage() {
					scrollVal = scrollY();
					
					if( noscroll && !ie ) {
						if( scrollVal < 0 ) return false;
						// keep it that way
						window.scrollTo( 0, 0 );
					}

					if( classie.has( container, 'notrans' ) ) {
						classie.remove( container, 'notrans' );
						return false;
					}

					if( isAnimating ) {
						return false;
					}
					
					if( scrollVal <= 0 && isRevealed ) {
						toggle(0);
					}
					else if( scrollVal > 0 && !isRevealed ){
						toggle(1);
					}
				}

				function toggle( reveal ) {
					isAnimating = true;
					
					if( reveal ) {
						classie.add( container, 'modify' );
					}
					else {
						noscroll = true;
						disable_scroll();
						classie.remove( container, 'modify' );
					}

					// simulating the end of the transition:
					setTimeout( function() {
						isRevealed = !isRevealed;
						isAnimating = false;
						if( reveal ) {
							noscroll = false;
							enable_scroll();
						}
					}, 1200 );
				}

				// refreshing the page...
				var pageScroll = scrollY();
				noscroll = pageScroll === 0;
				
				disable_scroll();
				
				if( pageScroll ) {
					isRevealed = true;
					classie.add( container, 'notrans' );
					classie.add( container, 'modify' );
				}
				
				window.addEventListener( 'scroll', scrollPage );
				trigger.addEventListener( 'click', function() { toggle( 'reveal' ); } );
			})();
		</script>
	

	</body>
</html>

