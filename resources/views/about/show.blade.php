@extends('layouts.app')
@section('title', __('About'))

@section('content')
    <div class="row align-items-center justify-content-center">
        <div class="col-md-4">
            <div class="text-center mb-3">
                <div class="fs-1 text-primary fw-bolder">Scorpio Cell</div>
                <div>Application ID 7BS31237-H222C-B30C-0B481246D1-05FF</div>
                <div>Version 1.0.6</div>
                <div class="small text-muted">
                    v{{ Illuminate\Foundation\Application::VERSION }} (v{{ PHP_VERSION }})
                </div>
                <div>
                    © {{ date('Y') }} Copyright
                </div>
                <div class="small text-muted">NASA Open Source Agreement v1.3 (NASA-1.3)</div>
            </div>
        </div>
    </div>
@endsection
