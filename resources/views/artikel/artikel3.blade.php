<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Tittle -->
    <link rel="icon" type="image/png" href="{{ asset('user/images/logo1.png') }}">
    <title>GreenV | Website</title>
        {{-- Js --}}
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>
<body class="bg-gray-100" x-data="{ open: false, scrollY: 0, currentPath: '{{ url()->current() }}' }" @scroll.window="scrollY = window.scrollY">

    <div class="container mx-auto px-4">
        <!-- --------------- HEADER --------------- -->
        <nav id="header" :class="{ 'bg-opacity-70': scrollY > 50, 'bg-opacity-100': scrollY <= 50 }" class="fixed top-0 left-0 right-0 flex justify-between items-center backdrop-filter backdrop-blur-lg bg-opacity-80 h-16 py-2 transition-all duration-300 z-50 px-4 md:px-8">
            <div class="flex items-center space-x-4">
                <img src="{{ asset('user/images/logo1.png') }}" class="w-8 h-8" alt="Logo"/>
                <p class="text-3xl text-gray-700 font-semibold">GreenV</p>
            </div>
            <div class="hidden md:flex flex-grow justify-center items-center space-x-8">
                <a href="{{ url('/') }}" 
                class="text-gray-600 hover:text-gray-800 font-medium" 
                :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{ url('/') }}' }">Home</a>
                <a href="{{ url('/education') }}" 
                class="text-gray-600 hover:text-gray-800 font-medium" 
                :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{ url('/education') }}' }">Education</a>
                <a href="{{ url('/laporan') }}" 
                class="text-gray-600 hover:text-gray-800 font-medium" 
                :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{ url('/laporan') }}' }">Report</a>
            </div>
            <div class="hidden md:block">
                @auth
                <a href="{{ route('logout') }}" class="btn bg-gray-200 text-gray-700 hover:bg-gray-800 hover:text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i class="uil uil-sign-out-alt ml-2"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{url('auth/login')}}" class="btn bg-gray-200 text-gray-700 hover:bg-gray-800 hover:text-white font-semibold py-2 px-4 rounded-lg transition-all duration-300">Login <i class="uil uil-file-alt ml-2"></i></a>
            @endauth
        
            </div>
            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-700 focus:outline-none">
                    <i class="uil uil-bars text-2xl"></i>
                </button>
            </div>
        
            <!-- Mobile Menu -->
            <div :class="{'hidden': !open}" class="md:hidden absolute top-16 left-0 right-0 bg-white shadow-lg py-2 z-50">
                <a href="{{ url('/') }}" 
                class="block px-4 py-2 text-gray-600 hover:text-gray-800 font-medium" 
                :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{ url('/') }}' }">Home</a>
                <a href="{{ url('/education') }}" 
                class="block px-4 py-2 text-gray-600 hover:text-gray-800 font-medium" 
                :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{ url('/education') }}' }">Education</a>
                <a href="{{ url('/laporan') }}" 
                class="block px-4 py-2 text-gray-600 hover:text-gray-800 font-medium" 
                :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{ url('/laporan') }}' }">Report</a>
                @auth
                <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-600 hover:text-gray-800 font-medium"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i class="uil uil-sign-out-alt ml-2"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <a href="{{url('auth/login')}}" class="block px-4 py-2 text-gray-600 hover:text-gray-800 font-medium">Login <i class="uil uil-file-alt ml-2"></i></a>
                @endauth
            </div>
        </nav>
        
        <!-- Other sections go here -->
        <div class="container mx-auto py-12 px-6 relative mt-16" data-aos="fade-down">
            <!-- Section: Pengomposan Sampah -->
            <div class="bg-white p-8 rounded-lg shadow-lg mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Pengomposan Sampah: Solusi Alami untuk Mengurangi Limbah dan Memperkaya Tanah</h2>
                <p class="mb-4">Pengomposan sampah merupakan salah satu metode pengolahan limbah yang efisien dan ramah lingkungan. Proses ini tidak hanya membantu mengurangi volume sampah yang masuk ke tempat pembuangan akhir (TPA), tetapi juga menghasilkan kompos yang kaya akan nutrisi dan bermanfaat untuk tanah. Artikel ini akan membahas pengomposan sampah secara mendalam, termasuk manfaat, proses, dan langkah-langkah praktis yang dapat diambil.</p>
                
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Manfaat Pengomposan Sampah</h3>
                <ul class="list-disc pl-6 mb-4">
                    <li class="mb-2">Mengurangi Volume Sampah: Pengomposan mengurangi jumlah sampah organik yang dibuang ke TPA, membantu mengurangi tekanan pada sistem pengelolaan sampah.</li>
                    <li class="mb-2">Memperkaya Tanah: Kompos yang dihasilkan kaya akan nutrisi, meningkatkan kesuburan dan struktur tanah, serta meningkatkan retensi air.</li>
                    <li class="mb-2">Mengurangi Emisi Gas Rumah Kaca: Dengan mengomposkan sampah organik, emisi metana yang dihasilkan oleh pembusukan sampah di TPA dapat dikurangi.</li>
                    <li class="mb-2">Mengurangi Ketergantungan pada Pupuk Kimia: Kompos berfungsi sebagai pupuk alami yang dapat menggantikan pupuk kimia, mengurangi dampak negatifnya terhadap lingkungan.</li>
                </ul>
    
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Proses Pengomposan</h3>
                <ul class="list-disc pl-6 mb-4">
                    <li class="mb-2">Pengumpulan Bahan: Bahan organik seperti sisa makanan, daun, rumput, dan limbah kebun dikumpulkan.</li>
                    <li class="mb-2">Pemilahan dan Persiapan: Sampah dipilah untuk memastikan hanya bahan organik yang dikomposkan. Bahan besar seperti cabang pohon dipotong kecil-kecil untuk mempercepat penguraian.</li>
                    <li class="mb-2">Pengaturan Kompos: Bahan organik disusun dalam tumpukan atau wadah kompos dengan perbandingan yang tepat antara bahan hijau (sisa sayuran, rumput) dan bahan coklat (daun kering, serbuk kayu).</li>
                    <li class="mb-2">Pemeliharaan: Tumpukan kompos harus diaduk secara berkala untuk memastikan aerasi yang baik dan kelembaban yang cukup.</li>
                    <li class="mb-2">Pematangan: Proses pengomposan memerlukan waktu beberapa bulan hingga bahan organik terurai sepenuhnya menjadi kompos.</li>
                </ul>
    
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Langkah-langkah Praktis untuk Pengomposan Rumah Tangga</h3>
                <ul class="list-disc pl-6 mb-4">
                    <li class="mb-2">Memilih Lokasi: Pilih tempat yang teduh dan mudah diakses untuk membuat tumpukan kompos atau memasang wadah kompos.</li>
                    <li class="mb-2">Mengumpulkan Bahan: Mulailah mengumpulkan sisa makanan, potongan sayuran, dan limbah kebun. Hindari memasukkan bahan yang tidak dapat terurai seperti plastik dan logam.</li>
                    <li class="mb-2">Membuat Tumpukan Kompos: Atur bahan organik dalam lapisan, mulai dengan bahan coklat di dasar, diikuti oleh bahan hijau. Pastikan ada cukup udara yang masuk untuk membantu proses penguraian.</li>
                    <li class="mb-2">Memelihara Tumpukan: Aduk tumpukan secara berkala untuk meningkatkan aerasi dan tambahkan air jika terlalu kering.</li>
                    <li class="mb-2">Menggunakan Kompos: Setelah beberapa bulan, kompos siap digunakan. Gunakan kompos untuk memperkaya tanah di kebun atau pot tanaman.</li>
                </ul>
    
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Tantangan dan Solusi dalam Pengomposan</h3>
                <ul class="list-disc pl-6 mb-4">
                    <li class="mb-2">Bau Tidak Sedap: Bau yang tidak sedap biasanya disebabkan oleh terlalu banyak bahan hijau. Solusinya adalah menambahkan lebih banyak bahan coklat dan memastikan aerasi yang baik.</li>
                    <li class="mb-2">Hama: Untuk menghindari hama, hindari memasukkan sisa makanan hewani dan tutup tumpukan kompos dengan baik.</li>
                    <li class="mb-2">Kelembaban: Kelembaban yang tidak tepat dapat menghambat proses pengomposan. Pastikan tumpukan kompos tidak terlalu basah atau terlalu kering.</li>
                </ul>
            </div>
        </div>

                         <!--Posts Artikel-->
                    <div class="text-center mt-12 mb-12 w-full">
                        <h1 class="text-3xl font-bold mb-8 text-gray-800" data-aos="zoom-in"> - Others - </h1>
                        <div class="container mx-auto py-12 px-6">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8  mx-auto grid-flow-row">
                                <!-- 1/5 col -->
                                <div class="p-6 flex flex-col flex-grow flex-shrink" data-aos="fade-right">
                                    <div class="flex-1 rounded-t rounded-b-none overflow-hidden shadow-lg">
                                        <a href="{{ url('artikel/artikel1') }}" class="flex flex-wrap no-underline hover:no-underline">
                                            <img src="{{ asset('user/images/b1.jpg') }}" class="h-64 w-full object-cover rounded-lg pb-6">
                                            <div class="w-full font-bold text-xl text-gray-900 px-6">Penanaman pohon</div>
                                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                Memulai Gerakan Penanaman Pohon: Langkah Menuju Lingkungan yang Lebih Hijau
                                            </p>
                                        </a>
                                    </div>
                                    <div class="flex-none  mt-auto rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                        <div class="flex flex-col items-center justify-between">
                                            <p class="text-gray-600 text-xs md:text-sm">2024</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 2/5 col -->
                                <div class="p-6 flex flex-col flex-grow flex-shrink" data-aos="zoom-in">
                                    <div class="flex-1 rounded-t rounded-b-none overflow-hidden shadow-lg">
                                        <a href="{{ url('artikel/artikel2') }}" class="flex flex-wrap no-underline hover:no-underline">
                                            <img src="{{ asset('user/images/b3.jpg') }}" class="h-64 w-full object-cover rounded-lg pb-6">
                                            <div class="w-full font-bold text-xl text-gray-900 px-6">Pengolahan sampah</div>
                                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                Mengoptimalkan Pengolahan Sampah untuk Lingkungan yang Lebih Bersih dan Sehat
                                            </p>
                                        </a>
                                    </div>
                                    <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                        <div class="flex flex-col items-center justify-between">
                                            <p class="text-gray-600 text-xs md:text-sm">2024</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 3/5 col -->
                                <div class="p-6 flex flex-col flex-grow flex-shrink" data-aos="fade-left">
                                    <div class="flex-1 rounded-t rounded-b-none overflow-hidden shadow-lg">
                                        <a href="{{ url('artikel/artikel3') }}" class="flex flex-wrap no-underline hover:no-underline">
                                            <img src="{{ asset('user/images/b5.jpg') }}" class="h-64 w-full object-cover rounded-lg pb-6">
                                            <div class="w-full font-bold text-xl text-gray-900 px-6">Pengomposan</div>
                                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                Pengomposan Sampah: Solusi Alami untuk Mengurangi Limbah dan Memperkaya Tanah
                                                
                                            </p>
                                        </a>
                                    </div>
                                    <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                        <div class="flex flex-col items-center justify-between">
                                            <p class="text-gray-600 text-xs md:text-sm">2024</p>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- 4/5 col -->
                                <div class="p-6 flex flex-col flex-grow flex-shrink md:col-span-1" data-aos="fade-right">
                                    <div class="flex-1 rounded-t rounded-b-none overflow-hidden shadow-lg">
                                        <a href="{{ url('artikel/artikel4') }}" class="flex flex-wrap no-underline hover:no-underline">
                                            <img src="{{ asset('user/images/b4.jpg') }}" class="h-64 w-full object-cover rounded-lg pb-6">
                                            <div class="w-full font-bold text-xl text-gray-900 px-6">Jumlah Populasi Sampah</div>
                                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                Pertumbuhan populasi dan peningkatan konsumsi masyarakat telah mengakibatkan peningkatan jumlah sampah yang dihasilkan setiap hari
                                            </p>
                                        </a>
                                    </div>
                                    <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                        <div class="flex flex-col items-center justify-between">
                                            <p class="text-gray-600 text-xs md:text-sm">2024</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 5/5 col -->
                                <div class="p-6 flex flex-col flex-grow flex-shrink md:col-span-1" data-aos="zoom-in">
                                    <div class="flex-1 rounded-t rounded-b-none overflow-hidden shadow-lg">
                                        <a href="{{ url('artikel/artikel5') }}" class="flex flex-wrap no-underline hover:no-underline">
                                            <img src="{{ asset('user/images/b6.jpg') }}" class="h-64 w-full object-cover rounded-lg pb-6">
                                            <div class="w-full font-bold text-xl text-gray-900 px-6">Perusakan Lingkungan Laut</div>
                                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                Lingkungan laut merupakan ekosistem yang vital bagi kehidupan di bumi, menyediakan berbagai sumber daya alam, mengatur iklim, dan mendukung keanekaragaman hayati. 
                                            </p>
                                        </a>
                                    </div>
                                    <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                        <div class="flex flex-col items-center justify-between">
                                            <p class="text-gray-600 text-xs md:text-sm">2024</p>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- 5/5 col -->
                                <div class="p-6 flex flex-col flex-grow flex-shrink md:col-span-1" data-aos="fade-left">
                                    <div class="flex-1 rounded-t rounded-b-none overflow-hidden shadow-lg">
                                        <a href="{{ url('artikel/artikel6') }}" class="flex flex-wrap no-underline hover:no-underline">
                                            <img src="{{ asset('user/images/b2.jpg') }}" class="h-64 w-full object-cover rounded-lg pb-6">
                                            <div class="w-full font-bold text-xl text-gray-900 px-6">Dampak Sampah</div>
                                            <p class="text-gray-800 font-serif text-base px-6 mb-5">
                                                Sampah, sebagai produk sisa dari aktivitas manusia, memiliki dampak yang signifikan terhadap lingkungan dan kesehatan jika tidak dikelola dengan baik                                </p>
                                        </a>
                                    </div>
                                    <div class="flex-none mt-auto rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
                                        <div class="flex flex-col items-center justify-between">
                                            <p class="text-gray-600 text-xs md:text-sm">2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

        <!-- Footer goes here -->
    <footer class="dark:bg-gray-900" data-aos="fade-up">
    <hr class="my-6 border-gray-800 sm:mx-auto lg:my-8"/>
    <div class="mx-auto w-full  lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="#" class="flex items-center">
                  <img src="{{ asset('user/images/logo1.png') }}" class="h-10 me-7" alt="Logo" />
                  <span class="self-center text-2x1 font-semibold whitespace-nowrap text-white">GreenV</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3" data-aos="zoom-out">
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase text-white">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https:Laravel.com/" class="hover:underline">Laravel</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase text-white">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/rakaalpiansyah/web-GreenV" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="/" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font- uppercase text-white">Legal</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
        </div>
        <hr class="my-6 border-gray-800 sm:mx-auto dark:border-gray-700 lg:my-8"/>
      <div class="flex items-center justify-center">
        <span class="text-sm text-gray-500 text-center dark:text-gray-400">© 2024 <a href="/" class="hover:underline">GreenV</a>. All Rights Reserved.</span>
    </div>
    

</footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script>

AOS.init({
        duration: 800, // Durasi animasi dalam milidetik
        easing: 'ease-in-out', // Jenis animasi (opsi: 'ease', 'linear', 'ease-in', 'ease-out', 'ease-in-out')
        once: true // Hanya animasikan elemen sekali saat pertama kali di-scroll
    });
        // Alpine.js code to update currentPath
        document.addEventListener('alpine:init', () => {
            Alpine.data('navbar', () => ({
                currentPath: window.location.pathname
            }));
        });
    </script>
</body>
</html>
