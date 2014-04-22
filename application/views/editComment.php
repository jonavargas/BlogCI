<html>
    <head>
        <title>Post</title>
        <?php include('menu.php');?>
    </head>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
    <body>
        <body>
            <?=form_open(base_url().'mantComments/edit/')?>
            <form name="edit" action="http://localhost/BlogCodeIgniter/mantComments/edit/" method="POST">
                        <div class='editC'>
                            <div class='labelEd'><b>Author: </b></div>                            
                            <div class='inputAuthorEd'><b><input name="txtCreator" value= <?php echo $comment[0]->creator ?> readonly></b></div>
                            <div class='labelEd'><b>Status: </b></div>
                            <div class='inputStatusEd'><b><?php echo form_input('txtStatus', $comment[0]->status); ?></b></div>                        
                            <div class='labelEd'><b>Comment: </b></div> 
                            <div class='inputCommentEd'><b><?php echo form_textarea('txtComment', $comment[0]->comment); ?></b></div>                                              
                            <?php echo form_hidden('idComment', $comment[0]->id) ?>
                            <div class='btnEdit'><?php echo form_submit('','End') ?> </div>
                        </div> 
            </form>
    </body>
    </body>
</html>