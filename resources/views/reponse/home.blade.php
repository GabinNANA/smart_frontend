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
                        <h3>Habitation</h3>
                        <small>
                            Liste des types d'habitation
                        </small>
                    </div>
                </div>
                <hr>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-filled">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group m-b-xs m-t-xs">
                                    <input type="text" class="form-control" placeholder="Search by Name.." aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-control m-b-xs m-t-xs" name="account" style="width: 100%">
                                    <option selected="">Select status</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <select class="form-control m-t-xs" name="account" style="width: 100%">
                                    <option selected="">Sort by:</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-body">
                        <table class="table table-vertical-align-middle table-responsive-sm">
                            <thead>
                            <tr>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Project name
                                </th>
                                <th>
                                    Participate
                                </th>
                                <th>
                                    Progress
                                </th>
                                <th class="text-right">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="label label-accent">Active</span>
                                </td>
                                <td>
                                    <a href="#">Contract with Meltex Company</a>

                                    <div class="small"><i class="fa fa-clock-o"></i> Created 24.08.2017</div>
                                </td>
                                <td>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a1.jpg"></a>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a2.jpg"></a>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a3.jpg"></a>
                                </td>
                                <td>
                                    <div class="progress m-b-none full progress-small">
                                        <div style="width: 35%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <small>35% compleated:</small>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder"></i> View</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-sticky-note"></i> Notes</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-default">Waiting</span>
                                </td>
                                <td>
                                    <a href="#">Zentif case</a>

                                    <div class="small"><i class="fa fa-clock-o"></i> Created 12.04.2017</div>
                                </td>
                                <td>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a5.jpg"></a>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a4.jpg"></a>
                                </td>
                                <td>
                                    <div class="progress m-b-none full progress-small">
                                        <div style="width: 13%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <small>13% compleated:</small>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder"></i> View</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-sticky-note"></i> Notes</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-default">Waiting</span>
                                </td>
                                <td>
                                    <a href="#">Hortex main case</a>

                                    <div class="small"><i class="fa fa-clock-o"></i> Created 12.04.2017</div>
                                </td>
                                <td>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/profile.jpg"></a>
                                </td>
                                <td>
                                    <div class="progress m-b-none full progress-small">
                                        <div style="width: 63%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <small>63% compleated:</small>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder"></i> View</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-sticky-note"></i> Notes</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-default">Completed</span>
                                </td>
                                <td>
                                    <a href="#">Tarnow INC contract</a>

                                    <div class="small"><i class="fa fa-clock-o"></i> Created 10.05.2017</div>
                                </td>
                                <td>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a3.jpg"></a>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a2.jpg"></a>
                                </td>
                                <td>
                                    <div class="progress m-b-none full progress-small">
                                        <div style="width: 100%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <small>100% compleated:</small>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder"></i> View</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-sticky-note"></i> Notes</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-default">Waiting</span>
                                </td>
                                <td>
                                    <a href="#">Comarch group contract</a>

                                    <div class="small"><i class="fa fa-clock-o"></i> Created 06.10.2017</div>
                                </td>
                                <td>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a1.jpg"></a>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a5.jpg"></a>
                                </td>
                                <td>
                                    <div class="progress m-b-none full progress-small">
                                        <div style="width: 12%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <small>12% compleated:</small>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder"></i> View</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-sticky-note"></i> Notes</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-accent">Active</span>
                                </td>
                                <td>
                                    <a href="#">Contract with Meltex Company</a>

                                    <div class="small"><i class="fa fa-clock-o"></i> Created 24.08.2017</div>
                                </td>
                                <td>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a1.jpg"></a>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a2.jpg"></a>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a3.jpg"></a>
                                </td>
                                <td>
                                    <div class="progress m-b-none full progress-small">
                                        <div style="width: 35%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <small>35% compleated:</small>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder"></i> View</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-sticky-note"></i> Notes</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-default">Waiting</span>
                                </td>
                                <td>
                                    <a href="#">Zentif case</a>

                                    <div class="small"><i class="fa fa-clock-o"></i> Created 12.04.2017</div>
                                </td>
                                <td>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a5.jpg"></a>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a4.jpg"></a>
                                </td>
                                <td>
                                    <div class="progress m-b-none full progress-small">
                                        <div style="width: 13%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <small>13% compleated:</small>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder"></i> View</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-sticky-note"></i> Notes</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-default">Waiting</span>
                                </td>
                                <td>
                                    <a href="#">Hortex main case</a>

                                    <div class="small"><i class="fa fa-clock-o"></i> Created 12.04.2017</div>
                                </td>
                                <td>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/profile.jpg"></a>
                                </td>
                                <td>
                                    <div class="progress m-b-none full progress-small">
                                        <div style="width: 63%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <small>63% compleated:</small>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder"></i> View</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-sticky-note"></i> Notes</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="label label-default">Waiting</span>
                                </td>
                                <td>
                                    <a href="#">Comarch group contract</a>

                                    <div class="small"><i class="fa fa-clock-o"></i> Created 06.10.2017</div>
                                </td>
                                <td>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a1.jpg"></a>
                                    <a href="#"><img alt="image" class="rounded image-md" src="images/a5.jpg"></a>
                                </td>
                                <td>
                                    <div class="progress m-b-none full progress-small">
                                        <div style="width: 12%" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <small>12% compleated:</small>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder"></i> View</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-sticky-note"></i> Notes</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="pull-right">
            <ul class="pagination pagination-sm">
                <li class="disabled page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="active page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>

    </div>
@endsection