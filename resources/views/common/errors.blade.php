@if(count($errors) > 0)
    <!-- Página de errp -->
    <div class="alert alert-danger">
        <strong>Ops! Ocorreu um erro</strong>

        <br>
        <br>

        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endif
