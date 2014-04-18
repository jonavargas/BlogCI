<html>
 <head>
 <title></title>
 </head>
 <body>
	<html>
 <head>
 <title></title>
 </head>
 <body>
 	<?=form_open(base_url().'mantComments/edit/')?>
 <form name="editar" action="http://localhost/BlogCodeIgniter/mantComments/edit" method="POST">
 
 <table>
 <tr>
 <td>Author: </td><td><input name="txtCreator" value="<?=$comment[0]->creator?>" type="text"/></td>
 </tr>
 <tr>
 <td>Status: </td><td><input name="txtStatus" value="<?=$comment[0]->status?>" type="text"/></td>
 </tr>
 <tr>
 <td>Comment: </td><td><input name="txtComment" value="<?=$comment[0]->comment?>" type="text"/></td>
 </tr>
 </table>
 <input type="hidden" name="idComment" value='<?=$comment[0]->id?>'/>
 <input type="submit" value="Editar" />
 </form>
 </body>
</html>

 </body>
</html>