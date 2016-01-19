<?php
session_start();
//session_register("zalogowany");

if(empty($_SESSION["zalogowany"]))$_SESSION["zalogowany"]=0;

mysql_connect("sql.wsmochota.home.pl", "wsmochota", "WSMochota1234")or die("Nie można nawiązać połączenia z bazą"); //połączenie z bazą danych
mysql_select_db("wsmochota")or die("Wystąpił błąd podczas wybierania bazy danych");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WSM Ochota</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/gif" href="favicon.gif" >
<style type="text/css">

#topbar{
position:absolute;
border: 0px solid black;
padding: 2px;
background-color: #F3F6FC;
width: 1115px;
font-family: 'Century Gothic', sans-serif;
font-size:13px;
visibility: hidden;
z-index: 100;
}

</style>

<script type="text/javascript">

/***********************************************
* Floating Top Bar script- © Dynamic Drive (www.dynamicdrive.com)
* Sliding routine by Roy Whittle (http://www.javascript-fx.com/)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var persistclose=1 //set to 0 or 1. 1 means once the bar is manually closed, it will remain closed for browser session
var startX = 50 //set x offset of bar in pixels
var startY = 1 //set y offset of bar in pixels
var verticalpos="fromtop" //enter "fromtop" or "frombottom"

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function get_cookie(Name) {
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) {
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function closebar(){
if (persistclose)
document.cookie="remainclosed=1"
document.getElementById("topbar").style.visibility="hidden"
}

function staticbar(){
	barheight=document.getElementById("topbar").offsetHeight
	var ns = (navigator.appName.indexOf("Netscape") != -1) || window.opera;
	var d = document;
	function ml(id){
		var el=d.getElementById(id);
		if (!persistclose || persistclose && get_cookie("remainclosed")=="")
		el.style.visibility="visible"
		if(d.layers)el.style=el;
		el.sP=function(x,y){this.style.left=x+"px";this.style.top=y+"px";};
		el.x = startX;
		if (verticalpos=="fromtop")
		el.y = startY;
		else{
		el.y = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
		el.y -= startY;
		}
		return el;
	}
	window.stayTopLeft=function(){
		if (verticalpos=="fromtop"){
		var pY = ns ? pageYOffset : iecompattest().scrollTop;
		ftlObj.y += (pY + startY - ftlObj.y)/8;
		}
		else{
		var pY = ns ? pageYOffset + innerHeight - barheight: iecompattest().scrollTop + iecompattest().clientHeight - barheight;
		ftlObj.y += (pY - startY - ftlObj.y)/8;
		}
		ftlObj.sP(ftlObj.x, ftlObj.y);
		setTimeout("stayTopLeft()", 10);
	}
	ftlObj = ml("topbar");
	stayTopLeft();
}

if (window.addEventListener)
window.addEventListener("load", staticbar, false)
else if (window.attachEvent)
window.attachEvent("onload", staticbar)
else if (document.getElementById)
window.onload=staticbar
</script> 
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script src="jquery.min.js" type="text/javascript"></script>
<script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'fold', // Specify sets like: 'random,fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: false, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38577974-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div id="topbar">
Szanowni Państwo,<br>
W ramach naszej witryny stosujemy pliki cookies w celu świadczenia Państwu usług na najwyższym poziomie, więcej informacji w naszej <a href="cookies.html"><b>Polityce Prywatności</b></a> 
&nbsp; &nbsp;&nbsp; &nbsp;
<a href="" onClick="closebar(); return false"><u> ZAMKNIJ</u></a></td></tr></table>
</div>
<div id="container">

	<div id="logo">
    <img src="images/logo.jpg" /><br />
    <center>
	<table width="60">
	<tr>
	<td align="left"><a href="kontakt.html">
	<img src="images/mail.png" border="0" /></a></td>
	<td align="right"><a href="sitemap.html"><img src="images/sitemap_application_blue.png" border="0" alt="Mapa Strony" /></a></td></tr>
    
	</table></center>
    </div>
    
    <div id="banner">
    
    
    <div id="slider" class="nivoSlider">
        <img src="images/slide1.jpg" alt="" />
        <img src="images/slide2.jpg" />
        <img src="images/slide3.jpg" alt=""/>
        <img src="images/slide4.jpg" alt="" />
        <img src="images/slide5.jpg" alt="" />
    </div>
</div>
<div id="htmlcaption" class="nivo-html-caption">
    


    </div>

	<div id="menu">
    
    <div id="left_menu">
    <img src="images/left_menu.png" />
    </div>
    
    <div id="center_menu">
	<table style="margin-top:10px;">
	<tr>
    <td>
	<a href="index.html"><font color="#FFFFFF" style="font-size:13px;">Aktualności</font></a>  <font size="+2">|</font>
	</td><td>
	<a href="spoldzielnia.html"><font color="#FFFFFF" style="font-size:13px;">O Spółdzielni</font></a>  <font size="+2">|</font>
	</td><td>
	<a href="wladze.html"><font color="#FFFFFF" style="font-size:13px;">Władze Spółdzielni</font></a>  <font size="+2">|</font>
	</td><td>
	<a href="przetargi.html"><font color="#FFFFFF" style="font-size:13px;">Przetargi</font></a>  <font size="+2">|</font>
	</td><td>
	<a href="remonty.html"><font color="#FFFFFF" style="font-size:13px;">Remonty i eksploatacje</font></a>  <font size="+2">|</font>
	</td><td>
	<a href="mapa/mapa.html" target="new"><font color="#FFFFFF" style="font-size:13px;">Mapa Spółdzielni</font></a> <font size="+2">|</font>
	</td><td>
	<a href="dokumenty_menu.html"><font color="#FFFFFF" style="font-size:13px;">Dokumenty</font></a> <font size="+2">|</font>
	</td><td><center>
	<a href="ogloszenia_czlonkow_spoldzielni.html"><font color="#FFFFFF" style="font-size:13px;">Ogłoszenia <br>Członków Spółdzielni</font></a> </center>
	</td><td>
	<font size="+2">|</font>
	<a href="wideo.html"><font color="#FFFFFF" style="font-size:13px;">Wideo</font></a> <font size="+2">|</font>
	</td><td>
	<a href="kontakt.html"><font color="#FFFFFF" style="font-size:13px;">Kontakt</font></a>
	</tr></table>
    </div>
    
    <div id="right_menu">
    <img src="images/right_menu.png" />
    </div>
    
    
    </div>
<div class="clear"></div>


	<div id="zawartosc">
    
    <div id="info"><table width="930">
    <tr><td align="left">
Znajdujesz sie w sekcji: <a href="dokumenty_menu.html">Dokumenty</a> &#8594 <a href="dokumenty.php">Materiały dla Członków Spółdzielni</a></td><td align="right">


</td></tr></table>
</div>
    
<div id="content">

<div class="news">
  <center>
  <h2>Materiały dla Członków Spółdzielni</h2>
  <br /></center>
  <br />
  <center>
  <table width="630" height="150" valign="top">
    <tr><td><center>
    <?php
    function ShowLogin($komunikat=""){
	echo "$komunikat<br><br>";
	echo "<form action='dokumenty.php' method=post>";
	echo "Login: <input type=text name=login><br><br>";
	echo "Hasło: <input type=password name=haslo><br><br>";
	echo "<input type=submit value='Zaloguj!'>";
	echo "</form>";
	echo "<br>Aby uzyskać uzyskać dostęp do tej części serwisu należy skontaktować się ze Spółdzielnią w celu otrzymania <b>loginu</b> i <b>hasła</b>";
}

?>
    <?php
if($_GET["wyloguj"]=="tak"){$_SESSION["zalogowany"]=0;echo "Zostałeś wylogowany z serwisu";}
if($_SESSION["zalogowany"]!=1){
	if(!empty($_POST["login"]) && !empty($_POST["haslo"])){
		if(mysql_num_rows(mysql_query("select * from users where user_login = '".htmlspecialchars($_POST["login"])."' AND user_haslo = '".htmlspecialchars($_POST["haslo"])."'"))){
			echo "Zalogowano poprawnie. <a href='dokumenty.php'>Kontynuuj.</a>";
			$_SESSION["zalogowany"]=1;
			}
		else echo ShowLogin("Podano złe dane!!!");
		}
	else ShowLogin();
}
else{
?>
Zapraszamy do zapoznania się z materiałami:<br /><br />
<br><br>

<br><a href='dokumenty.php?wyloguj=tak'>wyloguj się</a>


<!----------------------------------------------------------------------->
<p align="left"><b>Dokumenty:</b></p>
<table width="620" border="0" cellspacing="0">
		
		<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/Protokol lustracja.pdf" target="_blank" onmouseover="document.pdf1.src='images/pdf.png'"
onmouseout="document.pdf1.src='images/pdf_grey.png'"><p align="left"> Protokół Lustracja</p></A></td>
      <td  bgcolor="#c5ddf5"align="right"><A HREF="dokumenty/2015/Protokol lustracja.pdf" target="_blank" onmouseover="document.pdf1.src='images/pdf.png'"
onmouseout="document.pdf1.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf1" border="0" >

</A>
      </td>
    </tr>
<tr>
      <td><A HREF="dokumenty/2015/List polustracyjny.pdf" target="_blank" onmouseover="document.pdf5.src='images/pdf.png'"
onmouseout="document.pdf5.src='images/pdf_grey.png'"><p align="left">List polustracyjny</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/List polustracyjny.pdf" target="_blank" onmouseover="document.pdf5.src='images/pdf.png'"
onmouseout="document.pdf5.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf5" border="0">

</A>
    
      
      </td>
    </tr>
</table><br><br>
<!----------------------------------------------------------------------->
<p align="left"><b>Walne Zgromadzenie:</b></p>

<table width="620" border="0" cellspacing="0">
<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/Protokol_02-06-2015.pdf" target="_blank" onmouseover="document.pdf1001.src='images/pdf.png'"
onmouseout="document.pdf1001.src='images/pdf_grey.png'"><p align="left">Protokół z Walnego Zgromadzenia 2015r.</p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/Protokol_02-06-2015.pdf" target="_blank" onmouseover="document.pdf1001.src='images/pdf.png'"
onmouseout="document.pdf1001.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf1001" border="0" >

</A>
      </td>
    </tr>
	</table><br><br>
<!----------------------------------------------------------------------->
<p align="left"><b>Rada Nadzorcza:</b></p>

<table width="620" border="0" cellspacing="0">
<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/Sprawozdanie rady nadzorczej.pdf" target="_blank" onmouseover="document.pdf7.src='images/pdf.png'"
onmouseout="document.pdf7.src='images/pdf_grey.png'"><p align="left">Sprawozdanie Rady Nadzorczej</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/Sprawozdanie rady nadzorczej.pdf" target="_blank" onmouseover="document.pdf7.src='images/pdf.png'"
onmouseout="document.pdf7.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf7" border="0" >

</A> 
      </td>
    </tr>
	</table><br><br>
<!----------------------------------------------------------------------->	
	<p align="left"><b>Uchwały Rady Nadzorczej 2015r.</b></p>

<table width="620" border="0" cellspacing="0">
    <tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 1 plan gospodarczy.pdf" target="_blank" onmouseover="document.pdf101.src='images/pdf.png'"
onmouseout="document.pdf101.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 1 w sprawie: planu gospodarczego WSM „Ochota" na 2015r.</p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 1 plan gospodarczy.pdf" target="_blank" onmouseover="document.pdf101.src='images/pdf.png'"
onmouseout="document.pdf101.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf101" border="0" >

</A>
    
      
      </td>
    </tr>
    <tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Nr 2 regul. zamowien niepublicznych.pdf" target="_blank" onmouseover="document.pdf102.src='images/pdf.png'"
onmouseout="document.pdf102.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 2 w sprawie: zmian w Regulaminie udzielania zamówień niepublicznych na usługi, roboty
budowlane i dostawy świadczone dla WSM „Ochota".</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Nr 2 regul. zamowien niepublicznych.pdf" target="_blank" onmouseover="document.pdf102.src='images/pdf.png'"
onmouseout="document.pdf102.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf102" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 3 podzial WZ.pdf" target="_blank" onmouseover="document.pdf103.src='images/pdf.png'"
onmouseout="document.pdf103.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 3 w sprawie: podziału Walnego Zgromadzenia WSM „Ochota" na liczbę części i zaliczenia
członków do poszczególnych części Walnego Zgromadzenia.</p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 3 podzial WZ.pdf" target="_blank" onmouseover="document.pdf103.src='images/pdf.png'"
onmouseout="document.pdf103.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf103" border="0" >

</A>
      </td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Nr 4 Inwestycja-Hynka.pdf" target="_blank" onmouseover="document.pdf104.src='images/pdf.png'"
onmouseout="document.pdf104.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 4 w sprawie: ustalenia zasad realizowania inwestycji „Hynka".</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Nr 4 Inwestycja-Hynka.pdf" target="_blank" onmouseover="document.pdf104.src='images/pdf.png'"
onmouseout="document.pdf104.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf104" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 5 Inwestycja-RadarowaI.pdf" target="_blank" onmouseover="document.pdf105.src='images/pdf.png'"
onmouseout="document.pdf105.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 5 w sprawie: ustalenia zasad realizowania inwestycji „Radarowa I".</p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 5 Inwestycja-RadarowaI.pdf" target="_blank" onmouseover="document.pdf105.src='images/pdf.png'"
onmouseout="document.pdf105.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf105" border="0" >

</A>
      </td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Nr 6 inwestycja 1-go sierpnia.pdf" target="_blank" onmouseover="document.pdf106.src='images/pdf.png'"
onmouseout="document.pdf106.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 6 w sprawie: ustalenia zasad realizowania inwestycji „l - go Sierpnia".</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Nr 6 inwestycja 1-go sierpnia.pdf" target="_blank" onmouseover="document.pdf106.src='images/pdf.png'"
onmouseout="document.pdf106.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf106" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 7 inwestycja Moldawska.pdf" target="_blank" onmouseover="document.pdf107.src='images/pdf.png'"
onmouseout="document.pdf107.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 7 w sprawie: ustalenia zasad realizowania inwestycji „Mołdawska".</p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 7 inwestycja Moldawska.pdf" target="_blank" onmouseover="document.pdf107.src='images/pdf.png'"
onmouseout="document.pdf107.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf107" border="0" >

</A>
      </td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Nr 8 regulamin zamowien.pdf" target="_blank" onmouseover="document.pdf108.src='images/pdf.png'"
onmouseout="document.pdf108.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 8 w sprawie: zmian w Regulaminie udzielania zamówień niepublicznych na usługi, roboty
budowlane i dostawy świadczone dla WSM „Ochota"..</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Nr 8 regulamin zamowien.pdf" target="_blank" onmouseover="document.pdf108.src='images/pdf.png'"
onmouseout="document.pdf108.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf108" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 9 regulamin inwestycji.pdf" target="_blank" onmouseover="document.pdf109.src='images/pdf.png'"
onmouseout="document.pdf109.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 9 w sprawie: wzoru regulaminu realizacji inwestycji budowlanych na terenie nieruchomości znajdujących się w zasobach Warszawskiej Spółdzielni Mieszkaniowej "Ochota" na tzw. zasadach deweloperskich.</p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Nr 9 regulamin inwestycji.pdf" target="_blank" onmouseover="document.pdf109.src='images/pdf.png'"
onmouseout="document.pdf109.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf109" border="0" >

</A>
      </td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 10.pdf" target="_blank" onmouseover="document.pdf110.src='images/pdf.png'"
onmouseout="document.pdf110.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 10 w sprawie: zmian w „Regulaminie używania lokali oraz porządku domowego
w WSM „Ochota".</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Rady Nadzorczej Nr 10.pdf" target="_blank" onmouseover="document.pdf110.src='images/pdf.png'"
onmouseout="document.pdf110.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf110" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 11 - 34 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 35.pdf" target="_blank" onmouseover="document.pdf111.src='images/pdf.png'"
onmouseout="document.pdf111.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 35 w sprawie wyrażenia zgody na ustanowienie nieodpłatnej i bezterminowej służebności, polegającej na prawie przejścia i przejazdu, w celu dostępu do działki nr ew. 35/8 i 36/10 z obrębu 2-04-07 przy ul. 17 Stycznia w Warszawie</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Rady Nadzorczej Nr 35.pdf" target="_blank" onmouseover="document.pdf111.src='images/pdf.png'"
onmouseout="document.pdf111.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf111" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 36.pdf" target="_blank" onmouseover="document.pdf112.src='images/pdf.png'"
onmouseout="document.pdf112.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 36 w sprawie wyrażenia zgody na ustanowienie nieodpłatnej i bezterminowej służebności, polegającej na prawie przejścia i przejazdu, w celu dostępu do działki nr ew. 36/3 i 36/10 z obrębu 2-04-07 przy ul. 17 Stycznia w Warszawie </p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 36.pdf" target="_blank" onmouseover="document.pdf112.src='images/pdf.png'"
onmouseout="document.pdf112.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf112" border="0" >

</A>
      </td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 37.pdf" target="_blank" onmouseover="document.pdf113.src='images/pdf.png'"
onmouseout="document.pdf113.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 37 w sprawie wyrażenia zgody na ustanowienie nieodpłatnej i bezterminowej służebności, polegającej na prawie przejścia i przejazdu, w celu dostępu do działek nr ew. 16/3, 16/6, 16/5 z obrębu 2-04-07 przy ul. Astronautów w Warszawie </p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Rady Nadzorczej Nr 37.pdf" target="_blank" onmouseover="document.pdf113.src='images/pdf.png'"
onmouseout="document.pdf113.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf113" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 38.pdf" target="_blank" onmouseover="document.pdf114.src='images/pdf.png'"
onmouseout="document.pdf114.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 38 w sprawie wyrażenia zgody na ustanowienie nieodpłatnej i bezterminowej służebności, polegającej na prawie przejścia i przejazdu, w celu dostępu do działek nr ew. 8/1, 11/1 i 11/3 z obrębu 2-04-04 przy ul. Dwudziestolatków 3, Lechickiej 6, 8 i Lechickiej 4 w Warszawie  </p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 38.pdf" target="_blank" onmouseover="document.pdf114.src='images/pdf.png'"
onmouseout="document.pdf114.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf114" border="0" >

</A>
      </td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 39.pdf" target="_blank" onmouseover="document.pdf115.src='images/pdf.png'"
onmouseout="document.pdf115.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 39 w sprawie korekty planu gospodarczego WSM "Ochota" na 2015r.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Rady Nadzorczej Nr 39.pdf" target="_blank" onmouseover="document.pdf115.src='images/pdf.png'"
onmouseout="document.pdf115.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf115" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 40.pdf" target="_blank" onmouseover="document.pdf116.src='images/pdf.png'"
onmouseout="document.pdf116.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 40 w sprawie "Regulaminu indywidualnego rozliczania kosztów energii cieplnej dostarczanej na potrzeby centralnego ogrzewania do lokali mieszkalnych i lokali użytkowych będących w zasobach Warszawskiej Spółdzielni Mieszkaniowej "Ochota". </p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 40.pdf" target="_blank" onmouseover="document.pdf116.src='images/pdf.png'"
onmouseout="document.pdf116.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf116" border="0" >

</A>
      </td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 41.pdf" target="_blank" onmouseover="document.pdf117.src='images/pdf.png'"
onmouseout="document.pdf117.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 41 w sprawie zaciągnięcia kredytu z premią termomodernizacyjną Banku Gospodarstwa Krajowego na termomodernizację budynku przy ul. Korotyńskiego 21.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Rady Nadzorczej Nr 41.pdf" target="_blank" onmouseover="document.pdf117.src='images/pdf.png'"
onmouseout="document.pdf117.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf117" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 42.pdf" target="_blank" onmouseover="document.pdf118.src='images/pdf.png'"
onmouseout="document.pdf118.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 42 w sprawie zaciągnięcia kredytu z premią termomodernizacyjną Banku Gospodarstwa Krajowego na termomodernizację budynku przy ul. Grójeckiej 80/102.</p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 42.pdf" target="_blank" onmouseover="document.pdf118.src='images/pdf.png'"
onmouseout="document.pdf118.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf118" border="0" >

</A>
      </td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 43.pdf" target="_blank" onmouseover="document.pdf119.src='images/pdf.png'"
onmouseout="document.pdf119.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 43 w sprawie zaciągnięcia kredytu z premią termomodernizacyjną Banku Gospodarstwa Krajowego na termomodernizację budynku przy ul. Zarankiewicza 7.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Rady Nadzorczej Nr 43.pdf" target="_blank" onmouseover="document.pdf119.src='images/pdf.png'"
onmouseout="document.pdf119.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf119" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 44.pdf" target="_blank" onmouseover="document.pdf120.src='images/pdf.png'"
onmouseout="document.pdf120.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 44 w sprawie zaciągnięcia kredytu z premią termomodernizacyjną Banku Gospodarstwa Krajowego na termomodernizację budynku przy ul. Hynka 7.</p></A></td>
      <td align="right" bgcolor="#c5ddf5"><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 44.pdf" target="_blank" onmouseover="document.pdf120.src='images/pdf.png'"
onmouseout="document.pdf120.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf120" border="0" >

</A>
      </td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/RN/Uchwala Rady Nadzorczej Nr 45.pdf" target="_blank" onmouseover="document.pdf121.src='images/pdf.png'"
onmouseout="document.pdf121.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 45  w sprawie korekty planu gospodarczego WSM "Ochota" na 2015r.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015//RN/Uchwala Rady Nadzorczej Nr 45.pdf" target="_blank" onmouseover="document.pdf121.src='images/pdf.png'"
onmouseout="document.pdf121.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf121" border="0">

</A></td>
    </tr>
	
	</table><br><br>
<!----------------------------------------------------------------------->
<p align="left"><b>Zarząd:</b></p>

<table width="620" border="0" cellspacing="0">
<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/Sprawozdanie za 2014.pdf" target="_blank" onmouseover="document.pdf3.src='images/pdf.png'"
onmouseout="document.pdf3.src='images/pdf_grey.png'"><p align="left">Sprawozdanie Zarządu z działalności WSM "Ochota" za rok 2014</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/Sprawozdanie za 2014.pdf" target="_blank" onmouseover="document.pdf3.src='images/pdf.png'"
onmouseout="document.pdf3.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf3" border="0">

</A></td>
    </tr>
    <tr>
      <td><A HREF="dokumenty/2015/Sprawozdanie finansowe 2014.pdf" target="_blank" onmouseover="document.pdf4.src='images/pdf.png'"
onmouseout="document.pdf4.src='images/pdf_grey.png'"><p align="left">Sprawozdanie finansowe za rok 2014</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/Sprawozdanie finansowe 2014.pdf" target="_blank" onmouseover="document.pdf4.src='images/pdf.png'"
onmouseout="document.pdf4.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf4" border="0">

</A></td>
    </tr>
	</table><br><br>
<!----------------------------------------------------------------------->
<p align="left"><b>Uchwały Zarządu 2015r.:</b></p>

<table width="620" border="0" cellspacing="0">
<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 1,2 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">

</A></td>
    </tr>
    <tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr3.pdf" target="_blank" onmouseover="document.pdf400.src='images/pdf.png'"
onmouseout="document.pdf400.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 3 w sprawie: powołanie komisji przetargowej w Os. Jadwisin celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr3.pdf" target="_blank" onmouseover="document.pdf400.src='images/pdf.png'"
onmouseout="document.pdf400.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf400" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr4.pdf" target="_blank" onmouseover="document.pdf401.src='images/pdf.png'"
onmouseout="document.pdf401.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 4 w sprawie: powołanie komisji przetargowej w Os. Gorlicka/Kolonii Okęcie celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr4.pdf" target="_blank" onmouseover="document.pdf401.src='images/pdf.png'"
onmouseout="document.pdf401.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf401" border="0">

</A></td>
    </tr>
    <tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr5.pdf" target="_blank" onmouseover="document.pdf402.src='images/pdf.png'"
onmouseout="document.pdf402.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 5 w sprawie: powołanie komisji przetargowej w Os. Gorlicka/Kolonii Okęcie celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr5.pdf" target="_blank" onmouseover="document.pdf402.src='images/pdf.png'"
onmouseout="document.pdf402.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf402" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 6,7,8 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr9.pdf" target="_blank" onmouseover="document.pdf403.src='images/pdf.png'"
onmouseout="document.pdf403.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 9 w sprawie: miesięcznej stawki opłat za <b>lokale mieszkalne</b> dla członków Spółdzielni i właścicieli będących członkami oraz osób nie będących członkami tytułem prawnym do lokalu.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr9.pdf" target="_blank" onmouseover="document.pdf403.src='images/pdf.png'"
onmouseout="document.pdf403.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf403" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr10.pdf" target="_blank" onmouseover="document.pdf404.src='images/pdf.png'"
onmouseout="document.pdf404.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 10 w sprawie: miesięcznej stawki opłat za <b>garaże</b> członków Spółdzielni i właścicieli będących członkami oraz osób nie będących członkami z tytułem prawnym do garażu.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr10.pdf" target="_blank" onmouseover="document.pdf404.src='images/pdf.png'"
onmouseout="document.pdf404.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf404" border="0">

</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr11.pdf" target="_blank" onmouseover="document.pdf405.src='images/pdf.png'"
onmouseout="document.pdf405.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 11 w sprawie: miesięcznej stawki opłat za <b>miejsce postojowe</b> w garażach podziemnych wielostanowiskowych dla członków Spółdzielni oraz osób będących nie będących członkami z tytułem prawnym do miejsca postojowego w wielostanowiskowym garażu podziemnym.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr11.pdf" target="_blank" onmouseover="document.pdf405.src='images/pdf.png'"
onmouseout="document.pdf405.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf405" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr12.pdf" target="_blank" onmouseover="document.pdf406.src='images/pdf.png'"
onmouseout="document.pdf406.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 12 w sprawie: miesięcznej stawki za <b>lokale użytkowe własnościowe</b> dla członków i osób nie będących członkami z tytułem prawnym do lokalu użytkowego.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr10.pdf" target="_blank" onmouseover="document.pdf406.src='images/pdf.png'"
onmouseout="document.pdf406.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf406" border="0">

</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr13.pdf" target="_blank" onmouseover="document.pdf407.src='images/pdf.png'"
onmouseout="document.pdf407.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 13 w sprawie: miesięcznej stawki za <b>lokale użytkowe własnościowe</b> dla członków i osób nie będących członkami z tytułem prawnym do lokalu użytkowego.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr13.pdf" target="_blank" onmouseover="document.pdf407.src='images/pdf.png'"
onmouseout="document.pdf407.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf407" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr14.pdf" target="_blank" onmouseover="document.pdf408.src='images/pdf.png'"
onmouseout="document.pdf408.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 14 w sprawie: miesięcznej stawki za <b>miejsce postojowe</b> w garażu podziemnym wielostanowiskowym dla członków Spółdzielni i właścicieli będących członkami oraz osób nie będących członkami z tytułem prawnym do miejsca postojowego w wielostanowiskowym garażu podziemnym.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr14.pdf" target="_blank" onmouseover="document.pdf408.src='images/pdf.png'"
onmouseout="document.pdf408.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf408" border="0">

</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr15.pdf" target="_blank" onmouseover="document.pdf409.src='images/pdf.png'"
onmouseout="document.pdf409.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 15 w sprawie: miesięcznej stawki za <b>garaże</b> dla członków i właścicieli będących członkami oraz osób nie będących członkami z tytułem prawnym do garażu.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr15.pdf" target="_blank" onmouseover="document.pdf409.src='images/pdf.png'"
onmouseout="document.pdf409.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf409" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr16.pdf" target="_blank" onmouseover="document.pdf410.src='images/pdf.png'"
onmouseout="document.pdf410.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 16 w sprawie: miesięcznej stawki opłat za <b>lokale mieszkalne</b> i pracownie dla członków Spółdzielni i właścicieli będących członkami oraz osób nie będących członkami z tytułem prawnym do lokalu.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr16.pdf" target="_blank" onmouseover="document.pdf410.src='images/pdf.png'"
onmouseout="document.pdf410.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf410" border="0">

</A></td>
    </tr>
	
	<tr>
      <td><p align="left">Uchwała nr 17 zawiera dane chronione</p></A></td>
      <td align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr18.pdf" target="_blank" onmouseover="document.pdf411.src='images/pdf.png'"
onmouseout="document.pdf411.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 18 w sprawie: wysokości czynszu dla osób bez tytułu prawnego do lokalu mieszkalnego (pozbawionych członkowstwa z orzeczoną eksmisją lub bez podpisanej ze Spółdzielnią umowy najmu).</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr18.pdf" target="_blank" onmouseover="document.pdf411.src='images/pdf.png'"
onmouseout="document.pdf411.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf411" border="0">

</A></td>
    </tr>
	
	<tr>
      <td><p align="left">Uchwała nr 19 zawiera dane chronione</p></A></td>
      <td align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr20.pdf" target="_blank" onmouseover="document.pdf412.src='images/pdf.png'"
onmouseout="document.pdf412.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 20 w sprawie: wysokości czynszu dla osób bez tytułu prawnego do lokalu mieszkalnego (pozbawionych członkowstwa z orzeczoną eksmisją lub bez podpisanej ze Spółdzielnią umowy najmu).</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr20.pdf" target="_blank" onmouseover="document.pdf412.src='images/pdf.png'"
onmouseout="document.pdf412.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf412" border="0">

</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr21.pdf" target="_blank" onmouseover="document.pdf413.src='images/pdf.png'"
onmouseout="document.pdf413.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 21 w sprawie: wysokości czynszu dla najemcy garażu na zasadzie umowy najmu.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr21.pdf" target="_blank" onmouseover="document.pdf413.src='images/pdf.png'"
onmouseout="document.pdf413.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf413" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 22, 23, 24, 25, 26, 27, 28, 29 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr30.pdf" target="_blank" onmouseover="document.pdf414.src='images/pdf.png'"
onmouseout="document.pdf414.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 30 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r..</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr30.pdf" target="_blank" onmouseover="document.pdf414.src='images/pdf.png'"
onmouseout="document.pdf414.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf414" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr31.pdf" target="_blank" onmouseover="document.pdf415.src='images/pdf.png'"
onmouseout="document.pdf415.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 31 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r..</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr31.pdf" target="_blank" onmouseover="document.pdf415.src='images/pdf.png'"
onmouseout="document.pdf415.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf415" border="0">

</A></td>
    </tr>
	<tr>
      <td><p align="left">Uchwały nr 32, 33, 34 zawierają dane chronione</p></A></td>
      <td align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr35.pdf" target="_blank" onmouseover="document.pdf416.src='images/pdf.png'"
onmouseout="document.pdf416.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 35 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr35.pdf" target="_blank" onmouseover="document.pdf416.src='images/pdf.png'"
onmouseout="document.pdf416.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf416" border="0">

</A></td>
    </tr>
	<tr>
      <td><p align="left">Uchwały nr 36, 37, 38, 39, 40 zawierają dane chronione</p></A></td>
      <td align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr41.pdf" target="_blank" onmouseover="document.pdf417.src='images/pdf.png'"
onmouseout="document.pdf417.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 41 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr41.pdf" target="_blank" onmouseover="document.pdf417.src='images/pdf.png'"
onmouseout="document.pdf417.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf417" border="0">

</A></td>
    </tr>
	<tr>
      <td><p align="left">Uchwały nr 42, 43 zawierają dane chronione</p></A></td>
      <td align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr44.pdf" target="_blank" onmouseover="document.pdf418.src='images/pdf.png'"
onmouseout="document.pdf418.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 44 w sprawie: zmiany uchwały nr 16/2015 w zakresie miesięcznej stawki opłat za <b>lokale mieszkalne</b> i pracownie dla członków Spółdzielni i właścicieli będących członkami oraz dla osób nie będących członkami z tytułem prawnym do lokalu.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr44.pdf" target="_blank" onmouseover="document.pdf418.src='images/pdf.png'"
onmouseout="document.pdf418.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf418" border="0">

</A></td>
    </tr>
	<tr>
      <td><p align="left">Uchwały nr 45, 46, 47, 48, 49 zawierają dane chronione</p></A></td>
      <td align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 50.pdf" target="_blank" onmouseover="document.pdf419.src='images/pdf.png'"
onmouseout="document.pdf419.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 50 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania remontu balkonów ul. Lechicka 8 oraz remontu elewacji ul. Korotyńskiego 21 w 2015r.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 50.pdf" target="_blank" onmouseover="document.pdf419.src='images/pdf.png'"
onmouseout="document.pdf419.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf419" border="0">

</A></td>
    </tr>
	<tr>
      <td><p align="left">Uchwały nr 51, 52, 53, 54, 55, 56, 57, 58 zawierają dane chronione</p></A></td>
      <td align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 59.pdf" target="_blank" onmouseover="document.pdf420.src='images/pdf.png'"
onmouseout="document.pdf420.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 59 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania przeciwpożarowego wyłącznika prądu w garażach podziemnych budynków mieszkalnych przy ul. Racławickiej 127, 129, 131, 133 w 2015r.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 59.pdf" target="_blank" onmouseover="document.pdf420.src='images/pdf.png'"
onmouseout="document.pdf420.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf420" border="0">

</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 60.pdf" target="_blank" onmouseover="document.pdf421.src='images/pdf.png'"
onmouseout="document.pdf421.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 60 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r. - Przemurowanie kominów dachowych ul. Okińskiego 6, Okińskiego 10, Tańskiego 7.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 60.pdf" target="_blank" onmouseover="document.pdf421.src='images/pdf.png'"
onmouseout="document.pdf421.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf421" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 61.pdf" target="_blank" onmouseover="document.pdf422.src='images/pdf.png'"
onmouseout="document.pdf422.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 61 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r. - Remont elewacji i balkonów budynku mieszkalnego ul. Zarankiewicza 7. Hynka 7.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 61.pdf" target="_blank" onmouseover="document.pdf422.src='images/pdf.png'"
onmouseout="document.pdf422.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf422" border="0">

</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 62.pdf" target="_blank" onmouseover="document.pdf423.src='images/pdf.png'"
onmouseout="document.pdf423.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 62 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r. - Wymiana instalacji zimnej wody, doposażenia ccw. oraz remont węzła cieplnego ul. Żwirki i Wigury 5.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 62.pdf" target="_blank" onmouseover="document.pdf423.src='images/pdf.png'"
onmouseout="document.pdf423.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf423" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 63.pdf" target="_blank" onmouseover="document.pdf424.src='images/pdf.png'"
onmouseout="document.pdf424.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 63 w sprawie: Wysokość czynszu dla najemców lokali mieszkalnych oraz byłych pracowników - gospodarzy, którzy zakończyli pracę przechodząc na emeryturę lub ręntę i zajmują nadal na zasadzie umowy najmu dawne lokale służbowe.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 63.pdf" target="_blank" onmouseover="document.pdf424.src='images/pdf.png'"
onmouseout="document.pdf424.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf424" border="0">

</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 64.pdf" target="_blank" onmouseover="document.pdf425.src='images/pdf.png'"
onmouseout="document.pdf425.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 64 w sprawie: Wysokości czynszu dla osób bez tytułu prawnego do lokalu mieszkalnego (pozbawionych członkowstwa z orzeczoną eksmisją lub bez podpisanej ze Spółdzielnią umowy najemu).</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 64.pdf" target="_blank" onmouseover="document.pdf425.src='images/pdf.png'"
onmouseout="document.pdf425.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf425" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 65, 66, 67, 68, 69, 70, 71, 72 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
		
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 73.pdf" target="_blank" onmouseover="document.pdf427.src='images/pdf.png'"
onmouseout="document.pdf427.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 73 w sprawie: powołanie komisji przetargowej celem wybrania najkorzystniejszej oferty na roboty do wykonania w 2015r - zagospodarowanie terenu między budynkami Baleya 4 i Baleya 6.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 73.pdf" target="_blank" onmouseover="document.pdf427.src='images/pdf.png'"
onmouseout="document.pdf427.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf427" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 74, 75, 76, 77, 78, 79 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 80.pdf" target="_blank" onmouseover="document.pdf428.src='images/pdf.png'"
onmouseout="document.pdf428.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 80 w sprawie: przeprowadzenia inwentaryzacji środków trwałych ruchomych i środków niskiej wartości w Osiedlu Gorlicka, Osiedlu Jadwisin oraz Biurze Spółdzielni wg stanu na dzień 31.10.2015r.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 80.pdf" target="_blank" onmouseover="document.pdf428.src='images/pdf.png'"
onmouseout="document.pdf428.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf428" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 81.pdf" target="_blank" onmouseover="document.pdf429.src='images/pdf.png'"
onmouseout="document.pdf429.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 81 w sprawie: przeprowadzenia inwentaryzacji materiałów w magazynkach podręcznych w Osiedlu Gorlicka i Osiedlu Jadwisin wg stanu na dzień 31.10.2015r.</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 81.pdf" target="_blank" onmouseover="document.pdf429.src='images/pdf.png'"
onmouseout="document.pdf429.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf429" border="0">

</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 82.pdf" target="_blank" onmouseover="document.pdf430.src='images/pdf.png'"
onmouseout="document.pdf430.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 82 w sprawie: Miesięcznej stawki opłat za <b>lokale mieszkalne</b> i pracownie dla członków spółdzielni i właścicieli będących członkami oraz dla osób nie będących członkami z tytułem prawnym do lokalu. </p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 82.pdf" target="_blank" onmouseover="document.pdf430.src='images/pdf.png'"
onmouseout="document.pdf430.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf430" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 83.pdf" target="_blank" onmouseover="document.pdf431.src='images/pdf.png'"
onmouseout="document.pdf431.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 83 w sprawie: Wysokości czynszu dla osób bez tytułu prawnego do lokalu mieszkalnego (pozbawionych członkowstwa z orzeczoną eksmisją lub bez podpisanej ze Spółdzielnią umowy najemu).</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 83.pdf" target="_blank" onmouseover="document.pdf431.src='images/pdf.png'"
onmouseout="document.pdf431.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf431" border="0">

</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 84.pdf" target="_blank" onmouseover="document.pdf432.src='images/pdf.png'"
onmouseout="document.pdf432.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 84 w sprawie: Wysokość czynszu dla najemców lokali mieszkalnych oraz byłych pracowników - dozorców, którzy zakończyli pracę przechodząc na emeryturę lub ręntę i zajmują nadal na zasadzie umowy najmu dawne lokale służbowe. </p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu Nr 84.pdf" target="_blank" onmouseover="document.pdf432.src='images/pdf.png'"
onmouseout="document.pdf432.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf432" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 85, 86 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 87.pdf" target="_blank" onmouseover="document.pdf433.src='images/pdf.png'"
onmouseout="document.pdf433.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 87 w sprawie: Miesięcznej stawki opłat za <b>lokale mieszkalne</b> i pracownie dla członków spółdzielni i właścicieli będących członkami oraz dla osób nie będących członkami z tytułem prawnym do lokalu. </p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 87.pdf" target="_blank" onmouseover="document.pdf433.src='images/pdf.png'"
onmouseout="document.pdf433.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf433" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 88, 89 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 90.pdf" target="_blank" onmouseover="document.pdf434.src='images/pdf.png'"
onmouseout="document.pdf434.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 90 w sprawie: Powołania Komisji Przetargowej celem wybrania najkorzystniejszej oferty na Generalnego Realizatora Inwestycji (GRI) do realizacji inwestycji budowlanej Mołdawska. </p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 90.pdf" target="_blank" onmouseover="document.pdf434.src='images/pdf.png'"
onmouseout="document.pdf434.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf434" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 91, 92 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	<tr>
      <td><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 93.pdf" target="_blank" onmouseover="document.pdf435.src='images/pdf.png'"
onmouseout="document.pdf435.src='images/pdf_grey.png'"><p align="left">Uchwała Nr 93 w sprawie: Powołania zespołu spisowego inwentaryzacji środków trwałych ruchomych, środków niskiej wartości w magazynkach podręcznych w Osiedlu Gorlicka i Osiedlu Jadwisin oraz biurze Zarządu.</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/UZ/Uchwala Zarzadu nr 93.pdf" target="_blank" onmouseover="document.pdf435.src='images/pdf.png'"
onmouseout="document.pdf435.src='images/pdf_grey.png'"><IMG SRC="images/pdf_grey.png" NAME="pdf435" border="0">

</A></td>
    </tr>
	<tr>
      <td bgcolor="#c5ddf5"><p align="left">Uchwały nr 94, 95, 96, 97, 98, 99 zawierają dane chronione</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><IMG SRC="images/pdf_grey.png" border="0">
</A></td>
    </tr>
	</table><br><br>
<!----------------------------------------------------------------------->
<p align="left"><b>Rada Osiedla:</b></p>

<table width="620" border="0" cellspacing="0">
<tr>
      <td><A HREF="dokumenty/2015/Sprawozdanie rady osiedla gorlicka.pdf" target="_blank" onmouseover="document.pdf8.src='images/pdf.png'"
onmouseout="document.pdf8.src='images/pdf_grey.png'"><p align="left">Sprawozdanie Rady Osiedla Gorlicka</p></A></td>
      <td align="right"><A HREF="dokumenty/2015/Sprawozdanie rady osiedla gorlicka.pdf" target="_blank" onmouseover="document.pdf8.src='images/pdf.png'"
onmouseout="document.pdf8.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf8" border="0" >

</A>
      </td>
    </tr>
    <tr>
      <td bgcolor="#c5ddf5"><A HREF="dokumenty/2015/Sprawozdanie rady jadwisin.pdf" target="_blank" onmouseover="document.pdf9.src='images/pdf.png'"
onmouseout="document.pdf9.src='images/pdf_grey.png'"><p align="left">Sprawozdanie Rady Osiedla Jadwisin</p></A></td>
      <td bgcolor="#c5ddf5" align="right"><A HREF="dokumenty/2015/Sprawozdanie rady jadwisin.pdf" target="_blank" onmouseover="document.pdf9.src='images/pdf.png'"
onmouseout="document.pdf9.src='images/pdf_grey.png'">
<IMG SRC="images/pdf_grey.png" NAME="pdf9" border="0" >

</A>
      </td>
    </tr>
	</table><br><br>
<!----------------------------------------------------------------------->
	
<br><a href='dokumenty.php?wyloguj=tak'>wyloguj się</a>
<?php
}
?></center>
    </td></tr>
    </table>
  </center>
  <p>
  
  </p>
</div>




</div>

<div id="sidebar">
<center>
    <a href="http://smochota.no-ip.biz:3357/apex/f?p=110:1" target="new" border="0"><img src="images/bok1.jpg"></a><br /><br />
    <a href="uniqa.html" border="0"><img src="images/uniqua.gif"></a><br /><br />
	<a href="wfosigw.html" border="0"><img src="images/WFOSiGW_logo.jpg"></a></br/><br/>
	<a href="lokale.html"><img src="images/lokale.jpg" border="0"></a><br/><br/>
	<a href="klubStokrotka.html"><img src="images/stokrotka.jpg" border="0"></a><br /><br />
    <a href="klubJedynka.html"><img src="images/jedynka.jpg" border="0"></a><br />
	
    </center>

</div>
    
    </div>
    
<div class="clear"></div>

<div id="footer">
<table width="976"><tr><td>
Copyright &#169; by WSM OCHOTA : Warszawska Spółdzielnia Mieszkaniowa "Ochota" 2014r.</td><td align="right"><img src="images/logo_m.png" width="18" height="18" alt="StudioAkcja"></td></tr></table>
</div>
<br />

</div>
</body>
</html>
<?php mysql_close(); ?>