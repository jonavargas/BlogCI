<html>
    <head>
        <title></title>
    </head>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/style.css'); ?>>
    <body>
        <head>
            <title></title>
        </head>
        <body>
            <?=form_open(base_url() . 'mantPost/edit/')?>
            <form name="edit" action="http://localhost/BlogCodeIgniter/mantPost/edit" method="POST">
                <table>
                    <tr>
                        <td>Author: </td>
                        <td><?php echo form_input('txtCreator', $data[0]->creator); ?></td>
                    </tr>
                    <tr>
                        <td>Title: </td>
                        <td><?php echo form_input('txtTitle', $data[0]->title); ?></td>
                    </tr>
                    <tr>
                        <td>Content: </td>
                        <td><?php echo form_textarea('txtContent', $data[0]->content); ?></td>
                    </tr>
                </table>
                <?php echo form_hidden('idPost', $data[0]->id) ?>
                <?php echo form_submit('','End') ?>
            </form>
    </body>
    </body>
</html>