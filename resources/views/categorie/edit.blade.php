
<div class="modal-header text-center">
    <h4 class="modal-title">Modifier une catégorie</h4>
</div>
<form class="form-horizontal" method="POST" role ='form' action= "{{asset('categorie/update/'.$cat['id'])}}">
    @csrf
<div class="modal-body">
    <div class="form-group">
        <label for="exampleInputName">Catégorie mère</label> 
        <select class="select2_demo_2 form-control" placeholder="Choisir une catégorie" name="idparent" style="width: 100%" required>
            <option></option>
            <?php
                foreach ($categories as $categorie) {
            ?>
                <option value="<?=$categorie['id']?>" <?=$categorie['id']==$cat['idparent'] ? 'selected':''?> ><?=$categorie['intitule']?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputName">Intitulé</label> 
        <input type="text" class="form-control" placeholder="Intitulé" name="intitule" value="<?=$cat['intitule']?>" required>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
    <button type="submit" class="btn btn-accent">Enregistrer</button>
</div>
</form>