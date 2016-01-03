@if (count($errors) > 0)
    <ul class="collection">
        @foreach ($errors->all() as $error)
            <li class="collection-item">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if (session('message'))
    <ul class="collection">
        <li class="collection-item">{{ session('message') }}</li>
    </ul>
@endif
