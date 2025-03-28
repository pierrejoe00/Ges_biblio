<div class="container mt-5">
<a href="?action=addAuteur" class="btn btn-success ">Ajouter</a>
<h3 class="mt-5">Liste des Auteurs</h3>
<table class="table table-bordered mt-5">

        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>prenom</th>
            <th>Profession</th>
            <th>Actions</th>
        </tr>
        <?php foreach($result as $r) :?>
            <tr>
                <td><?php echo $r->getId()  ?></td>
                <td><?php echo $r->getNom()  ?></td>
                <td><?php echo $r->getPrenom()  ?></td>
                <td><?php echo $r->getProfession()  ?></td>
                <td>
                    <a href="?action=deleteAuteur&&id=<?php echo $r->getId() ?>" class="btn btn-danger">Supprimer</a>
                    <br>
                    <a href="?action=updateAuteur&&id=<?php echo $r->getId() ?>" class="btn btn-primary">Modifier</a>
                </td>
            </tr>
        <?php endforeach ?>

</table>
</div>