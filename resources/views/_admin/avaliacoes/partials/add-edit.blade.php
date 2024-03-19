<div class="form-group">
    <label for="inputName">Classificação</label>
    <input type="text" class="form-control" name="classificacao" id="inputName" value="{{old('classificacao',$avaliacoes->classificacao)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Comentário</label>
    <textarea class="form-control" name="comentário" id="inputDescription">{{ old('texto',$avaliacoes->texto)}}</textarea>
</div>
