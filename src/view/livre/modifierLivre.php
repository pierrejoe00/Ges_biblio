<div class="container">
    <br>
    <h2>Modification de Livre</h2>

    <form action="?action=editLivre" method="POST" enctype="multipart/form-data">
        <label for="">Image</label>
        <input type="file" name="image" id="" value="<?php echo $result->getImage();?>" class="form-control">
        <input type="text" name="id" value="<?php echo $result->getId() ?>" hidden>
        <br>
        <label for="">Code</label>
        <input type="text" name="code" id="" value="<?php echo $result->getCode() ?>" class="form-control">
        <br>
        <label for="">Titre</label>
        <input type="text" name="titre" id="" value="<?php echo $result->getTitre()?>" class="form-control">
        <br>
        <label for="">Auteur</label>
        <select name="ida" id="" class="form-control">
            <?php foreach($auteur as $c) : ?>
                <option value="<?= $c->getId() ?>"><?= $c->getPrenom() ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <label for="">Date d'Edition</label>
        <input type="date" name="dateEdition" id="" class="form-control">
        <br>
        <label for="">Categorie</label>
        <select name="idc" id="" class="form-control">
            <?php foreach($categories as $c) : ?>
                <option value="<?= $c->getId() ?>"><?= $c->getLibelle() ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button name="update" class="btn btn-primary">Modifier</button>
    </form>
</div>
