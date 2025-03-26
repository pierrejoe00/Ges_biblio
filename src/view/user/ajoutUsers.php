

<div class="container">
    <form action="?action=createUsers" method="POST">
        <label for="">Nom</label>
        <input type="text" name="nom" id="" class="form-control">
        <br>
        <label for="">Prenom</label>
        <input type="text" name="Prenom" id="" class="form-control">
        <br>
        <label for="">PWD</label>
        <input type="text" name="pwd" id="" class="form-control">
        <br>
        <label for="">Email</label>
        <input type="text" name="email" id="" class="form-control">
        <br>
        <label for="">Numero</label>
        <input type="text" name="numero" id="" class="form-control">
        <br>
        <label for="">Role</label>
        <select name="role_id" id="" class="form-control">
            <?php foreach($role as $ro) : ?>
                <option value="<?= $ro->getId() ?>"><?= $ro->getNom() ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button name="add" class="btn btn-primary">Ajouter</button>
    </form>
</div>
