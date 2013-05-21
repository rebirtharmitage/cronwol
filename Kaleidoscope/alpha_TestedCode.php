<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="basic.css">
</head>





<body onload="javascript:loadKaleidoscope()">

    <div  id="top">
		<canvas id="header" width="110%" height="80px">
		Your browser does not support the HTML5 canvas tag.
		</canvas>
	</div>


<div id="centered" style="width:800px; margin:0 auto;z-index:0;">

	<div id="backdrop"> <img src="./diagnositc_images/test.png" alt="Big Boat"> </div>
	
	<div>
		<canvas id="myCanvas" width="600" height="325" style="border:1px solid #c3c3c3; position:absolute; margin:0px;z-index:1;">
		Your browser does not support the HTML5 canvas tag.
		</canvas>
		<?PHP        
			for ($i = 1; $i < 6; $i++){
				echo '<div>';
					echo '<canvas id="subCanvas'.$i.'" name="thumb'.$i.'" width="140" height="60" align="top" style="border:1px solid #c3c3c3; position:relative; top:0px;left:605px" >';
					echo 'Your browser does not support the HTML5 canvas tag.';
					echo '</canvas>';
				echo '</div>';
			} 
		?>
	</div>
	<div id="backdrop"> <img src="./diagnositc_images/test.png" alt="Big Boat"> </div>
	<div id="backdrop"> <img src="./diagnositc_images/test.png" alt="Big Boat"> </div>
	<div id="backdrop"> <img src="./diagnositc_images/test.png" alt="Big Boat"> </div>
</div>


</body>
<script>

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var image=new Image();
    image.onload=function(){
        ctx.drawImage(image,0,0, 600, 350);
        ctx.globalAlpha=0.6;
        ctx.fillStyle="black"; 
        ctx.fillRect(0,250,600,125); 
		//header.drawImage(logo, 0, 0, 5, 50);
    };
 
var sw = parseInt(screen.availWidth);

var head=document.getElementById("header");
var header=head.getContext("2d");
var headerImage = new Image();
var grd=header.createLinearGradient(0,0,0,200);
grd.addColorStop(0,"gray");
grd.addColorStop(1,"lightgray");
header.fillStyle=grd;
header.fillRect(0,0,(sw+100),60);
var logo = new Image();
logo.src="./diagnositc_images/logo.png";
logo.width = '100%';
logo.height = 'auto';


image.src="./diagnositc_images/1.png";
image.width = '50%';
image.height = 'auto';

var currentSub = new Array();
var sub = new Array();
var img = new Array();

function onKaleidoscope(){
	for (var j = 1; j <6; j++){
			document.write("This is a test" + j);
			currentSub[j] = document.getElementById("subCanvas"+j);
			sub[j] = currentSub[j].getContext("2d");
			img[j] = new Image();
			img[j].src="./diagnositc_images/"+j+".png";
			img[j].width = '20%';
			img[j].height = 'auto';
			sub[j].drawImage(img[j], 0, 0, 60, 60);
	}
}



</script>
</html>