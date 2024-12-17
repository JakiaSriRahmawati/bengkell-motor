@extends('template.index')
@section('content')
    {{-- <div class="container">
        <img src="{{ is_array($data['images']) ? $data['images'][0] : $data['images'] }}" class="" alt="Image">
    </div>  --}}


    <div class="container mx-auto pt-4 mt-14 my-20">
        <h5 class="text-gray-600 text-2xl">Welcome to</h5>
        <h2 class="text-3xl font-serif">Bengkel Mobil Sukabumi</h2>
        <hr class="my-6 border-t-4 border-red-900 w-1/4">
        <div class="flex flex-row justify-between gap-10">
            <div class="flex flex-col w-4/12">
                <h3 class="font-bold text-3xl text-red-900">5 Tahun</h3>
                <h3 class="font-mono text-2xl text-red-900">100% Amanah</h3>
                <h3 class="font-sans text-2xl text-red-900 font-bold">Best Services</h3>
            </div>
            <p class="w-4/12 text-xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, blanditiis suscipit? Iste, natus soluta aspernatur
                consequatur obcaecati accusamus repudiandae voluptas nobis, tempora sed et nihil! Et nihil vel amet optio.
            </p>
            <img src="{{ Storage::url('images/depan/baru.png') }}" class="w-3/12" alt="Gambar Galeri">
        </div>
    </div>

    <div class="container mx-auto pt-4 mt-14 flex flex-row gap-12">
        <img src="{{ Storage::url('images/depan/baru.png') }}" class="w-5/12" alt="Gambar Galeri">
        <div class="w-7/12 flex flex-col">
            <span class="font-serif text-xl">Sekilas tentang</span>
            <h3 class="font-serif text-3xl text-red-950">Bengkel Motor Sukabumi</h3>
            <p class="text-lg">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus iste, veritatis maxime molestias voluptatum est expedita. Laborum odio cupiditate tempore laboriosam reiciendis delectus architecto maxime. Nemo quia officiis temporibus, reiciendis est nihil illum natus eius vero aperiam, culpa tenetur dolorem laboriosam neque unde illo voluptatibus vel, obcaecati impedit ad esse.
            </p>
            <p class="text-lg">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, autem. Tempore temporibus a vero sint aliquid! Laboriosam praesentium explicabo suscipit!
            </p>
            <a href="{{ route('about')}}" class="text-blue-600 text-lg mt-6">Read More ></a>
        </div>
    </div>


    <h4 class="font-semibold text-4xl text-red-800 text-center mt-9">Services</h4>
    <h2 class="font-bold text-4xl text-red-950 text-center">Layanan Automaster</h2>

    <div class="container mx-auto px-4 mt-14">
        <div class="grid grid-cols-3 gap-4">
            @for ($i = 0; $i < 6; $i++)
            <div class="mx-auto border border-gray-300 rounded-lg shadow-md p-6 transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-red-900 hover:to-red-700 hover:text-white hover:shadow-lg group">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 group-hover:text-white transition-colors duration-300 ease-in-out">
                    Tune up
                </h3>
                <img src="{{ Storage::url('images/depan/baru.png') }}" class="w-5/12 transition-transform duration-300 group-hover:scale-110" alt="Gambar Galeri">
                <p class="text-gray-600 group-hover:text-white transition-colors duration-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, autem!   
                </p>
                <button class="mt-4 bg-gradient-to-r from-blue-400 to-blue-600 text-white py-2 px-4 rounded hover:bg-gradient-to-r hover:from-blue-600 hover:to-blue-800 shadow-lg hover:shadow-blue-500/50 transition-transform duration-300 hover:scale-105">
                    Lihat Selengkapnya
                </button>
            </div>
            @endfor
        </div>
    </div>
    

    <div class="container mx-auto mt-14 flex flex-row gap-8 justify-between">
        <div class="flex flex-col">
            <h3 class="font-semibold text-3xl mb-6">Apa yang kami kerjakan ?</h3>
            @for ($i = 0; $i < 6; $i++)
            <span class="mb-1 text-xl inline-flex items-center">
                <i class="fas fa-tools text-2xl mr-2"></i>
                Mesin dan Transmisi
            </span>
            @endfor
        </div>
        <img src="{{ Storage::url('images/depan/kar.png') }}" class="w-80" alt="Gambar Galeri">
        <div class="px-3 py-4 bg-gray-300 w-80 text-center rounded-lg shadow-md">
            <h4 class="text-xl mb-2 mt-6 font-semibold text-gray-800">Why us ?</h4>
            <p class="text-3xl font-great-vibes" style="font-family: 'Great Vibes', cursive;">
                Alasan Memilih Kami
            </p>
            @for ($i = 0; $i < 5; $i++)
            <button id="mobileLanguageButton" class="flex items-center space-x-2 hover:bg-gray-100 text-black rounded-[60px] px-[8px] py-[8px] my-2 bg-slate-100 w-full">
                <i class="fa-solid fa-circle-check text-xl"></i>
                <span class="text-lg font-semibold leading-7">Montir Profesional</span>
            </button> 
            @endfor                                                                                                                              
        </div> 
    </div>
    <div class="flex justify-center">
        <button id="mobileLanguageButton" onclick="window.location.href='{{ route('layanan') }}'" class="flex items-center justify-center space-x-2 hover:scale-105 text-white rounded-[50px] px-6 py-3 my-4 w-60 bg-gradient-to-r from-black to-blue-500 transition duration-300 ease-in-out">
            <span class="text-lg font-semibold leading-7 text-center">SELENGKAPNYA</span>
        </button>
    </div>    
       
    <div class="bg-red-950 w-full">
        <div class="container mx-auto mt-14">
            <div class="flex flex-row items-center gap-4">
                <div class="flex flex-col gap-5 w-1/6">
                    <i class="fas fa-images fa-4x text-amber-600 "></i>
                    <h3 class="font-normal text-xl text-white">Dokumentasi</h3>
                    <span class="font-serif text-4xl text-white">Galeri Foto</span>
                    <a href="{{ route('galery')}}" class="text-yellow-600">Lebih banyak ></a>
                </div>
                <div class="flex gap-8 w-5/6">
                    @for ($i = 0; $i < 4; $i++)
                        <img src="{{ Storage::url('images/galery/one.jpg') }}" class="my-8 w-72 transform transition hover:translate-y-1 hover:rotate-2" alt="Gambar Galeri">
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <div class="relative w-full h-screen">
        <img src="{{ Storage::url('images/depan/baruuy.jpg') }}" class="w-full h-screen object-cover" alt="Gambar Galeri">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center bg-black bg-opacity-40 p-4">
            <h3 class="text-3xl text-white font-bold mb-2">+200</h3>
            <span class="text-3xl text-white mb-2">Kami Melayani Customer</span>
            <span class="text-3xl text-white">di seluruh area Sukabumi dan sekitarnya</span>
        </div>
    </div>

    <div class="container mx-auto mt-14 flex flex-row justify-between gap-10">
        <div class="px-3 py-4 bg-gray-200 w-80 text-center rounded-lg shadow-md">
            <h4 class="text-xl mb-2 mt-6 font-semibold">New Posts!</h4>
            <p class="text-3xl font-great-vibes text-gray-800" style="font-family: 'Great Vibes', cursive;">
                Blog & Artikel
            </p>
            <a href="/artikel" 
                class="mt-20 text-xl text-orange-500 hover:text-gray-600">
                Lihat Lebih Banyak >
            </a>                                                       
        </div>
        @for ($i = 0; $i < 3; $i++)
        <a href="/artikel/detail" class="relative w-96 h-64 rounded-lg shadow-md overflow-hidden group">
            <img src="{{ Storage::url('images/galery/one.jpg') }}" alt="Example Image" 
                 class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-110">
            <div class="absolute inset-0 flex bg-black bg-opacity-50">
                <p class="text-white text-2xl font-bold pl-6">Tips Mesin</p>
            </div>
        </a>             
        @endfor

    </div>
    
      
    
    
    
    
    
    
    
    





       {{-- <h3 class="text-dark mb-4 text-center">Selamat Datang di Zackk</h3>
        <p class="text-lg">Zackk adalah toko ritel modern yang mengkhususkan diri dalam menyediakan 
            suku cadang berkualitas tinggi untuk sepeda motor. Dengan fokus utama pada penyediaan ban motor 
            berkualitas dan tahan lama, kami juga menawarkan layanan unggulan seperti Servis Motor, Ganti Oli 
            dan Suku Cadang Otomotif.Komitmen Kami pada Indonesia: Dengan lebih dari 1100 toko Planet Ban 
            tersebar di seluruh Indonesia,kami hadir lebih dekat dengan masyarakat Indonesia. Dukungan dari 7 
            Juta pelanggan di seluruh negeri membuktikan kepercayaan yang diberikan kepada kami untuk memenuhi 
            kebutuhan suku cadang sepeda motor. Ini memotivasi kami untuk terus berinovasi dan menyediakan 
            produk-produk terbaik serta berkualitas bagi pemilik sepeda motor di Indonesia.</p>
        <div class="container mt-5">
            <div class="row">
                @foreach ($data as $item)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ $item->gambar }}" alt="" class="card-img-top" style="height: 150px;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <a href="{{ route('detailArtikel', $item->id) }}" class="btn btn-dark d-block">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <span class="fst-italic">Ini Ulasan dalam italic</span>
                        <div class="rating mt-2">
                            <span class="star"  style="color: yellow">&#9733;</span>
                            <span class="star"  style="color: yellow">&#9733;</span>
                            <span class="star"  style="color: yellow">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <p>Mekaniknya sangat ramah</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <span class="fst-italic">Ini Ulasan dalam italic</span>
                        <div class="rating mt-2">
                            <span class="star" style="color: yellow">&#9733;</span>
                            <span class="star" style="color: yellow">&#9733;</span>
                            <span class="star" style="color: yellow">&#9733;</span>
                            <span class="star" style="color: yellow">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <p>Bagus sekaliii</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <span class="fst-italic">Ini Ulasan dalam italic</span>
                        <div class="rating mt-2">
                            <span class="star"  style="color: yellow">&#9733;</span>
                            <span class="star"  style="color: yellow">&#9733;</span>
                            <span class="star"  style="color: yellow">&#9733;</span>
                            <span class="star"  style="color: yellow">&#9733;</span>
                            <span class="star"  style="color: yellow">&#9733;</span>
                            <p>Mekaniknya ramah sekalii & lucuuu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="bg-success">
            <div class="mt-5 d-flex justify-content-center">
                <span>mau servis motor ? ayoo booking sekarang</span>
            </div>
            <div class="m-5 d-flex justify-content-center">
                <a href="{{ route('login',['id']) }}" class="btn btn-dark btn-rounded">Booking Sekarang !</a>
              </div>
        </div> --}}
        {{-- <div class="modal fade" id="tambahMekanikModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Booking</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('postPesan') }}" method="POST" class="form-group"
                                enctype="multipart/form-data">
                                @csrf
                                <label for="merek_motor" class="text-dark">Merek Motor</label>
                                <input style="background-color: rgba(255, 255, 255, 0.582)" type="text" required name="merek_motor" class="form-control" placeholder="Masukan Merek Motor">
                                <label for="seri_motor" class="text-dark">Seri Motor</label>
                                <input style="background-color: rgba(255, 255, 255, 0.582)" type="text" required name="seri_motor" class="form-control" placeholder="Masukan Seri Motor Contoh : Vario">
                                <label for="mesin_motor" class="text-dark">Mesin Motor</label>
                                <input style="background-color: rgba(255, 255, 255, 0.582)" type="text" required name="mesin_motor" class="form-control" placeholder="Masukan CC Mesin Motor">
                                <label for="no_plat" class="text-dark">Plat Motor</label>
                                <input style="background-color: rgba(255, 255, 255, 0.582)" type="text" required name="no_plat" class="form-control" placeholder="Mauskan No Plat Motor Anda">
                                <label for="jenis_service" class="text-dark">Jenis Service</label>
                                <input style="background-color: rgba(255, 255, 255, 0.582)" type="text" required name="jenis_service" class="form-control" placeholder="Masukan Service yang Anda inginkan">
                                <label for="tgl_service" class="text-dark">Tanggal Booking</label>
                                <input style="background-color: rgba(255, 255, 255, 0.582)" type="date" required name="tgl_service" class="form-control" placeholder="Masukan Tanggal yg ingin Anda Booking">
                                <label for="deskripsi" class="text-dark">Deskripsi</label>
                                <input style="background-color: rgba(255, 255, 255, 0.582)" type="text" required name="deskripsi" class="form-control" placeholder="Tambahkan Deskripsi "> 
                                <input type="hidden" name="status_service" class="form-control">
                                <input type="hidden" name="status_pembayaran" class="form-control">
                                <input type="hidden" name="status_orderan" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
    </div> --}}
             
    

          
@endsection

  
    

   