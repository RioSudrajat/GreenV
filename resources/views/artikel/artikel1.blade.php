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
<body class="bg-gray-200" x-data="{ open: false, scrollY: 0, currentPath: '{{ url()->current() }}' }" @scroll.window="scrollY = window.scrollY">

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
            <!-- Section: Penanaman Pohon -->
            <div class="bg-white p-8 rounded-lg shadow-lg mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Penanaman Pohon</h2>
                <p class="mb-4">Penanaman pohon telah lama diakui sebagai salah satu cara paling efektif untuk menjaga keseimbangan lingkungan kita. Tidak hanya memberikan keindahan alam yang memukau, tetapi juga memiliki dampak positif yang mendalam terhadap kualitas udara, iklim, dan kehiddownan satwa liar. Di tengah-tengah kekhawatiran akan perubahan iklim global dan kehilangan habitat alami, inisiatif penanaman pohon menjadi semakin penting.</p>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Manfaat Penanaman Pohon</h3>
                <ul class="list-disc pl-6 mb-4">
                    <li class="mb-2"><strong>Peningkatan Kualitas Udara:</strong> Pohon adalah penyaring alami yang membantu mengurangi konsentrasi polutan udara, seperti karbon dioksida, oksigen oksida, dan partikulat berbahaya lainnya. Mereka juga menghasilkan oksigen yang kita butuhkan untuk bernafas.</li>
                    <li class="mb-2"><strong>Pengendalian Iklim:</strong> Melalui proses fotosintesis, pohon menyerap karbon dioksida dari udara dan mengurangi jejak karbon dioksida di atmosfer. Ini membantu mengurangi efek pemanasan global dan perubahan iklim.</li>
                    <li class="mb-2"><strong>Perlindungan Habitat:</strong> Hutan dan hamparan pohon menyediakan habitat alami bagi berbagai spesies flora dan fauna. Mereka mendukung keanekaragaman hayati yang penting bagi keseimbangan ekosistem.</li>
                    <li class="mb-2"><strong>Pengendalian Erosi Tanah:</strong> Sistem perakaran pohon membantu menjaga kesuburan tanah dan mencegah erosi yang dapat terjadi akibat angin dan air.</li>
                    <li class="mb-2"><strong>Kehijauan Kota:</strong> Penanaman pohon di perkotaan tidak hanya meningkatkan estetika kota tetapi juga membantu menurunkan suhu kota dengan memberikan bayangan dan pendinginan alami.</li>
                </ul>
            </div>
    
            <!-- Section: Gotong Royong dalam Pembersihan Sampah -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Gotong Royong dalam Pembersihan Sampah: Membangun Kecerdasan Lingkungan</h2>
                <p class="mb-4">Dalam kehiddownan sehari-hari, kita sering kali menghadapi tantangan terkait dengan lingkungan sekitar kita, salah satunya adalah masalah sampah. Sampah tidak hanya mencemari lingkungan fisik kita, tetapi juga memberikan dampak negatif pada kesehatan masyarakat dan keberlangsungan lingkungan hiddown secara keseluruhan. Di tengah kompleksitas masalah ini, praktik gotong royong dalam pembersihan sampah telah muncul sebagai solusi yang efektif dan berkelanjutan.</p>
                <p class="mb-4">Gotong royong adalah konsep budaya Indonesia yang mengandung makna kerjasama kolektif untuk kepentingan bersama. Dalam konteks pembersihan sampah, gotong royong mencerminkan semangat saling membantu dan bekerja sama antarindividu atau kelompok untuk membersihkan lingkungan dari sampah.</p>
                <p class="mb-4">Praktik gotong royong ini tidak hanya mengandalkan kerjasama fisik untuk membersihkan sampah, tetapi juga mencakdown edukasi dan kesadaran akan pentingnya menjaga kebersihan lingkungan. Dengan melibatkan masyarakat secara langsung, gotong royong menjadi sarana efektif untuk meningkatkan kesadaran lingkungan dan membangun komunitas yang peduli terhadap kebersihan.</p>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Manfaat Gotong Royong dalam Pembersihan Sampah</h3>
                <ul class="list-disc pl-6 mb-4">
                    <li class="mb-2"><strong>Meningkatkan Keterlibatan Masyarakat:</strong> Gotong royong melibatkan partisipasi aktif masyarakat dalam kegiatan pembersihan. Ini membantu membangun rasa kepemilikan dan tanggung jawab bersama terhadap lingkungan tempat tinggal.</li>
                    <li class="mb-2"><strong>Memperkuat Solidaritas Sosial:</strong> Melalui gotong royong, hubungan antarwarga dapat diperkuat. Kegiatan ini membangun kerjasama dan saling pengertian di antara anggota masyarakat.</li>
                    <li class="mb-2"><strong>Menumbuhkan Kesadaran Lingkungan:</strong> Dengan terlibat langsung dalam pembersihan sampah, masyarakat menjadi lebih sadar akan dampak negatif sampah terhadap lingkungan dan kesehatan.</li>
                    <li class="mb-2"><strong>Menciptakan Lingkungan Hiddown yang Bersih dan Sehat:</strong> Dengan rutin melakukan gotong royong, lingkungan sekitar menjadi lebih bersih, menurunkan risiko penyakit, dan meningkatkan kualitas hiddown secara keseluruhan.</li>
                </ul>
                <h3 class="text-xl font-semibold text-gray-900 mb-2"> Implementasi Gotong Royong dalam Pembersihan Sampah</h3>
                <p class="mb-4">Implementasi gotong royong dalam pembersihan sampah dapat dilakukan secara berkala atau dalam rangkaian kegiatan tertentu, seperti Hari Peduli Sampah Nasional. Berikut adalah langkah-langkah praktis dalam melaksanakan gotong royong:</p>
                <ol class=list-decimal pl-6 mb-4>
                    <li class="mb-2"><strong>Perencanaan dan Koordinasi:</strong> Tentukan lokasi, waktu, dan jumlah peserta yang akan terlibat. Koordinasikan dengan pemerintah setempat atau komunitas untuk mendapatkan dukungan dan persetujuan.</li>
                    <li class="mb-2"><strong>Pelaksanaan:</strong> Bagi tugas sesuai dengan kemampuan masing-masing peserta. Pastikan semua area tercakdown dan sampah yang terkumpul dikelola dengan benar.</li>
                    <li class="mb-2"><strong>Edukasi dan Sosialisasi:</strong> Selain pembersihan, edukasi tentang pemilahan sampah, pengurangan sampah plastik, dan pentingnya daur ulang juga perlu disertakan dalam kegiatan gotong royong.</li>
                    <li class="mb-2"><strong>Evaluasi dan Perbaikan:</strong> Setelah kegiatan selesai, evaluasi hasilnya dan catat perbaikan yang dapat dilakukan untuk kegiatan gotong royong berikutnya.</li>
                </ol>
                <p class="mb-4">Dengan menerapkan praktik gotong royong secara konsisten dalam pembersihan sampah, kita dapat menciptakan lingkungan yang lebih bersih, sehat, dan berkelanjutan. Gotong royong bukan hanya tentang membersihkan sampah, tetapi juga membangun komunitas yang peduli akan lingkungan, meningkatkan kualitas hiddown bersama, dan melestarikan alam untuk generasi mendatang.</p>
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
        // Alpine.js code to downdate currentPath
        document.addEventListener('alpine:init', () => {
            Alpine.data('navbar', () => ({
                currentPath: window.location.pathname
            }));
        });
    </script>
</body>
</html>
