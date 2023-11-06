<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeText() {
            var span = document.getElementById("output"); //mengambil objek dari "output"
            var textBox = document.getElementById("textbox"); //ngambil objek dari "textbox", harus dapatkan dulu baru bisa diutak atik

            textBox.style.color = "turquoise"; //ngubah DOM CSS
            span.innerHTML = textBox.value; //baca isi "textbox", ubah tulisan non input
        }
    </script>

</head>

<body>
    <div class="container">
        <script>
            function showAlert() {
                alert("banana");
            }
        </script>
        <button class="btn btn-info" onclick="showAlert();">Klik Po o</button>
        <br>

        <button onclick="changeText();" class="btn btn-info">Click me!</button>
        <span id="output">replace me</span>
        <input class="form-control" id="textbox" type="text" />


    </div>
</body>

</html>
