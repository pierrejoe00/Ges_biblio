<div class="container mt-5">

<!-- Bouton Ajouter désactivé -->
<a href="#" class="btn btn-success disabled">Ajouter</a>

<h3 class="mt-5">Gestion des Roles</h3>
<table class="table table-bordered mt-5">

        <tr>
            <th>ID</th>
            <th>Nom</th>
        </tr>
        <?php foreach($result as $r) : ?>
            <?php if (in_array($r->getNom(), ['admin', 'client'])) :  ?>
                <tr>
                    <td><?php echo $r->getId() ?></td>
                    <td><?php echo $r->getNom() ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>

</table>
</div>