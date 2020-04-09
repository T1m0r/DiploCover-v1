@if(count($php_errormsg) > 0)

    <div class="alert alert-danger">
        <ul>

            @foreach($php_errormsg->all() as $error)

                <li>{{$error}}</li>

            @endforeach
        </ul>

    </div>
@endif