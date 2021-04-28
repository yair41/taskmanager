<?
	session_start(); 	//this must be at the top of every page
//	include('checkloged.php'); 
?>
<html>
<head>
  <title>Tasks</title>
  <meta NAME="Author" CONTENT="Shimon&Yair test">
  <meta http-equiv="Content-Type" content="text/html; charset=Windows-1255">	
  <Link REL=STYLESHEET HREF="../style.css" TYPE="text/css">

  <link rel="stylesheet" href="../datepicker/jquery-ui.css">
  <script src="../datepicker/jquery-1.10.2.js"></script>
  <script src="../datepicker/jquery-ui.js"></script>
  <script src="../datepicker/jquery-ui.datepicker.js"></script>   
  <script src="../datepicker/jquery.ui.datepicker-he.js"></script>

</head>
<BODY dir="rtl">
    <table width="1200" height=500 cellpadding=1 cellspacing=1 class="wrapping" align="center" >
        <tr>
            <td valign=top><? include('header.php') ?></td>
        </tr>
		<tr>
	        <td height=100% valign=top>
                <TABLE WIDTH=100% height=100% align=center cellspacing=0 cellpadding=0 >
	                <tr>
	                    <td width=15% valign="top"><? include ('../leftmenuOLD2.php')?></td>
	                    <td valign="top" align="center"><? ReadIndexOption(); ?></td>
	                </tr>
	            </TABLE>
            </td>
		</tr>
        <tr>
	        <td><? include('../footer.php') ?></td>
		</tr>
    </table>
</BODY>
</html>
<?
function ReadIndexOption()
{
	if(!isset($_GET['page']) )
		include('../login.inc');
 	else
	{
		if  ( isset($_GET['page']) )
    	{
		        switch ($_GET['page'])
		        {
		            case "login" :
		                include('login.inc');
		                break;
					case "addtask":
						include('addtask.php');
						break;
		            case "showalltasks" :
		                include('showalltasks.php');
		                break;
		            case "showalltasks3" :
		                include('showalltasks3.php');
		                break;
		            case "showgantt" :
		                include('showgantt.php');
		                break;
		            case "addmachine" :
		                include('addmachine.php');
		                break;
					case "showlinktask":
						include('showlinktask.php');
						break;
					case "showlinktask1":
						include('showlinktask1.php');
						break;
					case "updatetask":
						include('updatetask.php');
						break;
					case "updatetaskdesc":
						include('updatetaskdesc.php');
						break;
					case "updatetaskdesc1":
						include('updatetaskdesc1.php');
						break;
					case "addeco":
						include('addeco.php');
						break;
					case "showeco":
						include('showeco.php');
						break;						
					case "showallecos":
						include('showallecos.php');
						break;						
					case "showmachine":
						include('showmachine.php');
						break;						
					case "updatesys":
						include('updatesys.php');
						break;
					case "showallmachs":
						include('showallmachs.php');
						break;
					case "addtaskdesc":
						include('addtaskdesc.php');
						break;
					case "showallflagtasks":
						include('showallflagtasks.php');
						break;
					case "addpullback":
						include('addpullback.php');
						break;
					case "addhandpiece":
						include('addhandpiece.php');
						break;
					case "showmachhp":
						include('showmachhp.php');
						break;
					case "showhandpieces":
						include('showhandpieces.php');
						break;
					case "showhp":
						include('showhp.php');
						break;
					case "updatehp":
						include('updatehp.php');
						break;
					case "matchhpmach":
						include('matchhpmach.php');
						break;
		        }
		}
	}
}
?>

