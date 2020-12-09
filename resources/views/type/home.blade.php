@extends('../../index')
@section('content')

<div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="view-header">
                    <div class="pull-right text-right" style="line-height: 14px">
                        <button type="button" id="btnadd" class="btn btn-w-md btn-accent" data-url="/type/add" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus"></i> Ajouter
                        </button>
                    </div>
                    <div class="header-icon">
                        <i class="pe page-header-icon pe-7s-box1"></i>
                    </div>
                    <div class="header-title">
                        <h3>Type de questions</h3>
                        <small>
                            Liste des types de questions
                        </small>
                    </div>
                </div>
                <hr>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-filled">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                            <a class="panel-close"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table id="tableExample3" class="table table-striped table-hover table-responsive-sm">
                            <thead>
                            <tr>
                                <th>Intitule</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                                foreach ($types as $type) {
                            ?> 
                            <tr>
                                <td>
                                    <span class="orange"> <?=$type['label']?></span>
                                    <div class="small"><i class="fa fa-clock-o"></i> Crée le <?=$type['created_at']?></div>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs btnedit" data-url="/type/edit/<?=$type['id']?>" data-id="<?=$type['id']?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Modifier</button>
                                        <button class="btn btn-default btn-xs btndelete" data-url="/type/destroy/<?=$type['id']?>" data-id="<?=$type['id']?>" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i> Supprimer</button>
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
        </div>
    </div>
@endsection