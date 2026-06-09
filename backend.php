<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosis — macOS Developer Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-cover bg-center min-h-screen flex items-center justify-center p-3 sm:p-6 md:p-8 relative select-none antialiased text-slate-900" style="background-image: url('assets/img/background.jpg');">

    <div class="absolute inset-0 bg-slate-950/15 backdrop-blur-[2px]"></div>

    <div class="bg-[#f5f5f7]/85 backdrop-blur-3xl rounded-2xl shadow-[0_35px_90px_rgba(0,0,0,0.45)] w-full max-w-4xl border border-white/40 animate-fade-in relative z-10 overflow-hidden flex flex-col min-h-[580px]">
        
        <div class="flex items-center h-12 px-5 border-b border-black/[0.06] bg-white/40 relative flex-shrink-0">
            <div class="flex space-x-2 absolute left-5">
                <div class="w-3 h-3 rounded-full bg-[#ff5f56] border border-[#e0443e]"></div>
                <div class="w-3 h-3 rounded-full bg-[#ffbd2e] border border-[#dea123]"></div>
                <div class="w-3 h-3 rounded-full bg-[#27c93f] border border-[#1aab29]"></div>
            </div>
            <div class="w-full text-center text-[12px] font-semibold text-slate-500 tracking-wide font-apple-system">SistemPakar—Sawit.app — Console Output</div>
        </div>

        <div class="flex flex-col md:flex-row flex-grow overflow-hidden">
            
            <div class="w-full md:w-[280px] bg-white/20 p-6 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r border-black/[0.05] text-center flex-shrink-0">
                <div class="relative group mb-4">
                    <div class="absolute -inset-2 bg-gradient-to-r pointer-events-none from-emerald-500 to-teal-500 rounded-full blur opacity-25 group-hover:opacity-40 transition duration-700 logo-glow-container"></div>
                    <img src="assets/img/logo.png" alt="Logo Sawit" class="relative h-20 w-20 object-cover rounded-full shadow-md border-4 border-white z-10">
                </div>
                
                <h2 class="text-lg font-bold text-slate-900 tracking-tight font-apple-system mb-1">Expert System</h2>
                <p class="text-[12px] font-semibold text-emerald-800 tracking-wider uppercase mb-6 bg-emerald-500/10 px-2 py-0.5 rounded-md border border-emerald-500/20 font-mono-unix">v1.0.0-stable</p>
                
                <div class="w-full space-y-2 text-left bg-black/[0.03] p-3 rounded-xl border border-black/[0.02]">
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="font-medium text-slate-500 font-apple-system">ENGINE:</span>
                        <span class="font-bold text-slate-700 font-mono-unix">FORWARD_CHAINING</span>
                    </div>
                    <div class="flex justify-between items-center text-[11px]">
                        <span class="font-medium text-slate-500 font-apple-system">STATUS:</span>
                        <span class="font-bold text-blue-700 font-mono-unix">EXECUTION_DONE</span>
                    </div>
                </div>
            </div>

            <div class="flex-grow p-6 md:p-8 flex flex-col justify-between overflow-y-auto">
                <div>
                    <div class="mb-6">
                        <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight font-apple-system mb-1">Hasil Analisis Pakar</h1>
                        <p class="text-[13px] text-slate-500 font-medium font-apple-system">Berikut adalah kesimpulan medikasi berdasarkan kalkulasi penalaran logika mesin.</p>
                    </div>

                    <?php
                    // 1. Ambil data gejala dari form
                    $gejala_input = isset($_POST['gejala']) ? $_POST['gejala'] : [];

                    // Validasi jika kosong
                    if (empty($gejala_input)) {
                        echo '<div class="bg-red-500/10 border border-red-500/20 text-red-900 p-5 rounded-xl mb-6 font-apple-system text-[14px] font-semibold">';
                        echo '<strong>Peringatan Sistem:</strong> Tidak ada parameter gejala yang dikirimkan untuk dieksekusi.';
                        echo '</div>';
                        echo '<a href="index.html" class="inline-block bg-slate-800 hover:bg-slate-900 text-white text-[14px] font-bold py-3 px-6 rounded-xl transition-all duration-200">Kembali ke Workspace</a>';
                        echo '</div></div></div></div></body></html>';
                        exit;
                    }

                    // 2. Fungsi inferensi Forward Chaining
                    function cek_rule($syarat_rule, $input_user) {
                        $cocok = array_intersect($syarat_rule, $input_user);
                        return count($cocok) === count($syarat_rule);
                    }

                    // 3. Nilai Default (Skenario Tidak Dikenali seperti gambar user)
                    $nama_penyakit = "Penyakit Tidak Dikenali / Gejala Kurang Spesifik";
                    $solusi = "Mohon amati kembali gejala fisik tanaman secara lebih spesifik, atau segera lakukan konsultasi langsung dengan mantri perkebunan / dinas pertanian terdekat.";
                    $status_ditemukan = false;

                    // 4. Aturan Produksi (Rule Base)
                    if (cek_rule(['G02', 'G03', 'G04'], $gejala_input)) {
                        $nama_penyakit = "Ganoderma (Busuk Pangkal Batang)";
                        $solusi = "Lakukan isolasi tanaman dengan membuat parit di sekeliling pohon (2x2 meter). Segera lakukan eradikasi (pembongkaran) tanaman yang sudah mati total dan musnahkan sisa bonggolnya agar spora jamur tidak menyebar melalui kontak akar tanaman sehat.";
                        $status_ditemukan = true;
                    } 
                    elseif (cek_rule(['G01', 'G02'], $gejala_input)) {
                        $nama_penyakit = "Spear Rot (Busuk Pucuk)";
                        $solusi = "Potong bagian jaringan pucuk yang membusuk secara presisi sampai batas jaringan yang benar-benar sehat, kemudian segera aplikasikan fungisida sistemik berbahan aktif tembaga tepat pada bekas potongan.";
                        $status_ditemukan = true;
                    }
                    elseif (cek_rule(['G05', 'G06'], $gejala_input)) {
                        $nama_penyakit = "Curvularia (Bercak Daun)";
                        $solusi = "Lakukan penyemprotan fungisida secara merata pada seluruh permukaan daun terinfeksi. Rekomendasikan perbaikan sistem drainase di sekitar area penanaman atau pembibitan guna menurunkan kelembapan makro.";
                        $status_ditemukan = true;
                    }

                    // 5. Konfigurasi Gaya Komponen secara Dinamis (Adaptif)
                    // Jika teridentifikasi memakai aksen Emerald, jika tidak memakai aksen Amber/Gold premium
                    $box_gaya = $status_ditemukan 
                        ? 'bg-emerald-500/10 border-emerald-500/20 text-emerald-950' 
                        : 'bg-amber-500/10 border-amber-500/25 text-amber-950';
                    
                    $label_status_gaya = $status_ditemukan ? 'text-emerald-800' : 'text-amber-800';
                    ?>

                    <div class="border rounded-xl p-5 md:p-6 <?php echo $box_gaya; ?> shadow-[0_4px_12px_rgba(0,0,0,0.02)] backdrop-blur-sm">
                        <div class="text-[11px] font-bold uppercase tracking-wider <?php echo $label_status_gaya; ?> font-mono-unix mb-2">
                            [ STATUS_IDENTIFICATION ]
                        </div>
                        <h2 class="text-xl font-extrabold font-apple-system mb-4 tracking-tight">
                            <?php echo $nama_penyakit; ?>
                        </h2>
                        
                        <div class="text-[11px] font-bold uppercase tracking-wider <?php echo $label_status_gaya; ?> font-mono-unix mb-2">
                            [ TARGETED_SOLUTION ]
                        </div>
                        <p class="text-[14px] leading-relaxed font-semibold font-apple-system opacity-90">
                            <?php echo $solusi; ?>
                        </p>
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <a href="index.html" class="w-full md:w-auto text-center bg-[#0071e3] hover:bg-[#0077ed] text-white text-[14px] font-bold py-3 px-6 rounded-xl shadow-sm transition-all duration-200 active:scale-[0.985] font-apple-system">
                        Diagnosis Ulang
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>