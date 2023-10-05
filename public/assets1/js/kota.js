
  fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
      .then(response => response.json())
      .then(provinces => {
          var data = provinces;
          var tampung = `<option>Provinsi</option>`;
          data.forEach(element => {
              tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
          });
          document.getElementById('provinsi').innerHTML = tampung;
      });

  const selectProvinsi = document.getElementById('provinsi');
  selectProvinsi.addEventListener('change', (e)=>{
      var provinsi = e.target.options[e.target.selectedIndex].dataset.reg;
      fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
      .then(response => response.json())
      .then(regencies => {
          var data = regencies;
          var tampung = `<option>Kabupaten/Kota</option>`;
          document.getElementById('kota').innerHTML = '<option>Kabupaten/Kota</option>';
          document.getElementById('kecamatan').innerHTML = '<option>Kecamatan</option>';
          data.forEach(element => {
              tampung += `<option data-dist="${element.id}" value="${element.name}">${element.name}</option>`;
          });
          document.getElementById('kota').innerHTML = tampung;
      });
  });

  const selectKota = document.getElementById('kota');
  selectKota.addEventListener('change', (e)=>{
      var kota = e.target.options[e.target.selectedIndex].dataset.dist;
      fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/districts/${kota}.json`)
      .then(response => response.json())
      .then(districts => {
          var data = districts;
          var tampung = `<option>Kecamatan</option>`;
          var tampung1 = `<option>KUA</option>`;
          document.getElementById('kecamatan').innerHTML = '<option>Kecamatan</option>';
          document.getElementById('kua').innerHTML = '<option>KUA</option>';
          data.forEach(element => {
              tampung += `<option data-vill="${element.id}" value="${element.name}">${element.name}</option>`;
              tampung1 += `<option data-vill="${element.id}" value="KUA ${element.name}">KUA ${element.name}</option>`;
          });
          document.getElementById('kecamatan').innerHTML = tampung;
          document.getElementById('kua').innerHTML = tampung1;
        });
      });