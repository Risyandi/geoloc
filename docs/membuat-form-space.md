# Membuat Form Space
Untuk membuat form space ini kamu akan menggunakan package `form builder `yang bernama `laravelcollective/html` tujuan nya untuk mempercepat proses pembuatan form, untuk menambahkan package tersebut. ketikan perintah berikut.  
`$ composer require laravelcollective/html`  
dan nantinya akan menghasilkan proses seperti berikut.  
![screenshot install package laravelcollective](https://link)  

1. Bagaimana cara menggunakan `laravelcollective` ini. untuk menggunakan nya adalah sebagai berikut.  
- Buat file dengan nama `create.blade.php` yang berlokasi di folder `yourFolder/resources/views/pages/space/`, lalu isinya pakai default dari file `home.blade.php`.
- Setelah membuat file `create.blade.php` selanjutnya menambahkan controller nya. masuk ke folder `App/Http/Controller/` lalu cari file dengan nama `SpaceController.php` lalu ubah dan tambahkan dengan baris kode berikut ini
    ```php
    public function create()
        {
            return view('pages.space.create');
        }
    ```  
    setelah membuat dan mengatur controller selanjutnya adalah menambahkan field form untuk menambahkan space. caranya pilih file `create.blade.php` lalu tambahkan baris kode kedalam `div` dengan nama `class="card"`  

    ```php
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
                            {!! Form::text('latitude', null, ['class' => $errors->has('latitude') ? 'form-control is-valid' : 'form-control']) !!}
                            @error('latitude')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Longitude</label>
                            {!! Form::text('longitude', null, ['class' => $errors->has('longitude') ? 'form-control is-valid' : 'form-control']) !!}
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
    ```  
    untuk components navigation dengan tag `<x-navigation/>` bisa dibuat dengan cara
    - Buat file dengan nama `navigation.blade.php` didalam folder `components` lalu masukan baris kode berikut ini
    ```php
    <div class="row justify-content-center">
    <div class="col-md-8">
            <div class="d-flex justify-content-between mb-3">
                <div id="back-space">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i> Back </a>
                </div>
            </div>
        </div>
    </div>
    ```
