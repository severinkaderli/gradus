@if($errors->any())
    <div class="alert alert--warning">
        <strong>Warning</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif