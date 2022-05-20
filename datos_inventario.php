<div class="container"><br>
    <table id="usuarios" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>USUARIO</th>
            <th>EMAIL</th>
            <th></th>
            <th></th>
        </tr>
        <tbody>
            <?php
            include_once 'class/usuarios.php';
            if (!isset($_SESSION['user_id'])) {
                header('Location: index.php');
                exit;
            }
            $crud = new crud($conn);
            ?>
            <?php
            $query = "SELECT * FROM usuarios";
            $crud->dataview($query)
            ?>

        </tbody>
    </table>
</div>