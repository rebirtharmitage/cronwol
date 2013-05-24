<html>

<?PHP
	$topic = "topic";
        $con = mysql_connect("cwcronwol.db.11152395.hostedresource.com","cwcronwol", "cl0udStrif3#");
        if (!$con){ die('Could not connect: ' . mysql_error());}

	//Insure Database hooked in here is for the current user!!!
        mysql_select_db("cwcronwol") or die("Unable to connected to Database." . mysql_error());
	
	$maxArticleIDQuery = mysql_query("SELECT MAX(id) FROM gallery");
	$max = mysql_fetch_array($maxArticleIDQuery);
	$maxArticleID = $max[0];
	$displayMax = $maxArticleID;
	if ($maxArticleID < 100){
		$articleCount = $maxArticleID - 100;
	}else{
		$articleCount = 100;
	}
        $b = -1;
        for($a = 1; $a <= $maxArticleID; $a++){
	$b++;
        $result = mysql_query("SELECT * FROM gallery WHERE id='".$a."'");
        
                while($row = mysql_fetch_array($result)){
                    $img[$b][0] = $row['id'];
                    $img[$b][1] = $row['thumb'];
                    $img[$b][2] = $row['image'];
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
                    <tr id="topbar" rowspan="2" border="2"style="border-color: black; width: 500px; height:40;">
                        <pre id="pres" style=" color: white; font-family: 'PT Sans'; font-size: 24; margin-top:5; margin-bottom: -15; margin-left: 250px"><a href="./index.php">Home</a>  |   <a href="./gallery.php">Gallery </a>  |  <a href="./aboutUs.php">About Us</a>  |   <a href="./contactUs.php">Contact Us</a></pre>
                    </tr><tr>
                        
                    <a href="http://www.facebook.com/Cronwol"><img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/facebook.png"/></a>
                    <a href="http://www.twitter.com"><img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/twitter.png"/></a>
                    <a href="https://plus.google.com/u/0/b/115513205466882470824/115513205466882470824/"><img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/googleplus.png"/></a>
                        <img id="top" style="margin-top:5; border: 1; height: 40;" src="./geometry/youtube.png"/>
                        
                    </tr>
                </table>
            </div>
        </div>
    
    </head>
    <body id="body" style="font-family:'PT Sans';" onload="sizePage()">
        
        
    <div id="centered" style="width:500px; margin:0 auto;z-index:0;">
        <div id="backdrop" style="margin-left:-10; margin-bottom: -10;"><img src="./geometry/test.png" alt="Big Boat"></div>
        <table border="0" cellspacing="5" style="margin-top:0;" >
          
            <?PHP
            $count = 0;
                $rowCount = 1;
                for ($r = 1; $r <= $rowCount; $r++ ){
                    echo '<tr>';
                    for ($t = 1; $t <= 10; $t ++){
                        $count++;
                        if ($count < $maxArticleID){
                            echo '<td style="background:white; margin:5; padding:5;">';
                            echo '<a href="'.$img[$count][2].'" class="lightbox_trigger">';
                            echo '<img src="'.$img[$count][1].'" /></a></td>';
                        }
                       
                    }
                    echo '</tr>';
                }
            
            ?>
        </table>
    </div>
</body>
<footer onload="sizePage()"></footer>
<script>

var minValue = <?PHP ECHO ($articleCount - 4) ?>;
var maxValue = <?PHP ECHO $displayMax ?>;

var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");

var t = document.getElementById("tCanvas");
var tcan = t.getContext("2d");


function sizePage(){
    var k = document.getElementById("headerContainer");
    k.style.width = ((screen.availWidth ));
    k.style.height = 80;
    var j = document.getElementById("topper");
    j.style.width = ((screen.availWidth / 2) + 250);
    j.style.height = 60;
    var b = document.getElementById("centered");
    b.style.width = (screen.availWidth / 2);
    var f = document.getElementById("headerCentered");
    f.style.width = ((screen.availWidth / 2) + 250);
    tcan.fillStyle = "white";
    t.style.width  = screen.availWidth;
    
    

    var h = document.getElementById("pres");
    h.style.marginLeft = (((screen.availWidth /2)/2));
}


</script>
<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script>
    

jQuery(document).ready(function($) {
	$('.lightbox_trigger').click(function(e) {
		
		//prevent default action (hyperlink)
		e.preventDefault();
		
		//Get clicked link href
		var image_href = $(this).attr("href");
		
		/* 	
		If the lightbox window HTML already exists in document, 
		change the img src to to match the href of whatever link was clicked
		
		If the lightbox window HTML doesn't exists, create it and insert it.
		(This will only happen the first time around)
		*/
		
		if ($('#lightbox').length > 0) { // #lightbox exists
			
			//place href as img src value
			$('#content').html('<img src="' + image_href + '" />');
		   	
			//show lightbox window - you could use .show('fast') for a transition
			$('#lightbox').show();
		}
		
		else { //#lightbox does not exist - create and insert (runs 1st time only)
			
			//create HTML markup for lightbox window
			var lightbox = 
			'<div id="lightbox">' +
				'<p>Close</p>' +
				'<div id="content">' + //insert clicked link's href into img src
					'<img src="' + image_href +'" />' +
				'</div>' +	
			'</div>';
				
			//insert lightbox HTML into page
			$('body').append(lightbox);
		}
		
	});
	
	//Click anywhere on the page to get rid of lightbox window
	$('#lightbox').live('click', function() { //must use live, as the lightbox element is inserted into the DOM
		$('#lightbox').hide();
	});

});
</script>


</html>

