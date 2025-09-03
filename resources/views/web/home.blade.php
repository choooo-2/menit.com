@extends('layouts.web')
@section('content')

                

    <!-- Trending Bottom -->

    <div class="row">
                    <div class="col-lg-8">
                        <div class="trending-bottom">
                            <div class="row">
                                @foreach($berita as $b)
                                <div class="col-lg-4 mb-4">
                        <div class="card news-card h-100 animate-fade">
                            <div class="position-relative">
                                <img src="storage/{{ $b->gambar }}" class="card-img-top" alt="Pertemuan presiden dengan duta besar negara-negara ASEAN di Jakarta">
                                <span class="category-badge">{{ $b->kategori->nama }}</span>
                            </div>
                            <div class="card-body">
                                <h5 class="news-title">{{ $b->judul }}</h5>
                                <div class="news-meta">
                                    <span><i class="far fa-user"></i> {{ $b->user->name ?? 'Admin' }}</span>
                                    <span class="ms-2"><i class="far fa-calendar-alt"></i> {{ $b->created_at->format('d M Y') }}</span>
                                </div>
                                <p class="news-excerpt">{{ Str::limit(strip_tags($b->isi), 100) }}</p>
                                <a href="{{ route('web.show', $b->slug) }}" class="btn btn-sm btn-outline-danger">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div> 
                     @endforeach
                    </div>
                        </div>
                   
    <!-- Trending Area End -->

        <!--  Recent Articles start -->
    <div class="recent-articles">
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Recent Articles</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="assets/img/news/recent1.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="assets/img/news/recent2.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="assets/img/news/recent3.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="assets/img/news/recent2.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!--Recent Articles End -->

    

@endsection