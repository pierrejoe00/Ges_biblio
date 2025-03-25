


<div class="container mt-5">
-
<a href="?action=addLivre" class="btn btn-success ">Ajouter</a>
<h3 class="mt-5">Liste des livres</h3>
<table class="table table-bordered mt-5">

        <tr>
            <th>Image</th>
            <th>ID</th>
            <th>Code</th>
            <th>Titre</th>
            <th>Date</th>
            <th>Auteur</th>
            <th>Catégorie</th>
            <th>Actions</th>
        </tr>
        <?php foreach($result as $r) :?>
            <tr>
                <td>
                    <?php if ($r->getImage()): ?>
                        <img src="uploads/<?php echo $r->getImage(); ?>" alt="Image du livre" width="100">
                    <?php else: ?>
                        <span style="color: red;">Pas d'image</span>
                    <?php endif; ?>
                </td>
                <td><?php echo $r->getId()  ?></td>
                <td><?php echo $r->getCode()  ?></td>
                <td><?php echo $r->getTitre()  ?></td>
                <td><?php echo $r->getDate()  ?></td>
                <td><?php echo $r->getAuteur()->getPrenom()  ?></td>
                <td><?php echo $r->getCategorie()->getLibelle()  ?></td>
                <td>
                    <a href="?action=deleteLivre&&id=<?php echo $r->getId() ?>" class="btn btn-danger">Supprimer</a>
                    <br>
                    <a href="?action=updateLivre&&id=<?php echo $r->getId() ?>" class="btn btn-primary">Modifier</a>
                </td>
            </tr>
        <?php endforeach ?>

</table>
</div>