@if(Session::has('flashi.message'))
    <div class="alert alert-{{ Session::get('flashi.type') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>{{ Session::get('flashi.message') }}</h4>
    </div>
@endif