<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/static/css/estilo.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar" id="navbar_body">
    <p class="navbar-brand">Book de Ofertas</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastrar Ofertas
                </a>
                <div class="dropdown-menu" id="" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">Compra Mérito</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal2">Venda Mérito</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal4">Compras</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal3">Vendas</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="text-left ml-3 col-3">
        <figure class=" mt-3">

        </figure>
    </div>
    <div class="nav-item">
        <a class="sair" href="">Sair</a>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="text-center col-2">
            <div class="modal " id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title">Cadastrar Oferta</p>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="post">

                                <button type="submit" name="submit_form_c" class="btn btn-success" >Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center col-2">
            <!-- The Modal -->
            <div class="modal" id="myModal2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Cadastrar Oferta</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="post">

                                <button type="submit" name="submit_form_v" class="btn btn-success">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center col-2">
            <!-- The Modal -->
            <div class="modal" id="myModal4">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Cadastrar Oferta</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="post">

                                <button type="submit" name="submit_form_c_mer" class="btn btn-success" >Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center col-2">
            <!-- The Modal -->
            <div class="modal" id="myModal3">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Cadastrar Oferta</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form method="post">

                                <button type="submit" name="submit_form_v_mer" class="btn btn-success" >Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <h3 class="text-center">Compras - Mérito</h3>
                    <div class = "table-responsive">
                        <table class = "table table-striped" style="background-color: rgb(250, 224, 223);">
                            <thead class="" style="background-color: rgb(196, 200, 219);">
                            <tr>
                                <th>Op</th>
                                <th>Tp_Energia</th>
                                <th>Inicio</th>
                                <th>Fim</th>
                                <th>Volume</th>
                                <th>Preço</th>
                                <th>Submer</th>
                                <th>Criado</th>
                                <th>Editado</th>
                                <th>Editar</th>
                                <th>Deletar</th>
                            </tr>
                            </thead>

                            <tr>

                                <td><a href="" type="submit" class="btn btn-success">Editar</a></td>
                                <td><a href="" type="submit" class="btn btn-danger">Deletar</a></td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 class="text-center">Vendas - Mérito</h3>
                    <div class = "table-responsive">
                        <table class = "table" style="background-color: rgb(201, 236, 220);">
                            <thead class="" style="background-color: rgb(196, 200, 219);">
                            <tr>
                                <th>Op</th>
                                <th>Tp_Energia</th>
                                <th>Inicio</th>
                                <th>Fim</th>
                                <th>Volume</th>
                                <th>Preço</th>
                                <th>Submer</th>
                                <th>Criado</th>
                                <th>Editado</th>
                                <th>Editar</th>
                                <th>Deletar</th>
                            </tr>
                            </thead>

                            <tr>
                                <td><a href="" type="submit" class="btn btn-success">Editar</a></td>
                                <td><a href="" class="btn btn-danger">Deletar</a></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="text-center">Compras - Mercado</h3>
                    <div class = "table-responsive">
                        <table class = "table table-striped" style="background-color: rgb(250, 224, 223);">
                            <thead class="" style="background-color: rgb(196, 200, 219);">
                            <tr>
                                <th>Op</th>
                                <th>Agente</th>
                                <th>Tp_Energia</th>
                                <th>Inicio</th>
                                <th>Fim</th>
                                <th>Volume</th>
                                <th>Preço</th>
                                <th>Submer</th>
                                <th>Criado</th>
                                <th>Editado</th>
                                <th>Editar</th>
                                <th>Deletar</th>
                            </tr>
                            </thead>

                            <tr>
                                <td><a href="" type="submit" class="btn btn-success">Editar</a></td>
                                <td><a href="" type="submit" class="btn btn-danger">Deletar</a></td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 class="text-center">Vendas - Mercado</h3>
                    <div class = "table-responsive">
                        <table class = "table table-striped" style="background-color: rgb(201, 236, 220);">
                            <thead class="" style="background-color: rgb(196, 200, 219);">
                            <tr>
                                <th>Op</th>
                                <th>Agente</th>
                                <th>Tp_Energia</th>
                                <th>Inicio</th>
                                <th>Fim</th>
                                <th>Volume</th>
                                <th>Preço</th>
                                <th>Submer</th>
                                <th>Criado</th>
                                <th>Editado</th>
                                <th>Editar</th>
                                <th>Deletar</th>
                            </tr>
                            </thead>

                            <tr>
                                <td><a href="" type="submit" class="btn btn-success">Editar</a></td>
                                <td><a href="" type="submit" class="btn btn-danger">Deletar</a></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar" id="navbar_body">
        <p class="navbar-brand">Book de Ofertas</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastrar Ofertas
                    </a>
                    <div class="dropdown-menu" id="" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal4">Compras</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal3">Vendas</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="text-left ml-3 col-3">
            <figure class=" mt-3">
                <img src="">
            </figure>
        </div>
        <div class="nav-item">
            <a class="sair" href="">Sair</a>
        </div>
    </nav>
    <div class="text-center col-2">
        <!-- The Modal -->
        <div class="modal" id="myModal4">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cadastrar Oferta</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post">

                            <button type="submit" name="submit_form_c_mer" class="btn btn-success" >Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center col-2">
        <!-- The Modal -->
        <div class="modal" id="myModal3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Cadastrar Oferta</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post">

                            <button type="submit" name="submit_form_v_mer" class="btn btn-success" >Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="row">
            <div class="col-sm-6">
                <h3 class="text-center">Compras - Mercado</h3>
                <div class = "table-responsive">
                    <table class = "table table-striped" style="background-color: rgb(250, 224, 223);">
                        <thead class="" style="background-color: rgb(196, 200, 219);">
                        <tr>
                            <th>Op</th>
                            <th>Agente</th>
                            <th>Tp_Energia</th>
                            <th>Inicio</th>
                            <th>Fim</th>
                            <th>Volume</th>
                            <th>Preço</th>
                            <th>Submer</th>
                            <th>Criado</th>
                            <th>Editado</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                        </thead>

                        <tr>

                            <td><a href="" type="submit" class="btn btn-success">Editar</a></td>
                            <td><a href="" type="submit" class="btn btn-danger">Deletar</a></td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <h3 class="text-center">Vendas - Mercado</h3>
                <div class = "table-responsive">
                    <table class = "table table-striped" style="background-color: rgb(201, 236, 220);">
                        <thead class="" style="background-color: rgb(196, 200, 219);">
                        <tr>
                            <th>João</th>
                            <th>Raul</th>
                            <th>Op</th>
                            <th>Agente</th>
                            <th>Tp_Energia</th>
                            <th>Inicio</th>
                            <th>Fim</th>
                            <th>Volume</th>
                            <th>Preço</th>
                            <th>Submer</th>
                            <th>Criado</th>
                            <th>Editado</th>
                            <th>Editar</th>
                            <th>Deletar</th>
                        </tr>
                        </thead>

                        <tr>
                            <td><a href="" type="submit" class="btn btn-success">Editar</a></td>
                            <td><a href="" type="submit" class="btn btn-danger">Deletar</a></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
