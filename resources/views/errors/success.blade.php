@if (session('status'))
    <div class="alert alert-success alert-dismissible text-center">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ session('status') }}</strong>.
    </div>
@endif
