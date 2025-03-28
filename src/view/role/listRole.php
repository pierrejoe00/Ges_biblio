
<div class="container mt-5">

<a href="?action=addRole" class="btn btn-success ">Ajouter</a>

<h2 class="mt-5">Gestions des Roles</h2>
<table class="table table-bordered mt-5">

        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr>
        <?php foreach($result as $r) :?>
            <tr>
                <td><?php echo $r->getId()  ?></td>
                <td><?php echo $r->getNom()  ?></td>
                <td>
                    <a href="?action=deleteRole&&id=<?php echo $r->getId() ?>" class="btn btn-danger">Supprimer</a>
                    <br>
                    <a href="?action=updateRole&&id=<?php echo $r->getId() ?>" class="btn btn-primary">Modifier</a>
                </td>
            </tr>
        <?php endforeach ?>

</table>
</div>