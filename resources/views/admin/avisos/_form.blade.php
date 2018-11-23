<div class="box box-solid box-primary">
    <div class="box-header with-border"> 
        <h3 class="box-title">Dados Gerais</h3>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label for="Titulo" class="control-label">Título</label>
            <input for="Titulo" class="form-control" type="text" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Descricao" class="control-label">Descrição</label>
            <input for="Descricao" class="form-control" type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Data" class="control-label">Data</label>
            <input for="Data" class="form-control" type="date" name="data" value="{{ isset($registro->data_evento) ? $registro->data_evento : '' }}" required/>
        </div>
        <div class="form-group">
            <label for="Tipo" class="control-label">Tipo</label>
            <select for="Tipo" name="tipo" class="form-control" required>
                <option selected value="1">Informação</option>
                <option value="2">Atenção</option>
                <option value="3">Importante</option>
            </select>
        </div>
    </div>

    <div class="box-header with-border"> 
        <h3 class="box-title">Foto</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-5">
                            <input class="form-control" type="file" name="foto" value="{{ isset($registro->foto) ? $registro->foto : '' }}"/>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</div>