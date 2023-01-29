<html>
<head>
	<style type="text/css">
		.searchbar
		{
			border:1px solid #00000;
			font-size: 16px;
			padding: 10px;
			outline: none;
			width: 250px;
            -webkit-border-top-left-radius:10px;
            -webkit-border-bottom-left-radius:10px;
            -moz-border-radius-topleft:10px;
             -moz-border-radius-bottomleft:10px;
            border-top-left-radius:10px;
            border-bottom-left-radius: 10px;
		}
	</style>
<script>
function showResult(str){
if(str.length==0){
document.getElementById("livesearch").innerHTML="";
document.getElementById("livesearch").style.border="0px";
return;
}
if(window.XMLHttpRequest){
// Code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{//Code for IE6, IE5
xmlhttp=new ActiveXobject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function(){
if(xmlhttp.readyState==4 && xmlhttp.status==200){
document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
document.getElementById("livesearch").style.border="1px solid #A5ACB2";
}
}
xmlhttp.open("GET", "livesearch.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<form>

<input class="searchbar" type="text" size="50" onKeyUp="showResult(this.value)" placeholder="Search.....">
<div id="livesearch"></div>
</form>
</body>
</html>
