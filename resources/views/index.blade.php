<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/luna_admin-v1.4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Nov 2020 11:43:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>LUNA | Responsive Admin Theme</title>

    @include('layouts/style')

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="modal fade" id="lgModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-header text-center">
                    <h4 class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <h5>Voulez vous vraiment supprimer cet élément ?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                    <button  id="boutondelete" class="btn btn-danger waves-effect waves-light">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-expand-md navbar-default fixed-top">
        @include('layouts/partials/header')      
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        @include('layouts/partials/sidebar')
    </aside>
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
        @yield('content')
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

@include('layouts/script')

</body>

</html>