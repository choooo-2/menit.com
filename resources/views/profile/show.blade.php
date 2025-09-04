@extends('layouts.admin')
@extends('layouts.penulis')

@section('content')



<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mt-4">
                            <div class="card-body">
                                  <h1>Tentang Akun</h1>

                                   @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama :</label>
                                    <input type="text" value="{{$user->name}}" disabled class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address :</label>
                                <input type="text" value="{{$user->email}}" disabled class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="text" value="........" disabled class="form-control">

                                </div>
                                <div class="d-flex">
                                    <a href="{{ route('profile.edit') }} " class="btn btn-primary me-2">Edit</a>
                                    <form action="{{ route('profile.destroy') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Apakah anda yakin?')" type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                    </div>
                                  
                            </div>
                        </div>
                    </div>
                </main>

@endsection