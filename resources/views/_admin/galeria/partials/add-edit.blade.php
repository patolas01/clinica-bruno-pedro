<div class="form-group">
    <label for="inputName">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputName" value="{{old('nome',$galeria->nome)}}" />
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <br>
    <img height='100' style="margin-bottom:1rem" src="{{ asset('storage/galeria_imagens/' . $galeria->imagem) }}"
        alt="Imagem da Galeria">
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Por favor carregue um ficheiro de imagem válido. O tamanho da imagem não deve exceder 2MB. </small>
</div>
