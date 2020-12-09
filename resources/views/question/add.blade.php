<div class="modal-header text-center">
    <h4 class="modal-title">Ajouter une question</h4>
</div>

<form class="form-horizontal" method="POST" role ='form' action= "{{asset('question/store')}}">
    <input type="hidden" name="tailleTab" value="0" id="tailleTab"> 
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputName">Intitulé de la question</label> 
            <input type="text" class="form-control" placeholder="Intitulé" name="intitule">
        </div>
        <div class="form-group">
            <label for="exampleInputName">Choisir le type de question</label> 
            <select class="select2_demo_2 form-control" name="idtype" style="width: 100%">
                <option></option>
                <?php
                    foreach ($types as $type) {
                ?>
                    <option value="<?=$type['id']?>"><?=$type['label']?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputName">Choisir le format des réponses</label> 
            <select class="select2_demo_2 form-control" name="type" style="width: 100%" id="type" required>
                <option value="int">Réponse ouverte</option>
                <option value="select">Choix unique</option>
                <option value="selectm">Choix multiple</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputName">Question obligatoire ?</label> 
            <select class="select2_demo_2 form-control" name="obligatoire" style="width: 100%" required>
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>
        <div class="form-group" style="display:none" id="proposition">
            {{-- <label >Ajouter des propositions de réponses</label>  --}}
            <table id="dynamic_field" class="table table-striped table-hover table-responsive-sm">
                <thead>
                <tr>
                    <th>
                        Ajouter des propositions de réponses
                    </th>
                    <th>
                        <div class="btn-group pull-right">
                            <button type="button" id="add" class="btn btn-success">Ajouter</button>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                    {{-- <tr id="row1">
                        <td><input type="text" class="form-control" placeholder="Réponse" name="choix1" required></td>
                        <td> 
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-accent">Enregistrer</button>
    </div>
</form>
<script>
    var i=0;
    $(document).on('change', '#type', function(){
        if($(this).val()=='int'){
            $('#proposition').hide(); 
            $('.ligne'+button_id+'').remove();
        }else{
            $('#proposition').show();
        }
    });
    $(document).on('click','#add',function(){  
        i++; 
        $('#dynamic_field').append('<tr id="row'+i+'" class="ligne">'+
        '<td><input type="text" class="form-control" placeholder="Réponse '+i+'" name="choix'+i+'" required>'+
        '<td><div class="btn-group pull-right">'+
            '<button class="btn btn-danger btn_remove" id="'+i+'"><i class="fa fa-trash"></i></button>'+
        '</div></td>'+
        '</tr>');
        $('#tailleTab').val(i);
    });
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
</script>