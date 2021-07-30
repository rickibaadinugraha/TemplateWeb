    function sent() 
  { 
    var nama= document.getElementById('nama').value;
    display_nama.value= nama;
    var nim= document.getElementById('nim').value;
    display_nim.value= nim; 
    var jurusan= document.getElementById('jurusan').value;
    display_jurusan.value= jurusan;

    var kelamin= document.querySelector('input[name="jk"]:checked').value;
    console.log(kelamin);
    display_kelamin.value=kelamin;

    var agama= document.getElementById('agama').value;
    display_agama.value= agama;
    var telepon= document.getElementById('telepon').value; 
    display_telepon.value= telepon;
    var alamat= document.getElementById('alamat').value;
    display_alamat.innerHTML= alamat; 
    return false;
  }
