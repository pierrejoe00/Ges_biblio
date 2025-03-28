
<div class="container">
    <br>
    <h2>Modification de Role</h2>
    <form action="?action=editRole" method="POST">
        <input type="text" name="id" value="<?php echo $result->getId() ?>" hidden>
        <label for="">Nom</label>
        <input type="text" name="nom" id="" value="<?php echo $result->getNom() ?>" class="form-control">
        <button name="update" class="btn btn-primary">Modifier</button>
    </form>
</div>