<?php
$pagename="template"; //Create and populate a variable called $pagename 
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>";
echo "<body>";
include ("headfile.html");
echo "<h4>".$pagename."</h4>";
//display name of the page as window title
//include header layout file
//display name of the page on the web page
//display random text
echo "<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utlabore et dolore magna aliqua. Non consectetur a erat nam at lectus urna. Cras pulvinar mattis nunc sedblandit libero volutpat sed cras. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras.Nunc consequat interdum varius sit. Nam aliquam sem et tortor consequat. Magna sit amet purus gravida. Nonsodales neque sodales ut etiam sit. Tortor consequat id porta nibh venenatis. Ornare arcu odio ut semnulla pharetra diam. Tincidunt ornare massa eget egestas purus. Pulvinar mattis nunc sed blandit liberovolutpat sed. Nulla malesuada pellentesque elit eget. Varius quam quisque id diam vel quam elementumpulvinar. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Vestibulum lectus mauris ultriceseros in. Faucibus in ornare quam viverra. Hac habitasse platea dictumst vestibulum rhoncus. Parturientmontes nascetur ridiculus mus. Dui accumsan sit amet nulla facilisi morbi tempus iaculis urna.";
include("footfile.html"); //include head layout
echo "</body>";
?>