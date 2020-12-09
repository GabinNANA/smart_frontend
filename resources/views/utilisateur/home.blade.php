@extends('../../index')
@section('content')

<div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="view-header">
                    <div class="pull-right text-right" style="line-height: 14px">
                        <small>App Pages<br>Basic<br> <span class="c-white">Projects</span></small>
                    </div>
                    <div class="header-icon">
                        <i class="pe page-header-icon pe-7s-box1"></i>
                    </div>
                    <div class="header-title">
                        <h3>Utilisateurs</h3>
                        <small>
                            Liste des utilisateurs
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
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <?php
                                foreach ($users as $user) {
                            ?> 
                            <tr>
                                <td>
                                    <span class="orange"> <?=$user['nom']?></span>
                                    <div class="small"><i class="fa fa-clock-o"></i> Crée le <?=$user['created_at']?></div>
                                </td>
                                <td> <?=$user['email']?></td>
                                <td> <?=$user['telephone']?></td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Modifier</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-trash"></i> Supprimer</button>
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