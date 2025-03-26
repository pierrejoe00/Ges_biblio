<div class="container">
    <form action="?action=createLivre" method="POST" enctype="multipart/form-data">
        <label for="">Image</label>
        <input type="file" name="image" id="" class="form-control">
        <br>
        <label for="">Code</label>
        <input type="text" name="code" id="" class="form-control">
        <br>
        <label for="">Titre</label>
        <input type="text" name="titre" id="" class="form-control">
        <br>
        <label for="">Auteur</label>
        <select name="idau" id="" class="form-control">
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
        <button name="add" class="btn btn-primary">Ajouter</button>
    </form>
</div>
