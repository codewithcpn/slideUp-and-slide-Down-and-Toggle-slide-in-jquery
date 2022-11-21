<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-warning mt-5">
    <div class="container py-3 px-3">
        <h2 class="py-3 px-3">jQuery Effects - Sliding</h2>
        <hr style="width:66%">
        <div class="row mt-5" id="box">
            <div class="col-md-8 bg-white border border-primary py-5 px-5">
                <h1>Hi, Are You Developer!</h1>
                <p class="text-danger">Hey, Yes, I am Full-Stack Developer!</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8">
                <p class="btn btn-danger" id="btnslideup">Slide Up</p>
                <p class="btn btn-danger" id="btnslidedown">Slide Down</p>
                <p class="btn btn-danger" id="btnslidetoggle">Up/Down</p>
                <p class="text-end text-secondary"><b> <span class="text-danger">code by</span> -
                        codewithcpn</b></p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $("#btnslideup").click(function() {
            $("#box").slideUp();
        });
        $("#btnslidedown").click(function() {
            $("#box").slideDown();
        });
        $("#btnslidetoggle").click(function() {
            $("#box").slideToggle();
        });
    });
    </script>
</body>


</html>
