<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/operasi.js') }}"></script>

      <script>
        function validateForm(){
            console.log("ini baris 14");
            return false; //dimanapun ketemu return, akan exit function
            //perintah di bawahnya gaakan dijalankan.
            console.log("ini baris 16");
            return true; //dalam 1 function bisa lebih dari 1 return
            console.log("ini baris 18");
        }

        function validate(){
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");
            var nrp = document.getElementById("nrp");

            if(bil1.value == "" && bil2.value == "") //jika keduanya tidak ada isinya
            //bisa pake if((bil1.value && bil2.value) =="")
            {
                alert("Bilangan 1 & 2 harus diisi");
                return false; }

            else if(bil1.value == "") //jika bil 1 tidak ada isinya
            {
                alert("Bilangan 1 harus diisi");
                bil1.focus();
                return false; }

            else if(bil2.value == "") //jika bil 2 tidak ada isinya
            {
                alert("Bilangan 2 harus diisi");
                bil2.focus();
                bil2.placeholder = "isiii ya";
                return false; }

            else if(nrp.value == "" ) {
                alert("NRP harus diisi");
                return false; }

            else if (isNaN(parseInt(nrp.value))) {
            alert("NRP harus berisi hanya angka");
            nrp.value = "";
            return false; }

            else if(nrp.value.length !== 10 ) {
                alert("NRP harus 10 digit");
                return false; }

            else
            { return true; } //ini gaperlu gpp karena kalo ga diapa-apain otomatis true
        }

         </script>
    </head>

    <body>
        <div class="container">
            <form action="https://www.google.com" method="post" onsubmit="return validate();">
                <div class="form-group">
                    <label for="bil1"> Bilangan 1</label>
                    <input type="number" id="bil1" placeholder="Harus Diisi" class="form-control">
                </div>

                <div class="form-group">
                    <label for="bil2"> Bilangan 2</label>
                    <input type="number" id="bil2" placeholder="Harus Diisi" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nrp"> NRP</label>
                    <input type="text" id="nrp" placeholder="Harus Diisi 10 angka" class="form-control">
                </div>

                <input type="submit" value="KIRIM" class="btn btn-primary">
            </form>
        </div>
    </body>
</html>
