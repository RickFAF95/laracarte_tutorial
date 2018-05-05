@if(Session::has('success'))
    <div class="alert alert-success col-md-4 offset-md-4">
        {{ Session::get('success') }}
    </div>
@endif