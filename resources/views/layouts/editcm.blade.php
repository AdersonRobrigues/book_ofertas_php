<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>

    <!-- content goes here -->
    <form action="/layouts/updateCM/{{$offer->id}}" method="POST" class="container">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="exampleInputOperador">Operador</label>
            <input type="text" class="form-control" name="operador" id="exampleInputOperador" placeholder="Selecione" value="{{$offer->operador}}">
        </div>
        <div class="form-group">
            <label for="exampleInputTp_Energia">TP_Energia</label>
            <select  name="tp_energia" class="form-control" id="exampleInputTp_Energia" value="{{$offer->tp_energia}}">
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
            <input type="text" class="form-control" name="inicio" id="exampleInputInicio" placeholder="Selecione" value="{{$offer->inicio}}">
        </div>
        <div class="form-group">
            <label for="exampleInputFim">Fim</label>
            <input type="text" class="form-control" name="fim" id="exampleInputFim" placeholder="Selecione" value="{{$offer->fim}}">
        </div>
        <div class="form-group">
            <label for="exampleInputMont">Montante</label>
            <input type="number" class="form-control" name="volume" id="exampleInputMont" placeholder="Selecione" value="{{$offer->volume}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPreco">Preço</label>
            <input type="decimal" class="form-control" name="preco" id="exampleInputPreco" placeholder="Selecione" value="{{$offer->preco}}">
        </div>
        <div class="form-group">
            <label for="exampleInputSub">Submercado</label>
            <select  name="submercado" class="form-control" id="exampleInputSub" value="{{$offer->submercador}}">
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
                <div class="btn-group" role="group">
                    <input type="submit" id="saveImage" class="btn btn-warning" value="Editar">
                </div>
            </div>
        </div>
    </form>
 
</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
