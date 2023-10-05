var tanggalLahirInput = document.getElementById('tanggal_lahir');
    var umurInput = document.getElementById('umur');

    // Mendengarkan perubahan pada input tanggal lahir
    tanggalLahirInput.addEventListener('change', function () {
        // Mendapatkan tanggal lahir dari input
        var tanggalLahir = new Date(tanggalLahirInput.value);
        
        // Mendapatkan tanggal hari ini
        var hariIni = new Date();

        // Menghitung umur
        var umur = hariIni.getFullYear() - tanggalLahir.getFullYear();

        // Jika belum ulang tahun, kurangi satu tahun dari umur
        if (
            hariIni.getMonth() < tanggalLahir.getMonth() ||
            (hariIni.getMonth() === tanggalLahir.getMonth() && hariIni.getDate() < tanggalLahir.getDate())
        ) {
            umur--;
        }

        // Menyimpan umur ke dalam input umur
        umurInput.value = umur;
    });