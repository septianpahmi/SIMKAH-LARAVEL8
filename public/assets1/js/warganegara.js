    var warganegaraSelect = document.getElementById('warganegara');
    var negaraAsalInput = document.getElementById('negara_asal');
    var pasporInput = document.getElementById('paspor');

    // Mendengarkan perubahan pada elemen "Warga Negara"
    warganegaraSelect.addEventListener('change', function () {
        // Jika pilihan "WNI" dipilih, nonaktifkan Negara Asal dan No. Paspor
        if (warganegaraSelect.value === 'WNI') {
            negaraAsalInput.disabled = true;
            pasporInput.disabled = true;
        } else {    
            // Jika pilihan "WNA" atau yang lain dipilih, aktifkan kembali
            negaraAsalInput.disabled = false;
            pasporInput.disabled = false;
        }
    });