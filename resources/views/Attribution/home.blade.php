@extends('../../index')
@section('content')

<div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="view-header">
                    <div class="pull-right text-right" style="line-height: 14px">
                        <button type="button" id="btnadd" class="btn btn-w-md btn-accent" data-url="/habitation/add" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus"></i> Ajouter
                        </button>                        
                    </div>
                    <div class="header-icon">
                        <i class="pe page-header-icon pe-7s-box1"></i>
                    </div>
                    <div class="header-title">
                        <h3>Attribution</h3>
                        <small>
                            Attribution des questions aux types de logement
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
                        <table id="tableExample3" class="table table-striped table-hover table-responsive-sm text-center" >
                            <thead>
                            <tr>
                                <th rowspan="2">
                                    Questions
                                </th>
                                <?php
                                    foreach ($habitations as $habitation) {
                                ?>
                                    <th colspan="2"><?=$habitation['intitule']?></th>
                                <?php
                                    }
                                ?>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <?php
                                    foreach ($habitations as $habitation) {
                                ?>
                                    <th>Construction</th>
                                    <th>Exploitation</th>
                                <?php
                                    }
                                ?>
                            </tr>
                            <?php
                                foreach ($questions as $question) {
                            ?> 
                            <tr>
                                <td><?=$question['intitule']?></td>
                                <?php
                                    foreach ($habitations as $habitation) {
                                        $first=''; $second=''; $idfirst=''; $idsecond='';
                                        foreach ($question['habitations'] as $hab) {
                                            if($hab['idhabitation']==$habitation['id'] && $hab['etat']=='construction'){
                                                $idfirst= $hab['id'];
                                                $first='checked';
                                            }
                                            if($hab['idhabitation']==$habitation['id'] && $hab['etat']=='exploitation'){
                                                $idsecond= $hab['id'];
                                                $second='checked';
                                            }
                                        }
                                ?>
                                    <td>
                                        <input <?=$first?> class="form-check-input check" data-id="<?=$idfirst?>" data-question="<?=$question['id']?>" data-etat="construction" data-habitation="<?=$habitation['id']?>" type="checkbox"/>
                                    </td>
                                    <td>
                                        <input <?=$second?>  class="form-check-input check" data-id="<?=$idsecond?>" data-question="<?=$question['id']?>" data-etat="exploitation" data-habitation="<?=$habitation['id']?>" type="checkbox"/>
                                    </td>
                                <?php   
                                    }
                                ?>
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