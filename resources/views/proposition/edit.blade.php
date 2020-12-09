<div class="modal-header text-center">
        <h4 class="modal-title">Modifier une proposition</h4>
    </div>
    
    <form class="form-horizontal" method="POST" role ='form' action= "{{asset('proposition/update/'.$proposition['id'])}}">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName">Choisir la question</label> 
                <select class="select2_demo_2 form-control" name="idquestion" style="width: 100%">
                    <option></option>
                    <?php
                        foreach ($questions as $obj) {
                            $question=$obj['question'];
                    ?>
                        <option value="<?=$question['id']?>" <?=$question['id']==$proposition['idquestion'] ? 'selected':''?>><?=$question['intitule']?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Choisir une catégorie de réponse</label> 
                <select class="select2_demo_2 form-control" name="idcategorie" style="width: 100%">
                    <option></option>
                    <?php
                        foreach ($categories as $categorie) {
                    ?>
                        <option value="<?=$categorie['id']?>" <?=$categorie['id']==$proposition['idcategorie'] ? 'selected':''?>><?=$categorie['intitule']?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Intitulé de la proposition</label> 
                <input type="text" class="form-control" value="<?=$proposition['choix']?>" placeholder="Intitulé" name="choix">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            <button type="submit" class="btn btn-accent">Enregistrer</button>
        </div>
    </form>