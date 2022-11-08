{{-- pesan error apapun --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- untuk pesan dgn key 'success' dari with() --}}
@if (Session::get('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@endif