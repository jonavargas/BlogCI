<!DOCTYPE HTML>
<html>
 <head>
   <title>Login</title>
 </head>
 <body>
   <h1></h1>
   <?php echo validation_errors(); ?>
   <?php echo form_open('validate'); ?>
     <label for="username">User:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Pass:</label>
     <input type="password" size="20" id="passowrd" name="password"/>
     <br/>
     <input type="submit" value="Enter"/>
   </form>
 </body>
</html>