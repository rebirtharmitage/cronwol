<html>
    <head>
    <link rel="stylesheet" type="text/css" href="basic.css">
        <div style="align:top">
            <canvas id="header" width="100" height="80" style="border:0px;" align="top">
            Your browser does not support the HTML5 canvas tag.
            </canvas>
        </div>
    
    </head>
    <body style="font-family:'PT Sans'">
    <div id="centered" style="width:800px; margin:0 auto;z-index:0;">
        <table border="0" cellspacing="0" style="background:white">
            <tr>
              <td rowspan="6" style="width:550px;">
				<div style="width:550px; height:400">
					<canvas id="myCanvas" width="550" height="400" style="border:0px solid #c3c3c3; margin:0;">
					Your browser does not support the HTML5 canvas tag.
					</canvas>
				</div>
			  </td>
            </tr>
            <tr id="table_2">
              <td style="height:85px; width:225px">
	
					<table border="0" cellspacing="5">
						<tr style="width:85px; height:5px; border:1px black; ">
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="./diagnositc_images/1722_thumb.png" alt="" onClick="javascript:loadArticle(2);"></td>
						</tr>
						<tr style="width:80px; margin: 2px;">
							<td style="left-margin: 8px;"> Article Title </td>
						</tr>
						<tr style="width:80px;" cellspacing="10">
							<td id="subtitle" style="font-size:small;"> subtitle </td>
						</tr>
					</table>

              </td>
            </tr>
            <tr id="table_3">
              <td style="height:80px">
                  		<table border="0" cellspacing="2">
						<tr>
							<td rowspan="3" style="width:100px"><img src="./diagnositc_images/1743_thumb.png" alt=""  onClick="javascript:loadArticle(3);"></td>
						</tr>
						<tr style="width:80px">
							<td> Article Title </td>
						</tr>
						<tr>
							<td> subtitle </td>
						</tr>
					</table>
              </td>
            </tr>
            <tr id="table_4">
              <td style="height:80px">
                		<table border="0" cellspacing="2">
						<tr>
							<td rowspan="3" style="width:100px"><img src="./diagnositc_images/1764_thumb.png" alt=""  onClick="javascript:loadArticle(4);"></td>
						</tr>
						<tr style="width:80px">
							<td> Article Title </td>
						</tr>
						<tr>
							<td> subtitle </td>
						</tr>
					</table>
              </td>
            </tr>
            <tr id="table_5">
              <td style="height:80px">
						<table border="0" cellspacing="2">
						<tr>
							<td rowspan="3" style="width:100px"><img src="./diagnositc_images/1785_thumb.png" alt=""  onClick="javascript:loadArticle(5);"></td>
						</tr>
						<tr style="width:80px">
							<td> Article Title </td>
						</tr>
						<tr>
							<td> subtitle </td>
						</tr>
					</table>
			  </td>
            </tr>
            <tr id="table_6">
              <td style="height:80px">
						<table  border="0" cellspacing="2">
						<tr>
							<td rowspan="3" style="width:100px"><img src="./diagnositc_images/1806_thumb.png" alt=""  onClick="javascript:loadArticle(6);"></td>
						</tr>
						<tr style="width:80px">
							<td> Article Title </td>
						</tr>
						<tr>
							<td> subtitle </td>
						</tr>
					</table>
			  </td>
            </tr>
        </table>
	
	</div>
    </body>
    
<script>

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var image=new Image();
    image.onload=function(){
        ctx.drawImage(image,0,0);
        ctx.globalAlpha=0.6;
        ctx.fillStyle="black"; 
        ctx.fillRect(0,325,550,150); 
    };
image.src="./diagnositc_images/5.png";
image.width = '50%';
image.height = 'auto';

function loadArticle(a){
	var c=document.getElementById("myCanvas");
	var ctx=c.getContext("2d");
	var m=document.getElementById("table_" + a);
	m.style.background = "#E0E0E0";
	
	var image=new Image();
		image.onload=function(){
			ctx.globalAlpha=1;
			ctx.drawImage(image,0,0);
			ctx.globalAlpha=0.6;
			ctx.fillStyle="black"; 
			ctx.fillRect(0,325,550,150); 
		};
	image.src="./diagnositc_images/" + a + ".png";
	image.width = '50%';
	image.height = 'auto';

}

var head=document.getElementById("header");
var header=head.getContext("2d");
var headerImage = new Image();
headerImage.src="http://i.imgur.com/jh9JjPE.jpg";
header.drawImage(headerImage, 0,0,screen.availWidth, 80);



    var sub1 = document.getElementById("subCanvas_1");
    var sub1ctx = sub1.getContext("2d");
    var sub1image = new Image();
    sub1image.src = "./diag/2.png";
document.getElementById("loading").onclick = loadImages();
function loadImages(){
    sub1ctx.drawImage(sub1image, 0,0, 100, 100);
    document.write("Testing that the code is working.");
}

</script>
</html>

