<?php
if(!mysql_connect("localhost","root","dwyanew518756?"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("ahmetsaid"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>