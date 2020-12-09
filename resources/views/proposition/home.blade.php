@extends('../../index')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">
                    <button type="button" id="btnadd" class="btn btn-w-md btn-accent" data-url="/proposition/add" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-plus"></i> Ajouter
                    </button>                        
                </div>
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-box1"></i>
                </div>
                <div class="header-title">
                    <h3>Propositions</h3>
                    <small>
                        Liste des propositions pour chaque question
                    </small>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="row">
        <?php
            foreach ($questions as $question) {
        ?> 
        <div class="col-md-6">
            <div class="panel panel-filled panel-c-success">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        {{-- <a class="panel-close"><i class="fa fa-times"></i></a> --}}
                    </div>
                    Question <?=$question['ordre']?> : <?=$question['intitule']?>
                </div>
                <div class="panel-body">
                    
                    <table class="table table-responsive-sm">
                        <tbody>
                        <?php
                            foreach ($question['proposition'] as $proposition) {
                        ?> 
                        <tr>
                            <td><?=$proposition['choix']?></td>
                            <td>
                                <div class="btn-group pull-right">
                                    <button class="btn btn-default btn-xs btnedit" data-url="/proposition/edit/<?=$proposition['id']?>" data-id="<?=$proposition['id']?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Modifier</button>
                                    <button class="btn btn-default btn-xs btndelete" data-url="/proposition/destroy/<?=$proposition['id']?>" data-id="<?=$proposition['id']?>" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i> Supprimer</button>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>
@endsection