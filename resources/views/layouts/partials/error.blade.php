<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <ul>
<h1>erro</h1>
    @foreach ($errors ->all() as $message)
        <li>{{$message}}</li>

    @endforeach
    </ul>
</div>
