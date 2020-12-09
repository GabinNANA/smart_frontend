@extends('../../index')
@section('content')

<div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="view-header">
                    <div class="pull-right text-right" style="line-height: 14px">
                        <button type="button" id="btnadd" class="btn btn-w-md btn-accent" data-url="/question/add" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus"></i> Ajouter
                        </button>
                    </div>
                    <div class="header-icon">
                        <i class="pe page-header-icon pe-7s-box1"></i>
                    </div>
                    <div class="header-title">
                        <h3>Questions</h3>
                        <small>
                            Liste des questions
                        </small>
                    </div>
                </div>
                <hr>
            </div>
        </div>

        <div class="row">

            <?php
                foreach ($questions as $obj) {
                    $question= $obj['question'];
            ?> 
            <div class="col-md-4">

                <div class="panel panel-filled panel-c-accent">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                            <a class="btnedit" data-url="/question/edit/<?=$question['id']?>" data-id="<?=$question['id']?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></a>
                            <a class="btndelete" data-url="/question/destroy/<?=$question['id']?>" data-id="<?=$question['id']?>" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-times"></i></a>
                        </div>
                        Question n° <?=$question['ordre']?>
                    </div>
                    <div class="panel-body">
                        <?=$question['intitule']?>
                    </div>
                    <div class="panel-footer">
                        Catégorie : <?=$obj['label']?> 
                        <span style="float:right"> Type : <?=$question['type']?> </span> <br>
                        Obligatoire : <?=$question['obligatoire']==1 ? 'oui':'non'?>
                    </div>
                </div>

            </div>

            <?php
                }
            ?>
        </div>
    </div>
@endsection