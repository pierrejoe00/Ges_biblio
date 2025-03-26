


<div class="container">

    <form action="?action=editUsers" method="POST">
        <input type="text" name="id" value="<?php echo $result->getId() ?>" hidden>
        <label for="">Nom</label>
        <input type="text" name="nom" id="" value="<?php echo $result->getNom()?>" class="form-control">
        <br>
        <label for="">Prenom</label>
        <input type="text" name="prenom" id="" value="<?php echo $result->getPrenom()?>" class="form-control">
        <br>
        <label for="">PWD</label>
        <input type="text" name="pwd" id="" value="<?php echo $result->getPwd() ?>" class="form-control">
        <br>
        <label for="">Email</label>
        <input type="text" name="email" id="" value="<?php echo $result->getEmail() ?>" class="form-control">
        <br>
        <label for="">Role</label>
        <select name="id" id="" class="form-control">
            <?php foreach($role as $c) : ?>
                <option   value="<?= $c->getId() ?>" <?= ($c->getId() == $result->getRole()->getId()) ? 'selected' : ''  ?>><?= $c->getNom() ?></option>
            <?php endforeach ?>
        </select>
        <br>
        <button name="update" class="btn btn-primary">Modifier</button>
    </form>
</div>
