<div class="form-group">
    <label for="inputDescription">Descriçao</label>
    <textarea class="form-control" name="descriçao" id="inputDescription">{{old('descriçao', $detalhe_esp->descriçao)}}</textarea>
</div>

<div class="form-group">
    <label for="especialidade_id">Especialidade:</label>
    <select name="especialidade_id" class="form-control" id="especialidade_id">
        @foreach ($especialidades as $especialidade)
            <option value="{{ $especialidade->id }}">{{ $especialidade->nome }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>
