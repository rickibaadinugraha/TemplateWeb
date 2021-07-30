function tambah() {
        var bil1 = parseFloat(document.fform.nil1.value);

        var bil2 = parseFloat(document.fform.nil2.value);

        var hasil = bil1 + bil2;

        document.fform.hasil.value = hasil;
      }

      function kurang() {
        var bil1 = parseFloat(document.fform.nil1.value);

        var bil2 = parseFloat(document.fform.nil2.value);

        var hasil = bil1 - bil2;

        document.fform.hasil.value = hasil;
      }

      function bagi() {
        var bil1 = parseFloat(document.fform.nil1.value);

        var bil2 = parseFloat(document.fform.nil2.value);

        var hasil = bil1 / bil2;

        document.fform.hasil.value = hasil;
      }

      function kali() {
        var bil1 = parseFloat(document.fform.nil1.value);

        var bil2 = parseFloat(document.fform.nil2.value);

        var hasil = bil1 * bil2;

        document.fform.hasil.value = hasil;
      }

      function mod() {
        var bil1 = parseFloat(document.fform.nil1.value);

        var bil2 = parseFloat(document.fform.nil2.value);

        var hasil = bil1 % bil2;

        document.fform.hasil.value = hasil;
      }