document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    
    // Fungsi khusus untuk menciptakan Modal Alert bergaya macOS Pro App secara dinamis
    const showMacOSErrorAlert = (message) => {
        // 1. Membuat overlay latar belakang gelap transparan + blur
        const overlay = document.createElement('div');
        overlay.className = 'fixed inset-0 bg-slate-950/25 backdrop-blur-[2px] flex items-center justify-center z-50 animate-fade-in';
        
        // 2. Membuat box alert dengan spesifikasi komponen Apple Pro Dialog
        const alertBox = document.createElement('div');
        alertBox.className = 'bg-white/90 backdrop-blur-2xl w-[280px] sm:w-[320px] p-5 rounded-2xl shadow-[0_20px_60px_rgba(0,0,0,0.3)] border border-white/50 text-center flex flex-col items-center animate-mac-scale';
        
        // Structure komponen internal modal: Ikon Warning Apple + Teks San Francisco + Button
        alertBox.innerHTML = `
            <div class="w-12 h-12 rounded-xl bg-amber-500 flex items-center justify-center shadow-sm mb-3">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            <h3 class="text-[15px] font-bold text-slate-900 tracking-tight mb-1" style="font-family: -apple-system, BlinkMacSystemFont, sans-serif;">Perhatian Required</h3>
            <p class="text-[12.5px] text-slate-600 font-semibold leading-normal px-2 mb-5" style="font-family: -apple-system, BlinkMacSystemFont, sans-serif;">${message}</p>
            
            <button id="btnDismissMacAlert" class="w-full bg-[#0071e3] hover:bg-[#0077ed] text-white text-[13px] font-bold py-2 px-4 rounded-xl shadow-sm transition-all duration-150 active:scale-[0.98] active:brightness-95">
                Acknowledge
            </button>
        `;
        
        overlay.appendChild(alertBox);
        document.body.appendChild(overlay);
        
        // Event listener untuk memusnahkan komponen alert dari DOM saat tombol diklik
        document.getElementById('btnDismissMacAlert').focus();
        document.getElementById('btnDismissMacAlert').addEventListener('click', () => {
            alertBox.classList.add('opacity-0', 'scale-95');
            alertBox.style.transition = 'all 0.15s ease-out';
            setTimeout(() => overlay.remove(), 150);
        });
    };

    // Handler validasi submit engine
    form.addEventListener('submit', (event) => {
        const isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        
        if (!isChecked) {
            event.preventDefault(); // Gagalkan submit form ke backend.php
            
            // Panggil fungsi modal alert macOS Pro yang super clean
            showMacOSErrorAlert('Sistem mendeteksi deviasi parameter. Mohon pilih minimal satu gejala klinis sebelum menjalankan mesin inferensi.');
        }
    });
});