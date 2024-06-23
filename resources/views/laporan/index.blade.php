<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UNICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Add favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>GreenV | Website</title>
</head>
<body class="bg-gray-100" x-data="{ open: false, scrollY: 0, currentPath: '{{ url()->current() }}' }" @scroll.window="scrollY = window.scrollY">

    <div class="container mx-auto px-4">
        <!-- --------------- HEADER --------------- -->
        <nav id="header" :class="{ 'bg-opacity-70': scrollY > 50, 'bg-opacity-100': scrollY <= 50 }" class="fixed top-0 left-0 right-0 flex justify-between items-center backdrop-filter backdrop-blur-lg bg-opacity-80 h-24 py-4 transition-all duration-300 z-50 px-4 md:px-8">
            <div class="flex items-center space-x-4">
                <img src="{{asset('user/images/logo1.png')}}" class="w-12 h-12 mr-2" alt="Logo"/>
                <p class="text-3xl font-semibold text-gray-700">GreenV</p>
            </div>
            <div class="hidden md:flex flex-grow justify-center items-center space-x-8">
                <a href="{{url('/')}}" 
                   class="text-gray-600 hover:text-gray-800 font-medium" 
                   :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{url('/')}}' }">Home</a>
                <a href="{{url('/education')}}" 
                   class="text-gray-600 hover:text-gray-800 font-medium" 
                   :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{url('/education')}}' }">Education</a>
                <a href="{{url('/laporan')}}" 
                   class="text-gray-600 hover:text-gray-800 font-medium" 
                   :class="{ 'text-gray-900 font-semibold border-b-2 border-green-500': currentPath === '{{url('/laporan')}}' }">Report</a>
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
        </nav>

        <!-- Other sections go here -->
        <section class="bg-white dark:bg-gray-900">
            <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 relative mt-24">
                <div class="place-self-center mr-auto lg:col-span-7">
                    <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">GreenV Lini Masa</h1>
                    <p class="mb-6 max-w-2xl font-light text-black-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Jika Anda menemukan pelanggaran terkait dengan sampah plastik atau tempat penimbunan sampah plastik, silakan berikan laporan melalui formulir di bawah ini atau hubungi kami melalui:</p>
                <ul class="list-disc ml-8">
                    <li>Email: GreenV@gmail.com.</li>
                    <li>Telepon: 123-456-789.</li>
                </ul>
                <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Kami sangat menghargai partisipasi Anda dalam menjaga kebersihan lingkungan dan mengurangi sampah plastik.</p>
                </div>
                <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                    <img src="{{ asset('user/images/laporanPoster.png') }}" alt="mockup">
                </div>
            </div>
        </section>
        
        <section class="bg-gray-100 flex items-center justify-center h-screen mt-40 mb-40"> <!-- Increased margin-top here -->
            <div class="bg-gray-800 text-white p-8 rounded-lg shadow-md w-full max-w-lg">
                <h2 class="text-2xl font-bold mb-4">Laporan Baru</h2>
                <p class="mb-6">Silahkan isi data berikut</p>
                @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
                @endif

                @auth
                              <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium">Nama Pelapor</label>
                        <input type="text" id="nama" name="nama" class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white" placeholder="Masukkan nama anda" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium">Email Pelapor</label>
                        <input type="email" id="email" name="email" class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white" placeholder="Masukkan email anda" required>
                    </div>
                    <div class="mb-4">
                        <label for="nohp" class="block text-sm font-medium">No Hp Pelapor</label>
                        <input type="tel" id="nohp" name="nohp" class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white" placeholder="Masukkan no hp anda" required>
                    </div>
                    <div class="mb-4">
                        <label for="lokasi" class="block text-sm font-medium">Lokasi</label>
                        <input type="text" id="lokasi" name="lokasi" class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white" placeholder="Masukkan lokasi kejadian" required>
                    </div>
                    <div class="mb-4">
                        <label for="jenis" class="block text-sm font-medium">Jenis Kejadian</label>
                        <select id="jenis" name="jenis" class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white" required>
                            <option value="" disabled selected>Pilih jenis kejadian</option>
                            <!-- Add more options here -->
                               <option value="membuang sampah sembarangan">membuang sampah sembarangan</option>
                               <option value="pantai dipenuhi sampah">pantai dipenuhi sampah</option>
                               <option value="membuang limbah sembarangan">membuang limbah sembarangan</option>
                               <option value="penggundulan hutan">penggundulan hutan</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi" class="block text-sm font-medium">Deskripsi Kejadian</label>
                        <textarea id="deskripsi" name="deskripsi" class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white" rows="4" placeholder="Ceritakan kejadian dengan bahasa yang baik dan benar secara detail" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="bukti" class="block text-sm font-medium">Upload Bukti Foto</label>
                        <input type="file" id="bukti" name="bukti" class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white" required>
                    </div>
                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-green-600" required>
                            <span class="ml-2">Anda menyetujui bahwa anda menyertakan form berikut dengan jujur dan sesuai dengan hukum yang berlaku</span>
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md">Kirim</button>
                    </div>
                </form>
                @else
                <p class="text-red-500">Anda harus <a href="{{ route('auth.login') }}" class="underline">login</a> terlebih dahulu untuk membuat laporan.</p>
                @endauth
            </div>
        </section>
                <!-- Postingan -->
<section class="bg-gray-100">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Mulai Loop untuk Setiap Postingan -->
            @foreach ($laporans as $laporan)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('storage/images/' . $laporan->bukti) }}" alt="Lokasi Kejadian" class="w-full h-40 object-cover object-center">
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">Lokasi: {{ $laporan->lokasi }}</h2>
                    <p class="text-gray-600">deskripsi kejadian: {{ $laporan->deskripsi }}</p>
                </div>
            </div>
            @endforeach
            <!-- Selesai Loop untuk Setiap Postingan -->
        </div>
    </div>
</section>
    </div>

    <!-- Alpine.js for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>
