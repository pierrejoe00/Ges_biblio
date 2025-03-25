
<div class="container">
    <form action="?action=editAuteur" method="POST">
        <label for="">Nom</label>
        <input type="text" name="nom" id="" value="<?php echo $result->getNom() ?>" class="form-control">
        <br>
        <label for="">Prenom</label>
        <input type="text" name="prenom" id="" value="<?php echo $result->getPrenom() ?>" class="form-control">
        <br>
        <label for="">Profession</label>
        <input type="text" name="libelle" id="" value="<?php echo $result->getLibelle() ?>" class="form-control">

        <input type="text" name="id" value="<?php echo $result->getId() ?>" hidden>
    
        <button name="update" class="btn btn-primary">Modifier</button>
    </form>
</div>