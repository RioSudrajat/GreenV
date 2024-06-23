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
        <div class="container mx-auto py-8 px-4 relative mt-16" data-aos="fade-down">
            <!-- Article Container -->
            <article class="bg-white p-6 rounded-lg shadow-lg mb-8">
                 <!-- Article Title -->
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Perusakan Lingkungan Laut: Dampak dari Sampah</h1>
            
            <!-- Introduction -->
            <section class="mb-6">
                <p class="mb-4">Lingkungan laut merupakan ekosistem yang vital bagi kehidupan di bumi, menyediakan berbagai sumber daya alam, mengatur iklim, dan mendukung keanekaragaman hayati. Namun, sampah, khususnya sampah plastik, telah menjadi ancaman serius bagi kelestarian laut. Artikel ini akan membahas perusakan lingkungan laut akibat sampah, dampaknya pada ekosistem dan manusia, serta solusi yang dapat diterapkan untuk mengurangi permasalahan ini.</p>
            </section>
                <!-- Section 1: Skala Masalah Sampah di Laut -->
                <section class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Skala Masalah Sampah di Laut</h2>
                    <p class="mb-4">Setiap tahun, sekitar 8 juta ton sampah plastik berakhir di lautan, menjadikannya salah satu masalah lingkungan terbesar saat ini. Sampah laut berasal dari berbagai sumber, termasuk limbah domestik, industri, pariwisata, dan perikanan. Plastik merupakan komponen utama dari sampah laut karena daya tahannya yang tinggi dan penggunaannya yang meluas dalam kehidupan sehari-hari.</p>
                </section>
    
                <!-- Section 2: Dampak Sampah pada Ekosistem Laut -->
                <section class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Dampak Sampah pada Ekosistem Laut</h2>
                    <ul class="list-disc pl-6 mb-4">
                        <li class="mb-2"><strong>Kerusakan Habitat:</strong> Sampah plastik dapat merusak habitat laut seperti terumbu karang dan padang lamun. Plastik yang menutupi terumbu karang dapat menghalangi sinar matahari dan mengganggu fotosintesis alga yang merupakan sumber makanan bagi banyak organisme laut.</li>
                        <li class="mb-2"><strong>Ancaman bagi Satwa Laut:</strong> Banyak hewan laut, termasuk ikan, burung laut, dan mamalia, tertelan atau terjerat sampah plastik. Penyu laut sering kali mengira kantong plastik sebagai ubur-ubur, makanan utamanya, yang dapat menyebabkan sumbatan di saluran pencernaannya dan kematian. Burung laut dan ikan juga terjerat oleh jaring ikan yang dibuang sembarangan.</li>
                        <li class="mb-2"><strong>Penyebaran Polutan:</strong> Plastik di laut bukan hanya masalah fisik tetapi juga kimia. Plastik dapat menyerap polutan berbahaya seperti pestisida dan logam berat. Ketika hewan laut menelan plastik ini, racun tersebut masuk ke rantai makanan, membahayakan hewan laut dan manusia yang mengonsumsinya.</li>
                    </ul>
                </section>
    
                <!-- Section 3: Dampak Sampah Laut pada Manusia -->
                <section class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Dampak Sampah Laut pada Manusia</h2>
                    <ul class="list-disc pl-6 mb-4">
                        <li class="mb-2"><strong>Kesehatan Masyarakat:</strong> Mikroplastik, partikel kecil hasil degradasi plastik, telah ditemukan dalam air minum dan makanan laut. Konsumsi mikroplastik dapat membawa dampak negatif pada kesehatan manusia, meskipun penelitian lebih lanjut masih diperlukan untuk memahami sepenuhnya implikasinya.</li>
                        <li class="mb-2"><strong>Ekonomi:</strong> Industri pariwisata dan perikanan sangat bergantung pada kelestarian laut. Sampah laut merusak keindahan pantai dan laut, mengurangi daya tarik wisata. Selain itu, penurunan populasi ikan akibat polusi plastik dapat mengancam mata pencaharian nelayan.</li>
                    </ul>
                </section>
    
                <!-- Section 4: Solusi untuk Mengatasi Sampah Laut -->
                <section class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Solusi untuk Mengatasi Sampah Laut</h2>
                    <ul class="list-disc pl-6 mb-4">
                        <li class="mb-2"><strong>Pengurangan Penggunaan Plastik:</strong> Mengurangi penggunaan plastik sekali pakai dan menggantinya dengan bahan yang lebih ramah lingkungan adalah langkah penting. Kampanye pengurangan penggunaan kantong plastik dan sedotan plastik telah dilakukan di berbagai negara dengan hasil yang positif.</li>
                        <li class="mb-2"><strong>Pengelolaan Sampah yang Efektif:</strong> Meningkatkan sistem pengelolaan sampah di darat untuk mencegah sampah masuk ke laut. Ini termasuk pemilahan sampah, daur ulang, dan pengolahan sampah yang lebih baik.</li>
                        <li class="mb-2"><strong>Edukasi dan Kesadaran Masyarakat:</strong> Meningkatkan kesadaran masyarakat tentang dampak sampah laut melalui kampanye edukasi dan program pendidikan lingkungan. Kesadaran ini dapat mendorong perilaku yang lebih bertanggung jawab dalam membuang sampah.</li>
                        <li class="mb-2"><strong>Kolaborasi Internasional:</strong> Masalah sampah laut adalah isu global yang memerlukan kerjasama antarnegara. Negara-negara perlu bekerja sama untuk mengurangi polusi laut melalui perjanjian internasional dan praktek pengelolaan sampah yang berkelanjutan.</li>
                        <li class="mb-2"><strong>Inovasi Teknologi:</strong> Mengembangkan teknologi baru untuk mengumpulkan dan mengolah sampah plastik di laut. Misalnya, beberapa proyek inovatif seperti The Ocean Cleanup telah berhasil mengumpulkan sampah plastik di beberapa bagian laut.</li>
                    </ul>
                </section>
            </article>
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
