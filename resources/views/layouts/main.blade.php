<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
<header>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="" class="navbar-brand">Painel</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inserir Ofertas</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="#" data-toggle="modal" data-target="#squarespaceModalC" class="dropdown-item">Compras</a>
                        <a href="#" data-toggle="modal" data-target="#squarespaceModalV" class="dropdown-item">Vendas</a>
                        <a href="#" data-toggle="modal" data-target="#squarespaceModalCM" class="dropdown-item">Compras Mercado</a>
                        <a href="#" data-toggle="modal" data-target="#squarespaceModalVM" class="dropdown-item">Vendas Mercado</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- line modal -->

<div class="modal fade" id="squarespaceModalC" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="lineModalLabel">Compras Mérito</h3>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form action="{{route('layouts.main.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputOperador">Operador</label>
                        <input type="text" class="form-control" name="operador" id="exampleInputOperador" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTp_Energia">TP_Energia</label>
                        <select  name="tp_energia" class="form-control" id="exampleInputTp_Energia">
                            <option value="Conv">Conv</option>
                            <option value="I5">I5</option>
                            <option value="I1">I1</option>
                            <option value="I0">I0</option>
                            <option value="CQ5">CQ5</option>
                            <option value="CQ1">CQ1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputInicio">Inicio</label>
                        <input type="text" class="form-control" name="inicio" id="exampleInputInicio" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFim">Fim</label>
                        <input type="text" class="form-control" name="fim" id="exampleInputFim" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMont">Montante</label>
                        <input type="number" class="form-control" name="volume" id="exampleInputMont" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPreco">Preço</label>
                        <input type="decimal" class="form-control" name="preco" id="exampleInputPreco" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSub">Submercado</label>
                        <select  name="submercado" class="form-control" id="exampleInputSub">
                            <option value="SE">SE</option>
                            <option value="SU" >SU</option>
                            <option value="NE" >NE</option>
                            <option value="NO" >NO</option>
                        </select>
                    </div>
                    <div><input type="hidden" class="form-control" name="tipoForm" value="formC" id="exampleInputInicio"></div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info" data-dismiss="modal"  role="button">Close</button>
                            </div>
                            <div class="btn-group btn-delete hidden" role="group">
                                <button type="button" id="delImage" class="btn btn-danger" data-dismiss="modal"  role="button">Delete</button>
                            </div>
                            <div class="btn-group" role="group">
                                <input type="submit" id="saveImage" class="btn btn-success" value="Salvar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="squarespaceModalV"  tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="lineModalLabel">Vendas Mérito</h3>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form action="{{ route('layouts.modalV.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputOperador">Operador</label>
                        <input type="text" class="form-control" name="operador" id="exampleInputOperador" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTp_Energia">TP_Energia</label>
                        <select  name="tp_energia" class="form-control" id="exampleInputTp_Energia">
                            <option value="Conv">Conv</option>
                            <option value="I5">I5</option>
                            <option value="I1">I1</option>
                            <option value="I0">I0</option>
                            <option value="CQ5">CQ5</option>
                            <option value="CQ1">CQ1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputInicio">Inicio</label>
                        <input type="text" class="form-control" name="inicio" id="exampleInputInicio" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFim">Fim</label>
                        <input type="text" class="form-control" name="fim" id="exampleInputFim" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMont">Montante</label>
                        <input type="number" class="form-control" name="volume" id="exampleInputMont" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPreco">Preço</label>
                        <input type="decimal" class="form-control" name="preco" id="exampleInputPreco" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSub">Submercado</label>
                        <select  name="submercado" class="form-control" id="exampleInputSub">
                            <option value="SE">SE</option>
                            <option value="SU" >SU</option>
                            <option value="NE" >NE</option>
                            <option value="NO" >NO</option>
                        </select>
                    </div>
                    <div><input type="hidden" class="form-control" name="tipoFormV" value="formV" id="exampleInputInicio"></div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info" data-dismiss="modal"  role="button">Close</button>
                            </div>
                            <div class="btn-group btn-delete hidden" role="group">
                                <button type="button" id="delImage" class="btn btn-danger" data-dismiss="modal"  role="button">Delete</button>
                            </div>
                            <div class="btn-group" role="group">
                                <input type="submit" id="saveImage" class="btn btn-success" value="Salvar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="squarespaceModalCM"  tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="lineModalLabel">Compras Mercado</h3>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form action="{{route('layouts.modalCmercado.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputOperador">Operador</label>
                        <input type="text" class="form-control" name="operador" id="exampleInputOperador" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTp_Energia">TP_Energia</label>
                        <select  name="tp_energia" class="form-control" id="exampleInputTp_Energia">
                            <option value="Conv">Conv</option>
                            <option value="I5">I5</option>
                            <option value="I1">I1</option>
                            <option value="I0">I0</option>
                            <option value="CQ5">CQ5</option>
                            <option value="CQ1">CQ1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputInicio">Inicio</label>
                        <input type="text" class="form-control" name="inicio" id="exampleInputInicio" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFim">Fim</label>
                        <input type="text" class="form-control" name="fim" id="exampleInputFim" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMont">Montante</label>
                        <input type="number" class="form-control" name="volume" id="exampleInputMont" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPreco">Preço</label>
                        <input type="decimal" class="form-control" name="preco" id="exampleInputPreco" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSub">Submercado</label>
                        <select  name="submercado" class="form-control" id="exampleInputSub">
                            <option value="SE">SE</option>
                            <option value="SU" >SU</option>
                            <option value="NE" >NE</option>
                            <option value="NO" >NO</option>
                        </select>
                    </div>
                    <div><input type="hidden" class="form-control" name="tipoFormCM" value="formCM" id="exampleInputInicio"></div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info" data-dismiss="modal"  role="button">Close</button>
                            </div>
                            <div class="btn-group btn-delete hidden" role="group">
                                <button type="button" id="delImage" class="btn btn-danger" data-dismiss="modal"  role="button">Delete</button>
                            </div>
                            <div class="btn-group" role="group">
                                <input type="submit" id="saveImage" class="btn btn-success" value="Salvar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="squarespaceModalVM" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="lineModalLabel">Vendas Mercado</h3>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form action="{{route('layouts.modalVenda.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputOperador">Operador</label>
                        <input type="text" class="form-control" name="operador" id="exampleInputOperador" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTp_Energia">TP_Energia</label>
                        <select  name="tp_energia" class="form-control" id="exampleInputTp_Energia">
                            <option value="Conv">Conv</option>
                            <option value="I5">I5</option>
                            <option value="I1">I1</option>
                            <option value="I0">I0</option>
                            <option value="CQ5">CQ5</option>
                            <option value="CQ1">CQ1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputInicio">Inicio</label>
                        <input type="text" class="form-control" name="inicio" id="exampleInputInicio" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFim">Fim</label>
                        <input type="text" class="form-control" name="fim" id="exampleInputFim" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMont">Montante</label>
                        <input type="number" class="form-control" name="volume" id="exampleInputMont" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPreco">Preço</label>
                        <input type="decimal" class="form-control" name="preco" id="exampleInputPreco" placeholder="Selecione">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSub">Submercado</label>
                        <select  name="submercado" class="form-control" id="exampleInputSub">
                            <option value="SE">SE</option>
                            <option value="SU" >SU</option>
                            <option value="NE" >NE</option>
                            <option value="NO" >NO</option>
                        </select>
                    </div>
                    <div><input type="hidden" class="form-control" name="tipoFormVm" value="formVM" id="exampleInputInicio"></div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info" data-dismiss="modal"  role="button">Close</button>
                            </div>
                            <div class="btn-group btn-delete hidden" role="group">
                                <button type="button" id="delImage" class="btn btn-danger" data-dismiss="modal"  role="button">Delete</button>
                            </div>
                            <div class="btn-group" role="group">
                                <input type="submit" id="saveImage" class="btn btn-success" value="Salvar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!------ Include the above in your HEAD tag ---------->
<div class="container-fluid mt-4">
    <div class="page-header text-center">
        <h3>Painel de ofertas Mérito.</h3>
    </div>
    <div class="row grid-divider mt-4">
        <div class="col-sm-6">
            <div class="table-responsive" id="sailorTableAreaC">
                <table id="sailorTableC" class="table table-striped table-bordered" width="100%">

                    <thead>
                    <tr>
                        <th>Operador</th>
                        <th>Tipo Energia</th>
                        <th>Inicio</th>
                        <th>Fim</th>
                        <th>Montante</th>
                        <th>Preço</th>
                        <th>Submercado</th>
                        <th>Criado em:</th>
                        <th>Editado em:</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->operador }}</td>
                            <td>{{ $book->tp_energia }}</td>
                            <td>{{ $book->inicio }}</td>
                            <td>{{ $book->fim }}</td>
                            <td>{{ $book->volume }}</td>
                            <td>{{ $book->preco }}</td>
                            <td>{{ $book->submercado }}</td>
                            <td>{{ $book->created_at }}</td>
                            <td>{{ $book->updated_at }}</td>
                            <td>
                             <form action="/layouts/main/{{$book->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                <a href="/layouts/edit/{{$book->id}}"class="btn btn-warning btn-edit btn-sm">Editar</a>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="table-responsive" id="sailorTableAreaV">
                <table id="sailorTable" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>Operador</th>
                        <th>Tipo Energia</th>
                        <th>Inicio</th>
                        <th>Fim</th>
                        <th>Montante</th>
                        <th>Preço</th>
                        <th>Submercado</th>
                        <th>Criado em:</th>
                        <th>Editado em:</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookV as $book)
                        <tr>
                            <td>{{ $book->operador }}</td>
                            <td>{{ $book->tp_energia }}</td>
                            <td>{{ $book->inicio }}</td>
                            <td>{{ $book->fim }}</td>
                            <td>{{ $book->volume }}</td>
                            <td>{{ $book->preco }}</td>
                            <td>{{ $book->submercado }}</td>
                            <td>{{ $book->created_at }}</td>
                            <td>{{ $book->updated_at }}</td>
                            <td>
                             <form action="/layouts/modalvenda/{{$book->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                <a href="/layouts/editV/{{$book->id}}"class="btn btn-warning btn-edit btn-sm">Editar</a>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="page-header text-center">
        <h3>Painel de ofertas Mercado.</h3>
    </div>
    <div class="row grid-divider mt-4">
        <div class="col-sm-6">
            <div class="table-responsive" id="sailorTableAreaCM">
                <table id="sailorTable" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>Operador</th>
                        <th>Tipo Energia</th>
                        <th>Inicio</th>
                        <th>Fim</th>
                        <th>Montante</th>
                        <th>Preço</th>
                        <th>Submercado</th>
                        <th>Criado em:</th>
                        <th>Editado em:</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookCm as $book)
                        <tr>
                            <td>{{ $book->operador }}</td>
                            <td>{{ $book->tp_energia }}</td>
                            <td>{{ $book->inicio }}</td>
                            <td>{{ $book->fim }}</td>
                            <td>{{ $book->volume }}</td>
                            <td>{{ $book->preco }}</td>
                            <td>{{ $book->submercado }}</td>
                            <td>{{ $book->created_at }}</td>
                            <td>{{ $book->updated_at }}</td>
                            <td>
                             <form action="/layouts/modalcompramercado/{{$book->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                <a href="/layouts/editCM/{{$book->id}}"class="btn btn-warning btn-edit btn-sm">Editar</a>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="table-responsive" id="sailorTableAreaVM">
                <table id="sailorTable" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>Operador</th>
                        <th>Tipo Energia</th>
                        <th>Inicio</th>
                        <th>Fim</th>
                        <th>Montante</th>
                        <th>Preço</th>
                        <th>Submercado</th>
                        <th>Criado em:</th>
                        <th>Editado em:</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookVm as $book)
                        <tr>
                            <td>{{ $book->operador }}</td>
                            <td>{{ $book->tp_energia }}</td>
                            <td>{{ $book->inicio }}</td>
                            <td>{{ $book->fim }}</td>
                            <td>{{ $book->volume }}</td>
                            <td>{{ $book->preco }}</td>
                            <td>{{ $book->submercado }}</td>
                            <td>{{ $book->created_at }}</td>
                            <td>{{ $book->updated_at }}</td>
                            <td>
                              <form action="/layouts/modalvendamercado/{{$book->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                <a href="/layouts/editVm/{{$book->id}}"class="btn btn-warning btn-edit btn-sm">Editar</a>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
