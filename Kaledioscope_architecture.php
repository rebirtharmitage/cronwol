<html>
    <head>
    
        <div style="align:top">
            <canvas id="header" width="100" height="80" style="border:0px;" align="top">
            Your browser does not support the HTML5 canvas tag.
            </canvas>
        </div>
    
    </head>
    <body>
        <table border="1" cellspacing="5">
            <tr>
              <td rowspan="6" style="width:550px;">First</td>
            </tr>
            <tr>
              <td style="height:80px; width:120px">
                  <div id="block1_image">
                    <img src="2.png" alt="Big Boat"/>
                  </div>
              </td>
            </tr>
            <tr>
              <td style="height:80px">
                  <canvas id="subCanvas_2" name="thumb" width="140" height="60" align="top" style="border:1px solid #c3c3c3; position:relative; top:0px;left:555px">
                  </canvas>
              </td>
            </tr>
            <tr>
              <td style="height:80px">
                <button id="loading"></button>
              </td>
            </tr>
            <tr>
              <td style="height:80px">Second</td>
            </tr>
            <tr>
              <td style="height:80px">Second</td>
            </tr>
        </table>
    </body>
    
<script>

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var image=new Image();
    image.onload=function(){
        ctx.drawImage(image,0,0, 550, 340);
        ctx.globalAlpha=0.6;
        ctx.fillStyle="black"; 
        ctx.fillRect(0,250,550,125); 
    };
    
var head=document.getElementById("header");
var header=head.getContext("2d");
var headerImage = new Image();
headerImage.src="http://i.imgur.com/jh9JjPE.jpg";
header.drawImage(headerImage, 0,0,screen.availWidth, 80);

image.src="http://i.imgur.com/jh9JjPE.jpg";
image.width = '50%';
image.height = 'auto';

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

