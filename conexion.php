<?php
//------------------------------------------------------------------------

	$s='localhost';
	$u='lucas';
	$c='andres';
	$b='lucas';
	
	$con=mysql_connect($s,$u,$c);
	mysql_select_db($b,$con);
/*
function db_connect()
{
   $result = mysql_connect('localhost','lucas','andres');
//   $result = mysql_connect('mysql.denaroweb.com.ar','denaroweb','OJVGbRuZ');
   
   if (!$result)
	{
	  echo "<p><strong>Fallo en la conexi&oacute;n</strong></p>";
      return false;
	}
   if (!@mysql_select_db('lucas'))
//   if (!@mysql_select_db('denaroweb'))
	{
	  echo "<p><strong>Fallo en la base</strong></p>";
      return false;
	}
   return $result;
}
//------------------------------------------------------------------------
function db_result_to_array($result)
{
   $res_array = array();

   for ($count=0; $row = @mysql_fetch_array($result); $count++)
     $res_array[$count] = $row;

   return $res_array;
}
*/
?>
