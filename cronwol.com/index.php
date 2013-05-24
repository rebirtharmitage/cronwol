<html>

<?PHP
	$topic = "topic";
        $con = mysql_connect("localhost","root", "");
        if (!$con){ die('Could not connect: ' . mysql_error());}

	//Insure Database hooked in here is for the current user!!!
        mysql_select_db("cw.tattoosbynikki") or die("Unable to connected to Database." . mysql_error());
	
	$maxArticleIDQuery = mysql_query("SELECT MAX(id) FROM articles");
	$max = mysql_fetch_array($maxArticleIDQuery);
	$maxArticleID = $max[0];
	$displayMax = $maxArticleID;
	if ($maxArticleID < 5){
		$articleCount = 5 - $maxArticleID;
	}else{
		$articleCount = 5;
	}
	$b = 0;
	for($a = $maxArticleID; $a >= ($maxArticleID - $articleCount); $a--){
	$b++;
        $result = mysql_query("SELECT * FROM articles WHERE id='".$a."'");

                while($row = mysql_fetch_array($result)){
                    ${$topic.$b}[0] = $row['id'];
                    ${$topic.$b}[1] = $row['title'];
                    ${$topic.$b}[2] = $row['contents'];
                    ${$topic.$b}[3] = $row['synopsis'];
                    ${$topic.$b}[4] = $row['image'];
                    ${$topic.$b}[5] = $row['thumb'];
                }
        }
