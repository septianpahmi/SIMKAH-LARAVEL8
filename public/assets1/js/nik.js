var nikInput = document.getElementById('nik');
    var cekNikButton = document.getElementById('cek_nik_button');
    var nikResultDiv = document.getElementById('nik_result');

    // Menambahkan event listener ke tombol "CEK NIK"
    cekNikButton.addEventListener('click', function () {
        var nik = nikInput.value;
        
        // Lakukan validasi NIK di sini
        // Anda bisa melakukan HTTP request ke API atau layanan yang validasi NIK
        // Contoh sederhana untuk tujuan demonstrasi
        if (/^\d{16}$/.test(nik)) {
            nikResultDiv.textContent = 'NIK valid.';
        } else {
            nikResultDiv.textContent = 'NIK tidak valid.';
        }
    });