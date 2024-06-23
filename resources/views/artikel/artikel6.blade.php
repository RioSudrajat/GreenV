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
        <div class="container mx-auto py-12 px-6 relative mt-12" data-aos="fade-down">
            <!-- Section: Dampak Sampah terhadap Lingkungan dan Kesehatan -->
            <div class="bg-white p-8 rounded-lg shadow-lg mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Dampak Sampah terhadap Lingkungan dan Kesehatan</h2>
                <p class="mb-6">Sampah, sebagai produk sisa dari aktivitas manusia, memiliki dampak yang signifikan terhadap lingkungan dan kesehatan jika tidak dikelola dengan baik. Dari pencemaran lingkungan hingga ancaman terhadap kesehatan masyarakat, berikut adalah penjelasan mengenai berbagai dampak yang ditimbulkan oleh sampah.</p>
    
                <h3 class="text-xl font-semibold text-gray-900 mb-2">1. Pencemaran Lingkungan</h3>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">a. Pencemaran Tanah</h4>
                <p class="mb-4">Sampah yang dibuang sembarangan dapat merusak kualitas tanah. Bahan kimia berbahaya yang terdapat pada sampah, seperti logam berat dan senyawa organik, dapat meresap ke dalam tanah dan mengganggu keseimbangan ekosistem.</p>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">b. Pencemaran Air</h4>
                <p class="mb-4">Limbah cair dari sampah yang tidak dikelola dengan baik dapat meresap ke dalam sumber air tanah atau mengalir ke sungai dan laut. Ini menyebabkan pencemaran air yang berdampak negatif pada flora dan fauna air, serta manusia yang mengonsumsi air tersebut.</p>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">c. Pencemaran Udara</h4>
                <p class="mb-4">Pembakaran sampah, terutama plastik, menghasilkan gas beracun seperti dioksin dan furan yang mencemari udara. Udara yang tercemar ini dapat menyebabkan gangguan pernapasan dan penyakit kronis lainnya.</p>
    
                <h3 class="text-xl font-semibold text-gray-900 mb-2">2. Dampak Terhadap Kesehatan Masyarakat</h3>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">a. Penyakit Menular</h4>
                <p class="mb-4">Tumpukan sampah menjadi tempat berkembang biak bagi vektor penyakit seperti lalat, nyamuk, dan tikus. Vektor ini dapat menyebarkan berbagai penyakit menular seperti demam berdarah, malaria, dan leptospirosis.</p>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">b. Gangguan Pernapasan</h4>
                <p class="mb-4">Sampah yang dibakar menghasilkan asap yang mengandung partikel berbahaya. Partikel ini dapat terhirup oleh manusia dan menyebabkan gangguan pernapasan seperti asma, bronkitis, dan penyakit paru-paru kronis.</p>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">c. Keracunan</h4>
                <p class="mb-6">Beberapa jenis sampah, terutama limbah elektronik dan bahan kimia, mengandung zat beracun seperti merkuri, timbal, dan kadmium. Zat-zat ini dapat menyebabkan keracunan jika masuk ke dalam rantai makanan melalui kontaminasi tanah dan air.</p>
    
                <h3 class="text-xl font-semibold text-gray-900 mb-2">3. Kerusakan Ekosistem</h3>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">a. Kehidupan Laut</h4>
                <p class="mb-4">Sampah plastik yang dibuang ke laut dapat merusak kehidupan laut karena sering kali dikira makanan oleh hewan laut. Plastik yang tertelan ini dapat menyebabkan kematian hewan-hewan tersebut.</p>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">b. Kehidupan Darat</h4>
                <p class="mb-6">Hewan darat terancam oleh sampah plastik dan bahan kimia berbahaya yang dapat merusak habitat alami mereka.</p>
    
                <h3 class="text-xl font-semibold text-gray-900 mb-2">4. Dampak Sosial dan Ekonomi</h3>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">a. Estetika dan Pariwisata</h4>
                <p class="mb-4">Sampah yang menumpuk di tempat-tempat umum merusak keindahan lingkungan dan mengurangi daya tarik wisata, berdampak negatif pada industri pariwisata dan ekonomi lokal.</p>
    
                <h4 class="text-lg font-semibold text-gray-900 mb-2">b. Biaya Pengelolaan</h4>
                <p class="mb-6">Pengelolaan sampah yang tidak efektif menimbulkan biaya tinggi bagi pemerintah dan masyarakat, termasuk biaya kesehatan akibat dampak negatif sampah.</p>
    
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Solusi Pengelolaan Sampah</h2>
                <ul class="list-disc pl-6 mb-6">
                    <li class="mb-2">Pengurangan Sampah: Mengurangi produksi sampah dengan cara memilih produk dengan kemasan minimal dan menggunakan barang yang dapat dipakai ulang.</li>
                    <li class="mb-2">Daur Ulang: Meningkatkan program daur ulang dan memisahkan sampah sesuai dengan jenisnya.</li>
                    <li class="mb-2">Pendidikan dan Kesadaran: Meningkatkan kesadaran masyarakat tentang pentingnya pengelolaan sampah yang baik melalui edukasi dan kampanye.</li>
                    <li class="mb-2">Inovasi Teknologi: Mengembangkan teknologi baru untuk mengelola dan mendaur ulang sampah secara lebih efisien.</li>
                    <li class="mb-2">Kebijakan dan Regulasi: Menerapkan kebijakan dan regulasi yang mendukung pengelolaan sampah yang berkelanjutan.</li>
                </ul>
                <p>Dengan langkah-langkah tersebut, kita dapat mengurangi dampak negatif sampah terhadap lingkungan dan kesehatan, serta menciptakan lingkungan yang lebih bersih dan sehat untuk generasi mendatang.</p>
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
