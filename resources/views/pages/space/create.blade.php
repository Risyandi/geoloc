@extends('layouts.app')

@section('content')
<div class="container">
    <x-navigation/>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Submit My Space</div>
               
                <div class="card-body">
                    {!! Form::open(['route' => 'space.store', 'method' => 'posts', 'files' => true]) !!}
                    
                    <div class="form-group">
                        <label for="">Title</label>
                        {!! Form::text('title', null, ['class' => $errors->has('title') ? 'form-control is-valid' : 'form-control']) !!}
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="">Address</label>
                        {!! Form::textarea('adresss', null, [
                            'class' => $errors->has('adresss') ? 'form-control is-valid' : 'form-control',
                            'cols' => "10",
                            'rows' => "3"
                            ]) !!}
                        @error('adresss')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        {!! Form::textarea('description', null, [
                            'class' => $errors->has('description') ? 'form-control is-valid' : 'form-control',
                            'cols' => "10",
                            'rows' => "3"
                            ]) !!}
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div id="here-maps">
                        <label for="">Pin location</label>
                        <div id="mapContainer" style="height: 500px"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Latitude</label>
                        {!! Form::text('latitude', null, ['class' => $errors->has('latitude') ? 'form-control is-valid' : 'form-control' ,'id' => 'lat']) !!}
                        @error('latitude')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Longitude</label>
                        {!! Form::text('longitude', null, ['class' => $errors->has('longitude') ? 'form-control is-valid' : 'form-control', 'id' => 'lng']) !!}
                        @error('longitude')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        window.action = "submit"
    </script>   
@endpush