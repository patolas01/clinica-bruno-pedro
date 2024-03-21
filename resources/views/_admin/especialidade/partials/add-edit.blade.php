<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{old('nome',$especialidade->nome)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Curta_Descrição</label>
    <textarea class="form-control" name="curta_desc" id="inputDescription">{{ old('curta_desc', $especialidade->curta_desc) }}</textarea>
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="icon" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>
