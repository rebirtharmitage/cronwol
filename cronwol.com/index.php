<html>

<?PHP
        include_once 'localCred.php';
	$topic = "topic";
        $con = mysql_connect($host,$db_name,$db_pass);
        if (!$con){ die('Could not connect: ' . mysql_error());}

        mysql_select_db("cwcronwol") or die("Unable to connected to Database." . mysql_error());
	
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
    <head>
        
    <link rel="stylesheet" type="text/css" href="./style/main.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    
    <div id="top">
            <div id="insideTop">
                <img id="topbarImage" src="./geometry/topbar.png"/>
            </div>
    </div>
    <div id="header">
            <div id="insideHeader">
                    <pre id="pres"><a href="./index.php">Home</a>  |   <a href="./gallery.php">Gallery </a>  |  <a href="./aboutUs.php">About Us</a>  |   <a href="./contactUs.php">Contact Us</a></pre>
                    
                    <a href="http://www.facebook.com/Cronwol"><img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/facebook.png"/></a>
                    <a href="http://www.twitter.com"><img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/twitter.png"/></a>
                    <a href="https://plus.google.com/u/0/b/115513205466882470824/115513205466882470824/"><img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/googleplus.png"/></a>
                    <a href="http://www.youtube.com"><img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/youtube.png"/></a>

            </div>
        </div>
    
    </head>
    <body>
        
        
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
            <tr id="table_<?PHP ECHO $topic1[0] ?>" style="height:85px; width:225px">
              <td style="height:85">
	
					<table border="0" cellspacing="5">
						<tr style="width:85px; height:5px; border:1px black; background:#feffb0">
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic1[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic1[0]?>,'<?PHP echo $topic1[1] ?>','<?PHP echo $topic1[3] ?>','<?PHP echo $topic1[4] ?>');"></td>
						</tr>
						<tr style="width:200px; margin: 2px;">
							<td style="left-margin: 8px;"><?PHP ECHO $topic1[1] ?></td>
						</tr>
						<tr style="width:200px;" cellspacing="10">
							<td id="subtitle" style="font-size:small;"><?PHP ECHO $topic1[3] ?></td>
						</tr>
					</table>

              </td>
            </tr>
            <tr id="table_<?PHP ECHO $topic2[0] ?>">
              <td style="height:85px; width:225px">
    
					<table border="0" cellspacing="5">
						<tr style="width:80px; height:5px; border:1px black; background:#feffb0">
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic2[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic2[0]?>,'<?PHP echo $topic2[1] ?>','<?PHP echo $topic2[3] ?>','<?PHP echo $topic2[4] ?>');"></td>
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
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic3[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic3[0]?>,'<?PHP echo $topic3[1] ?>','<?PHP echo $topic3[3] ?>','<?PHP echo $topic3[4] ?>');"></td>
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
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic4[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic4[0]?>,'<?PHP echo $topic4[1] ?>','<?PHP echo $topic4[3] ?>','<?PHP echo $topic4[4] ?>');"></td>
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
							<td rowspan="3" style="background:white; margin:2px;"><img style="margin:4px;" src="<?PHP ECHO $topic5[5] ?>" alt="" onClick="loadArticle(<?PHP echo $topic5[0]?>,'<?PHP echo $topic5[1] ?>','<?PHP echo $topic5[3] ?>','<?PHP echo $topic5[4] ?>');"></td>
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
        <table style="margin-top:5">
            <tr>
                <td>
                <div id="twit">
                    <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                    <script>
                    new TWTR.Widget({
                      version: 2,
                      type: 'profile',
                      rpp: 6,
                      interval: 6000,
                      width: 380,
                      height: 300,
                      theme: {
                        shell: {
                          background: '#ffffff',
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
            </td>
            <td>
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                
                <div class="fb-comments" style="background:white"data-href="http://www.facebook.com/Cronwol?skip_nax_wizard=true" data-width="380" data-num-posts="5"></div>
            </td>
            </tr>
        </table>
    </div>
</body>
    
<script>// Javascript Code

window.onload = function sizingPage(){
    var a = document.getElementById("top");
    a.style.width = screen.availWidth;
    var b = document.getElementById("insideTop");
    b.style.width = (screen.availWidth / 2);
    b.style.leftMargin = (screen.availWidth / 4);
}


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
    f.style.width = ((screen.availWidth / 2) );
    var g = document.getElementById("topper");
    g.style.width = ((screen.availWidth / 2) + 250 );
    var h = document.getElementById("pres");
    h.style.marginLeft = (((screen.availWidth /2)/2)/2 + 25);
}


function loadArticle(a, b, d, im){

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
			ctx.drawImage(image,0,0, (image.width), (image.height));
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
	image.src=im;
	image.width = 800;
	image.height = 550;
}

var sub1 = document.getElementById("subCanvas_1");
var sub1ctx = sub1.getContext("2d");
var sub1image = new Image();
sub1image.src = "./diag/2.png";

</script>
</html>

