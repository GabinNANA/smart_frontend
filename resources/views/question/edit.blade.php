<div class="modal-header text-center">
        <h4 class="modal-title">Modifier une question</h4>
    </div>
    
    <form class="form-horizontal" method="POST" role ='form' action= "{{asset('question/update/'.$question['id'])}}">
        <input type="hidden" name="tailleTab" value="<?=$question['tailletab']?>" id="tailleTab"> 
        <input type="hidden" name="tailleTabinit" value="<?=$question['tailletab']+1?>" > 
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputName">Intitulé de la question</label> 
                <input type="text" class="form-control" placeholder="Intitulé" value="<?=$question['intitule']?>" name="intitule">
            </div>
            <div class="form-group">
                <label for="exampleInputName">Choisir le type de question</label> 
                <select class="select2_demo_2 form-control" name="idtype" style="width: 100%">
                    <option></option>
                    <?php
                        foreach ($types as $type) {
                    ?>
                        <option value="<?=$type['id']?>" <?=$type['id']==$question['idtype'] ? 'selected':''?> ><?=$type['label']?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Choisir le format des réponses</label> 
                <select class="select2_demo_2 form-control" name="type" style="width: 100%" id="type" required>
                    <option value="int" <?=$question['type']=='int' ? 'selected':'' ?>>Réponse ouverte</option>
                    <option value="select" <?=$question['type']=='select' ? 'selected':'' ?>>Choix unique</option>
                    <option value="selectm" <?=$question['type']=='selectm' ? 'selected':'' ?>>Choix multiple</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Question obligatoire ?</label> 
                <select class="select2_demo_2 form-control" name="obligatoire" style="width: 100%" required>
                    <option value="1" <?=$question['obligatoire']==1 ? 'selected':'' ?>>Oui</option>
                    <option value="0" <?=$question['obligatoire']==0 ? 'selected':'' ?>>Non</option>
                </select>
            </div>
            <div class="form-group" style="<?=$question['type']=='int' ? 'display:none':'' ?>" id="proposition">
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
                        <?php
                            if($question['tailletab']!=0){
                            $i=1;
                            
                            foreach($question['proposition'] as $proposition){
                        ?>
                        <tr id="row<?=$i?>">
                            <td><input type="text" class="form-control element" placeholder="Réponse" value="<?=$proposition['choix']?>" name="choix<?=$i?>" id="choix<?=$i?>"  data="<?=$i?>" data-id="<?=$proposition['id']?>" required></td>
                            <td> 
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-danger btn_remove btnelement" id="<?=$i?>" data-id="<?=$proposition['id']?>"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php $i++;
                            }
                        }
                        ?>
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
    var i=$('#tailleTab').val();
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
    
    // $(document).on('keyup','.element',function(){
    //     var id = $(this).attr('data-id');
    //     var data=$(this).attr('data');
    //     var choix=$("#choix"+data).val();
    //     $.ajax({
    //             type: "POST",
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             url: "proposition/update/".id,
    //             data: {'_token' : $('meta[name="csrf-token"]').attr('content'),'choix': choix},
    //             dataType: "text",
    //             success: function(data){
                    
    //             }
    //     });
    // });
</script>