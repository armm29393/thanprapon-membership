@if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    Error: {{ $error }}
                </div>
            </div>
        </div>
    @endforeach
@endif
@if(session()->get('info'))
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-info">
                Info: {{ session()->get('msg') }}
            </div>
        </div>
    </div>
@endif
@if(session()->get('success'))
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
@endif
@if(session()->get('danger'))
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div>
        </div>
    </div>
@endif
