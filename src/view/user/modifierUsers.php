


<div class="container">
    <br>
    <h2>Modification d'Utilisateur</h2>
    <form action="?action=editUsers" method="POST">
        <input type="text" name="id" value="<?php echo $result->getId() ?>" hidden>
        <label for="">Nom</label>
        <input type="text" name="nom" id="" value="<?php echo $result->getNom()?>" class="form-control">
        <br>
        <label for="">Prenom</label>
        <input type="text" name="prenom" id="" value="<?php echo $result->getPrenom()?>" class="form-control">
        <br>
        <label for="">Mot de passe</label>
        <input type="password" name="pwd" id="" value="<?php echo $result->getPwd() ?>" class="form-control">
        <br>
        <label for="">Email</label>
        <input type="text" name="email" id="" value="<?php echo $result->getEmail() ?>" class="form-control">
        <br>
        <label for="">Numero</label>
        <input type="text" name="numero" id="" value="<?php echo $result->getNumero()?>" class="form-control">
        <br>
        <label for="">Role</label>
        <select name="role_id" id="" class="form-control">
            <?php foreach($role as $ro) : ?>
                <option   value="<?= $ro->getId() ?>" <?= ($ro->getId() == $result->getRole()->getId()) ? 'selected' : ''  ?>><?= $ro->getNom() ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button name="update" class="btn btn-primary">Modifier</button>
    </form>
</div>
