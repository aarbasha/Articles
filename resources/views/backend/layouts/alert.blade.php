@if ($errors->any())
    {{-- <div class="row w-100">
        <div class="col-lg-12 d-flex justify-content-center "> --}}
            <div class="alert alert-danger w-100 rounded" style="width: 800px">
                <ul>
                    @foreach ($errors->all() as $error)
                        <p class="text-center">{{ $error }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </p>
                    @endforeach
                </ul>
            </div>
        {{-- </div>
    </div> --}}

@endif

@if (session()->has('Add'))
    {{-- <div class="row">
        <div class="col-lg-12"> --}}
            <div class="alert alert-success alert-dismissible fade show rounded text-center" role="alert"
                style="width: 800px">
                <strong class=''>{{ session()->get('Add') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif

@if (session()->has('edit'))
    {{-- <div class="row">
        <div class="col-lg-12"> --}}
            <div class="alert alert-info alert-dismissible fade show rounded text-center" role="alert"
                style="width: 800px">
                <strong class=''>{{ session()->get('edit') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        {{-- </div>
    </div> --}}

@endif

@if (session()->has('delete'))
    {{-- <div class="row">
        <div class="col-lg-12"> --}}
            <div class="alert alert-primary alert-dismissible fade show rounded text-center" role="alert"
                style="width: 800px">
                <strong class=''>{{ session()->get('delete') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        {{-- </div>
    </div> --}}

@endif

@if (session()->has('Error'))

    {{-- <div class="row">
        <div class="col-lg-12"> --}}
            <div class="alert alert-danger alert-dismissible fade show rounded text-center" role="alert"
                style="width: 800px">
                <strong class=''>{{ session()->get('Error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        {{-- </div>
    </div> --}}

@endif
