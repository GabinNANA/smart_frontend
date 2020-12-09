
<div class="modal-header text-center">
    <h4 class="modal-title">Ajouter une catégorie</h4>
</div>

<form class="form-horizontal" method="POST" role ='form' action= "{{asset('categorie/store')}}">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputName">Catégorie mère</label> 
            <select class="select2_demo_2 form-control" name="idparent" placeholder="Choisir une catégorie" style="width: 100%" required>
                <option></option>
                <?php
                    foreach ($categories as $categorie) {
                ?>
                    <option value="<?=$categorie['id']?>"><?=$categorie['intitule']?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputName">Intitulé</label> 
            <input type="text" class="form-control" placeholder="Intitulé" name="intitule" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-accent">Enregistrer</button>
    </div>
</form>