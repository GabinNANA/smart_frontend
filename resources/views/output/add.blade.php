
<div class="modal-header text-center">
    <h4 class="modal-title">Ajouter un output</h4>
</div>

<form class="form-horizontal" method="POST" role ='form' action= "{{asset('output/store')}}">
    @csrf
    <div class="modal-body row">
        <div class="form-group col-md-12">
            <label for="exampleInputName">Titre de l'output</label> 
            <input type="text" class="form-control" placeholder="Titre" name="titre">
        </div>

        <div class="form-group col-md-12">
            <label for="exampleInputName">Classement</label> 
            <textarea class="form-control" placeholder="Classement" name="classement"></textarea>
        </div>
        
        <div class="form-group col-md-12">
            <label for="exampleInputName">Standard</label> 
            <textarea class="form-control" placeholder="standard" name="standard"></textarea>
        </div>

        <div class="form-group col-md-12">
            <label for="exampleInputName">Livrable</label> 
            <input type="text" class="form-control" placeholder="Livrable" name="livrable">
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputName">Validité du livrable</label> 
            <input type="text" class="form-control" placeholder="Validité du livrable" name="validite">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputName">Délai de l'étude</label> 
            <input type="text" class="form-control" placeholder="Délai de l'étude" name="delai">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputName">Coût de l'étude </label> 
            <input type="text" class="form-control" placeholder="Coût de l'étude " name="cout_etude">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputName">frais de l'administation  </label> 
            <input type="text" class="form-control" placeholder="frais de l'administation " name="frais_admin">
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputName">Pénalités </label> 
            <input type="text" class="form-control" placeholder="Pénalités " name="penalite">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-accent">Enregistrer</button>
    </div>
</form>