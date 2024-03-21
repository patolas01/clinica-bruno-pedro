<!--<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB.</small>
</div>-->

<div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputNome"
        value="{{ old('nome', $postSaude->nome) }}" />
</div>

<div class="form-group">
    <label for="inputDescricao">Descrição</label>
    <textarea class="form-control" name="descricao" id="inputDescricao">{{ old('descricao', $postSaude->descricao) }}</textarea>
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <br>
    <img height='100' style="margin-bottom:1rem" src="{{ asset('storage/post_imagens/' . $postSaude->imagem) }}"
        alt="Imagem do Post">
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted">Por favor carregue um ficheiro de imagem válido. O tamanho da
        imagem não deve exceder 2MB.</small>
</div>
