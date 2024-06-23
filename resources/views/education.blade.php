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
        


        
            <section class="bg-white dark:bg-gray-900" data-aos="zoom-out">
                <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 relative mt-16">
                    <div class="place-self-center mr-auto lg:col-span-7">
                        <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white" data-aos="fade-right">GreenV Edukasi</h1>
                        <p class="mb-6 max-w-2xl font-light text-gray-800 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400" data-aos="fade-right">GreenV Edukasi ini dilaksanakan untuk memotivasi masyarakat terutama generasi muda untuk aktif berpartisipasi dalam gerakan ramah lingkungan. Sebab, sejatinya, pengendalian perubahan iklim bukan hanya tugas pemerintah pusat maupun daerah, tetapi juga membutuhkan kontribusi dan dukungan dari seluruh pihak, termasuk generasi milenial.</p>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex" data-aos="fade-left">
                        <img src="{{ asset('user/images/ko1.png') }}" alt="mockup">
                    </div>                
                </div>
            </section>

            {{-- Edukasi --}}
        <div class="flex flex-wrap pt-12 -mx-auto max-w-7xl  py-12 px-4 sm:px-6 lg:px-8 border border-Black" data-aos="fade-up">
        <!-- Apa itu Sampah? -->
        <div class="mb-5 border-b border-white pb-8" data-aos="fade-up">
            <h2 class="text-2xl font-bold mb-4"data-aos="fade-up">Apa itu Sampah?</h2>
            <p class="mb-6 text-lg"data-aos="fade-up">Sampah adalah bahan atau barang yang sudah tidak digunakan lagi dan dibuang oleh manusia. Sampah dapat berasal dari berbagai aktivitas seperti rumah tangga, industri, pertanian, dan lainnya.</p>
        </div>

        <!-- Jenis-Jenis Sampah -->
        <div class="mb-5 border-b border-white pb-8" data-aos="fade-up">
            <h2 class="text-2xl font-bold mb-4">Jenis-Jenis Sampah</h2>
            <p class="mb-6 text-lg"data-aos="fade-up">Sampah dapat diklasifikasikan berdasarkan sumbernya dan sifatnya:</p>
            <div class="ml-4 space-y-2" data-aos="fade-up">
                <p><strong data-aos="fade-up">Berdasarkan Sumbernya:</strong></p>
                <ul class="list-disc ml-8" data-aos="fade-up">
                    <li>Sampah Rumah Tangga: Sisa makanan, plastik, kertas, dan lain-lain.</li>
                    <li>Sampah Industri: Limbah pabrik, bahan kimia, logam.</li>
                    <li>Sampah Pertanian: Sisa tanaman, pupuk, pestisida.</li>
                    <li>Sampah Komersial: Sampah dari toko, pasar, restoran.</li>
                </ul>
                <p class="mt-4" data-aos="fade-up"><strong>Berdasarkan Sifatnya:</strong></p>
                <ul class="list-disc ml-8" data-aos="fade-up">
                    <li>Sampah Organik: Bahan yang bisa terurai secara alami, seperti sisa makanan, daun, dan kertas.</li>
                    <li>Sampah Anorganik: Bahan yang tidak bisa terurai secara alami atau memerlukan waktu yang sangat lama, seperti plastik, kaca, dan logam.</li>
                    <li>Sampah B3 (Bahan Berbahaya dan Beracun): Limbah yang berbahaya bagi kesehatan manusia dan lingkungan, seperti baterai, obat-obatan, bahan kimia.</li>
                </ul>
            </div>
        </div>

        <!-- Dampak Lingkungan dari Sampah -->
        <div class="mb-5 border-b border-white pb-8" data-aos="fade-up">
            <h2 class="text-2xl font-bold mb-4" data-aos="fade-up">Dampak Lingkungan dari Sampah</h2>
            <ul class="list-disc ml-4 space-y-2" data-aos="fade-up">
                <li>Pencemaran Tanah: Sampah yang tidak dikelola dengan baik dapat mencemari tanah dan mengganggu kesuburannya.</li>
                <li>Pencemaran Air: Sampah yang dibuang ke sungai atau laut dapat mencemari air, membahayakan ekosistem air, dan kesehatan manusia.</li>
                <li>Pencemaran Udara: Pembakaran sampah terutama sampah plastik dapat menghasilkan gas beracun yang mencemari udara.</li>
                <li>Gangguan Kesehatan: Sampah yang menumpuk dapat menjadi sarang penyakit dan mengundang hama seperti tikus dan lalat.</li>
            </ul>
        </div>

        <!-- Pengelolaan Sampah -->
        <div class="mb-5 border-b border-white pb-8" data-aos="fade-up">
            <h2 class="text-2xl font-bold mb-4" data-aos="fade-up">Pengelolaan Sampah</h2>
            <p class="mb-6 text-lg" data-aos="fade-up">Pengelolaan sampah meliputi serangkaian kegiatan yang dilakukan untuk menangani sampah dari sumber hingga pemrosesan akhir:</p>
            <ol class="list-decimal ml-4 space-y-2"data-aos="fade-up">
                <li><strong>Pengurangan (Reduce)</strong>: Mengurangi penggunaan barang sekali pakai dan menggantinya dengan barang yang lebih tahan lama dan dapat digunakan berulang kali.</li>
                <li><strong>Penggunaan Kembali (Reuse)</strong>: Menggunakan kembali barang-barang yang masih layak pakai untuk fungsi yang sama atau fungsi lain.</li>
                <li><strong>Daur Ulang (Recycle)</strong>: Mengolah sampah menjadi produk baru yang dapat digunakan kembali.</li>
                <li><strong>Pengomposan (Composting)</strong>: Mengolah sampah organik menjadi kompos yang dapat digunakan sebagai pupuk alami.</li>
                <li><strong>Pengolahan Akhir</strong>: Melakukan pengelolaan akhir seperti insinerasi atau sanitary landfill.</li>
            </ol>
        </div>

        <!-- Peran Individu dalam Pengelolaan Sampah -->
        <div data-aos="fade-up">
            <h2 class="text-2xl font-bold mb-4" data-aos="fade-up">Peran Individu dalam Pengelolaan Sampah</h2>
            <ul class="list-decimal ml-4 space-y-2"data-aos="fade-up">
                <li>Membawa tas belanja sendiri untuk mengurangi penggunaan kantong plastik.</li>
                <li>Memilah sampah organik dan anorganik di rumah.</li>
                <li>Menggunakan barang-barang yang bisa diisi ulang seperti botol minum.</li>
                <li>Mengurangi pembelian barang yang tidak diperlukan.</li>
                <li>Mendukung program daur ulang dan pengelolaan sampah di komunitas.</li>
            </ul>
            <p class="mt-4"data-aos="fade-up">Dengan kesadaran dan tindakan nyata dari setiap individu, pengelolaan sampah yang efektif dapat terwujud dan dampak negatif terhadap lingkungan dapat diminimalkan.</p>
        </div>
    </div>

            <!--Posts Artikel-->
            <div class="text-center mt-12 mb-12 w-full">
            <h1 class="text-3xl font-bold mb-8 text-gray-800" data-aos="zoom-in"> - Artikel - </h1>
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

    </div>

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