?>
  <html>
    <head id="head" onload="sizePage()">
    <link rel="stylesheet" type="text/css" href="basic.css">
    <div id="topperO">
            <div id="topper" style="width:500px; margin:0 auto;z-index:0;">
                <img id="top" style="margin-top:0; border: 1;" src="./geometry/topbar.png"/>
                <canvas id="tCanvas" height="60" style="z-index:-2"></canvas>
            </div>
    </div>
        <div id="headerContainer">

            <div id="headerCentered" style="width:500px; margin:0 auto;z-index:0;">

                <table width="1000px">
                    <tr id="topbar" style="width: 1000px; height:40; margin-top:0;  ">
                        <pre style=" color: white; font-family: 'PT Sans'; font-size: 24; margin-top:5; margin-bottom: -5">                                         Home  |   Gallery   |   About Us  |   Contact Us</pre>
                        
                        <img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/facebook.png"/>
                        <img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/twitter.png"/>
                        <img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/googleplus.png"/>
                        <img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/youtube.png"/>
                        
                    </tr>
                </table>
            </div>
        </div>
    
    </head>
    <body id="body" style="font-family:'PT Sans';" onload="sizePage()">
    <div id="centered" style="width:500px; margin:0 auto;z-index:0;">
        <div id="backdrop" style="margin-left:-10; margin-bottom: -10"><img src="./geometry/test.png" alt="Big Boat"></div>
        <table border="0" cellspacing="0" style="background:white">
            <tr>
              <td rowspan="6" style="width:550px;">
				<div style="width:550px; height:420; margin:0 auto;">
					<canvas id="myCanvas" width="550" height="420" style="border:0px solid #c3c3c3; margin:0;">
					Your browser does not support the HTML5 canvas tag.
					</canvas>
				</div>
			  </td>
            </tr>
            <tr id="table_<?PHP ECHO $topic1[0] ?>">
              <td style="height:85px; width:225px">
	
					<table border="0" cellspacing="5">
						<tr style="width:85px; height:5px; border:1px black; background:#feffb0">
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic1[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic1[0]?>,'<?PHP echo $topic1[1] ?>','<?PHP echo $topic1[3] ?>');"></td>
						</tr>
						<tr style="width:80px; margin: 2px;">
							<td style="left-margin: 8px;"><?PHP ECHO $topic1[1] ?></td>
						</tr>
						<tr style="width:80px;" cellspacing="10">
							<td id="subtitle" style="font-size:small;"><?PHP ECHO $topic1[3] ?></td>
						</tr>
					</table>

              </td>
            </tr>
            <tr id="table_<?PHP ECHO $topic2[0] ?>">
              <td style="height:85px; width:225px">
    
					<table border="0" cellspacing="5">
						<tr style="width:85px; height:5px; border:1px black; background:#feffb0">
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic2[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic2[0]?>,'<?PHP echo $topic2[1] ?>','<?PHP echo $topic2[3] ?>');"></td>
						</tr>
						<tr style="width:80px; margin: 2px;">
							<td style="left-margin: 8px;"><?PHP ECHO $topic2[1] ?></td>
						</tr>
						<tr style="width:80px;" cellspacing="10">
							<td id="subtitle" style="font-size:small;"><?PHP ECHO $topic2[3] ?></td>
						</tr>
					</table>

              </td>
            <tr id="table_<?PHP ECHO $topic3[0] ?>">
              <td style="height:85px; width:225px">
    
					<table border="0" cellspacing="5">
						<tr style="width:85px; height:5px; border:1px black; background:#feffb0">
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic3[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic3[0]?>,'<?PHP echo $topic3[1] ?>','<?PHP echo $topic3[3] ?>');"></td>
						</tr>
						<tr style="width:80px; margin: 2px;">
							<td style="left-margin: 8px;"><?PHP ECHO $topic3[1] ?></td>
						</tr>
						<tr style="width:80px;" cellspacing="10">
							<td id="subtitle" style="font-size:small;"><?PHP ECHO $topic3[3] ?></td>
						</tr>
					</table>

              </td>
            </tr>
            <tr id="table_<?PHP ECHO $topic4[0] ?>">
              <td style="height:85px; width:225px">
    
					<table border="0" cellspacing="5">
						<tr style="width:85px; height:5px; border:1px black; background:#feffb0">
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic4[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic4[0]?>,'<?PHP echo $topic4[1] ?>','<?PHP echo $topic4[3] ?>');"></td>
						</tr>
						<tr style="width:80px; margin: 2px;">
							<td style="left-margin: 8px;"><?PHP ECHO $topic4[1] ?></td>
						</tr>
						<tr style="width:80px;" cellspacing="10">
							<td id="subtitle" style="font-size:small;"><?PHP ECHO $topic4[3] ?></td>
						</tr>
					</table>

              </td>
            </tr>
            <tr id="table_<?PHP ECHO $topic5[0] ?>">
              <td style="height:85px; width:225px">
    
					<table border="0" cellspacing="5">
						<tr style="width:85px; height:5px; border:1px black; background:#feffb0">
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic5[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic5[0]?>,'<?PHP echo $topic5[1] ?>','<?PHP echo $topic5[3] ?>');"></td>
						</tr>
						<tr style="width:80px; margin: 2px;">
							<td style="left-margin: 8px;"><?PHP ECHO $topic5[1] ?></td>
						</tr>
						<tr style="width:80px;" cellspacing="10">
							<td id="subtitle" style="font-size:small;"><?PHP ECHO $topic5[3] ?></td>
						</tr>
					</table>

              </td>
            </tr>
        </table>
        
        <div id="twit">
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 6,
  interval: 6000,
  width: 380,
  height: 260,
  theme: {
    shell: {
      background: '#FFCC00',
      color: '#003366'
    },
    tweets: {
      background: '#1d1d1d',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('cronwol').start();
</script>
</div>
	</div>
    </body>
    
<script>// Javascript Code

var minValue = <?PHP ECHO ($articleCount - 4) ?>;
var maxValue = <?PHP ECHO $displayMax ?>;

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");

var t = document.getElementById("tCanvas");
var tcan = t.getContext("2d");

var image=new Image();
    image.onload=function(){
        ctx.drawImage(image,0,0);
        ctx.globalAlpha=0.6;
        ctx.fillStyle="black"; 
        ctx.fillRect(0,325,550,150); 
        ctx.globalAlpha=.8;
        ctx.font="30px 'PT Sans'";
        ctx.fillStyle="white";
        ctx.fillText('<?PHP echo $topic5[1] ?>',10,365);
        ctx.globalAlpha=1;
        ctx.font="14px 'PT Sans'";
        ctx.fillStyle="white";
        ctx.fillText('<?PHP echo $topic5[3] ?>',10,395);
        var k = document.getElementById("headerContainer");
        k.style.width = screen.availWidth;
        k.style.height = 80;
        var j = document.getElementById("topper");
        j.style.width = screen.availWidth;
        j.style.height = 60;
        tcan.fillStyle = "white";
        t.style.width  = screen.availWidth;
    };
image.src="./geometry/<?PHP echo $topic5[0] ?>.png";
image.width = '50%';
image.height = 'auto';


function sizePage(){
    var b = document.getElementById("centered");
    b.style.width = (screen.availWidth / 2);
    var f = document.getElementById("headerCentered");
    f.style.width = ((screen.availWidth / 2) + 250);
    var g = document.getElementById("topper");
    g.style.width = ((screen.availWidth / 2) + 250);
}


function loadArticle(a, b, d){

    for (var i = minValue; i <= maxValue; i++){
        if (i == a){
            var m=document.getElementById("table_" + a);
            m.style.background = "#E0E0E0";
        }else{
            var m = document.getElementById("table_" + i);
            m.style.background = "white";
        }
    }
	var c=document.getElementById("myCanvas");
	var ctx=c.getContext("2d");
	var title = b;
	
	var image=new Image();
		image.onload=function(){
			ctx.globalAlpha=1;
			ctx.drawImage(image,0,0);
			ctx.globalAlpha=0.6;
			ctx.fillStyle="black"; 
			ctx.fillRect(0,325,550,150);
                        ctx.globalAlpha=.8;
                        ctx.font="30px 'PT Sans'";
                        ctx.fillStyle="white";
                        ctx.fillText(title,10,365);
                        ctx.globalAlpha=1;
                        ctx.font="14px 'PT Sans'";
                        ctx.fillStyle="white";
                        ctx.fillText(d,10,395);
		};
	image.src="./geometry/" + a + ".png";
	image.width = '50%';
	image.height = 'auto';
}

var sub1 = document.getElementById("subCanvas_1");
var sub1ctx = sub1.getContext("2d");
var sub1image = new Image();
sub1image.src = "./diag/2.png";

</script>
</html>

