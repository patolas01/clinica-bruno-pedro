<div class="form-group">
    <label for="inputName">Classificação</label>
    <select class="form-control" name="classificacao" id="inputName">
        <option value="1" {{ old('classificacao', $avaliaco->classificacao) == 1 ? 'selected' : '' }}>1</option>
        <option value="2" {{ old('classificacao', $avaliaco->classificacao) == 2 ? 'selected' : '' }}>2</option>
        <option value="3" {{ old('classificacao', $avaliaco->classificacao) == 3 ? 'selected' : '' }}>3</option>
        <option value="4" {{ old('classificacao', $avaliaco->classificacao) == 4 ? 'selected' : '' }}>4</option>
        <option value="5" {{ old('classificacao', $avaliaco->classificacao) == 5 ? 'selected' : '' }}>5</option>
    </select>
</div>

<div class="form-group">
    <label for="inputDescription">Comentário</label>
    <textarea class="form-control" name="texto" id="inputDescription">{{ old('texto',$avaliaco->texto)}}</textarea>
</div>
