
<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control" name="descriçao" id="inputDescription">{{old('descriçao', $detalhe->descriçao)}}</textarea>
</div>



<div class="form-group">
    <label for="inputEspecialidade">Especialidade</label>
    <select class="form-control" name="especialidade_id" id="inputespecialidade" required>
        <option value="" disabled selected>Escolha uma Especialidade</option>
        @foreach($especialidades as $especialidade)
            <option value="{{ $especialidade->id }}" {{ $especialidade->id == old('especialidade_id', $detalhe->especialidade_id) ? "selected" : "" }}>
                {{ $especialidade->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <br>
    <img height='100' style="margin-bottom:1rem" src="{{ asset('storage/detalheesp_imagens/' . $detalhe->imagem) }}"
        alt="Imagem do Post">
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>
