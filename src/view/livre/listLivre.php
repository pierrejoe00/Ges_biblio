<div class="container mt-5">
<a href="?action=addLivre" class="btn btn-success ">Ajouter</a>
<h3 class="mt-5">Liste des livres</h3>
<table class="table table-bordered mt-5">

        <tr>
            
            <th>ID</th>
            <th>Code</th>
            <th>Image</th>
            <th>Titre</th>
            <th>Date d'Edition</th>
            <th>Auteur</th>
            <th>Catégorie</th>
            <th>Actions</th>
        </tr>
        <?php foreach($result as $r) :?>
            <tr>
            <td><?php echo $r->getId()  ?></td>
            <td><?php echo $r->getCode()  ?></td>
                <td>
                    <?php if ($r->getImage()): ?>
                        <img src="uploads/<?php echo $r->getImage(); ?>" alt="Image du Livre" width="100">
                    <?php else: ?>
                        <span style="color: red;">Pas d'image</span>
                    <?php endif; ?>
                </td>
                
                <td><?php echo $r->getTitre()  ?></td>
                <td><?php echo $r->getDateEdition()  ?></td>
                <td><?php echo $r->getAuteur()  ?></td>
                <td><?php echo $r->getCategorie()->getLibelle()  ?></td>
                <td>
                    <a href="?action=deleteLivre&id=<?php echo $r->getId() ?>" class="btn btn-danger">Supprimer</a>
                    <br>
                    <a href="?action=updateLivre&id=<?php echo $r->getId() ?>" class="btn btn-primary">Modifier</a>
                </td>
            </tr>
        <?php endforeach ?>

</table>
</div>