<html>
    <head>
        <title></title>
    </head>
    <body>
        <head>
            <title></title>
        </head>
        <body>
            <?=form_open(base_url().'mantComments/edit/')?>
            <form name="edit" action="http://localhost/BlogCodeIgniter/mantComments/edit" method="POST">
                <table>
                    <tr>
                        <td>Author: </td>
                        <td><?php echo form_input('txtCreator', $comment[0]->creator); ?></td>
                    </tr>
                    <tr>
                        <td>Status: </td>
                        <td><?php echo form_input('txtStatus', $comment[0]->status); ?></td>
                    </tr>
                    <tr>
                        <td>Comment: </td>
                        <td><?php echo form_textarea('txtComment', $comment[0]->comment); ?></td>
                    </tr>
                </table>
                <?php echo form_hidden('idComment', $comment[0]->id) ?>
                <?php echo form_submit('','Accept') ?>
            </form>
    </body>
    </body>
</html>