<div class="container mt-5">
<a href="?action=addUsers" class="btn btn-success ">Ajouter</a>
<h2 class="mt-5">Gestion des Utilisateurs</h2>
<table class="table table-bordered mt-5">

        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>prenom</th>
            <th>PWD</th>
            <th>Email</th>
            <th>Numero</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        <?php foreach($result as $r) :?>
            <tr>
                <td><?php echo $r->getId()  ?></td>
                <td><?php echo $r->getNom()  ?></td>
                <td><?php echo $r->getPrenom()  ?></td>
                <td><?php echo str_repeat('*', strlen($r->getPwd())) ?></td>
                <td><?php echo $r->getEmail()  ?></td>
                <td><?php echo $r->getNumero()  ?></td>
                <td><?php echo $r->getRole()->getNom()  ?></td>
                <td>
                    <a href="?action=deleteUsers&&id=<?php echo $r->getId() ?>" class="btn btn-danger">Supprimer</a>
                    <br>
                    <a href="?action=updateUsers&&id=<?php echo $r->getId() ?>" class="btn btn-primary">Modifier</a>
                </td>
            </tr>
        <?php endforeach ?>

</table>
</div>