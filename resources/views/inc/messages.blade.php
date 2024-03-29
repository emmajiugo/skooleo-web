<br>
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="col-sm-12">
            <div class="alert alert-danger alert-dismissible" role="alert">
                {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="col-sm-12">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('success')}}
        </div>
    </div>
@endif

@if(session('error'))
    <div class="col-sm-12">
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('error')}}
        </div>
    </div>
@endif

@if(session('status'))
    <div class="col-sm-12">
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    </div>
@endif
