@extends('../../index')
@section('content')

<div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="view-header">
                    <div class="pull-right text-right" style="line-height: 14px">
                        <button type="button" id="btnadd" class="btn btn-w-md btn-accent" data-url="/output/add" data-toggle="modal" data-target="#lgModal">
                            <i class="fa fa-plus"></i> Ajouter
                        </button>                        
                    </div>
                    <div class="header-icon">
                        <i class="pe page-header-icon pe-7s-box1"></i>
                    </div>
                    <div class="header-title">
                        <h3>Outputs</h3>
                        <small>
                            Liste des outputs
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
                                    <th>Titre</th>
                                    <th>Classement</th>
                                    <th>Standard</th>
                                    <th>Livrable</th>
                                    <th>Validité du livrable</th>
                                    <th>Délai de l'étude</th>
                                    <th colspan="2">Coût de l'étude ou frais de l'administation</th>
                                    <th>Pénalités</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Coût de l'étude</th>
                                    <th>Frais de l'administation </th>
                                    <th></th>
                                    <th></th>                                    
                                </tr>
                            <?php
                                foreach ($outputs as $output) {
                            ?> 
                            <tr>
                                <td>
                                    <span class="orange"><?=$output['titre']?></span>
                                </td>
                                <td><?=$output['classement']?></td>
                                <td><?=$output['standard']?></td>
                                <td><?=$output['livrable']?></td>
                                <td><?=$output['validite']?></td>
                                <td><?=$output['delai']?></td>
                                <td><?=$output['cout_etude']?></td>
                                <td><?=$output['frais_admin']?></td>
                                <td><?=$output['penalite']?></td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs btnedit" data-url="/output/edit/<?=$output['id']?>" data-id="<?=$output['id']?>" data-toggle="modal" data-target="#lgModal"><i class="fa fa-pencil"></i> Modifier</button>
                                        <button class="btn btn-default btn-xs btndelete" data-url="/output/destroy/<?=$output['id']?>" data-id="<?=$output['id']?>" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i> Supprimer</button>
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