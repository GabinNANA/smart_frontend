
<div class="modal-header text-center">
    <h4 class="modal-title">Modifier un type de questions</h4>
</div>
<form class="form-horizontal" method="POST" role ='form' action= "{{asset('type/update/'.$type['id'])}}">
    @csrf
<div class="modal-body">
    <div class="form-group">
            <label for="exampleInputName">Intitulé</label> 
            <input type="text" class="form-control" placeholder="Intitulé" name="intitule" value="<?=$type['label']?>">
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
    <button type="submit" class="btn btn-accent">Enregistrer</button>
</div>
</form>