<?php
include 'layout/DashAdmin.php';
include 'layout/head.php';
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <a class="btn btn-primary btn-sm mr-2" href="#" role="button">Boton1</a>
            <a class="btn btn-danger btn-sm" href="#" role="button">Boton2</a>
            <!-- <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Blank Page</a></li> -->
        </ul>
    </div>

    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                Datatables
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-striped table-responsive cell-border dataTable" style="width:100%">
                    <thead>
                        <tr class="table-success">
                            <th>id</th>
                            <th>name</th>
                            <th>apellidos</th>
                            <th>acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>carlos</td>
                            <td>peru</td>
                            <td>
                                <a href="#" class="btn btn-outline-dark rounded-pill btn-xs">
                                    <i class="fas fa-key"></i></a>
                                <a href="#" class="btn btn-outline-info rounded-pill btn-xs">
                                    <i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-outline-danger rounded-pill btn-xs">
                                    <i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>mario</td>
                            <td>perez</td>
                            <td>
                                <a href="#" class="btn btn-outline-dark rounded-pill btn-xs">
                                    <i class="fas fa-key"></i></a>
                                <a href="#" class="btn btn-outline-info rounded-pill btn-xs">
                                    <i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-outline-danger rounded-pill btn-xs">
                                    <i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>mario</td>
                            <td>perez</td>
                            <td>
                                <a href="#" class="btn btn-outline-dark rounded-pill btn-xs">
                                    <i class="fas fa-key"></i></a>
                                <a href="#" class="btn btn-outline-info rounded-pill btn-xs">
                                    <i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-outline-danger rounded-pill btn-xs">
                                    <i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>mario</td>
                            <td>perez</td>
                            <td>
                                <a href="#" class="btn btn-outline-dark rounded-pill btn-xs">
                                    <i class="fas fa-key"></i></a>
                                <a href="#" class="btn btn-outline-info rounded-pill btn-xs">
                                    <i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-outline-danger rounded-pill btn-xs">
                                    <i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td>mario</td>
                            <td>perez</td>
                            <td>
                                <a href="#" class="btn btn-outline-dark rounded-pill btn-xs">
                                    <i class="fas fa-key"></i></a>
                                <a href="#" class="btn btn-outline-info rounded-pill btn-xs">
                                    <i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-outline-danger rounded-pill btn-xs">
                                    <i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">6</td>
                            <td>mario</td>
                            <td>perez</td>
                            <td>
                                <a href="#" class="btn btn-outline-dark rounded-pill btn-xs">
                                    <i class="fas fa-key"></i></a>
                                <a href="#" class="btn btn-outline-info rounded-pill btn-xs">
                                    <i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-outline-danger rounded-pill btn-xs">
                                    <i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">7</td>
                            <td>mario</td>
                            <td>perez</td>
                            <td>
                                <a href="#" class="btn btn-outline-dark rounded-pill btn-xs">
                                    <i class="fas fa-key"></i></a>
                                <a href="#" class="btn btn-outline-info rounded-pill btn-xs">
                                    <i class="far fa-edit"></i></a>
                                <a href="#" class="btn btn-outline-danger rounded-pill btn-xs">
                                    <i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="card-footer text-muted">
                botones
            </div>
        </div>
    </div>


</main>

<?php
include 'layout/footer.php';
?>