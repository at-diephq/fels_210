@if ($errors)
    @foreach( $errors->all() as $message)
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @endforeach
@endif
