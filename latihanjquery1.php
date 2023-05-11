<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <button class="btn btn-primary btn-hilang">Tombol 1</button>
    <button class="btn btn-success btn-muncul">Tombol 2</button>
    <button class="btn btn-warning btn-toggle">Tombol 3</button>
<!-- primarry warning success adalah bahasa dr bootstrap css yg berarti warna, untuk btn hilang muncul dn toogle itu nama bebas ya, si btn muncul agar media mucul, hilang ya utk hilang toggle untuk keduanya -->
    <h1>
        ini teks satu
    </h1>
    <!-- jqury adalah versi salah satu framework di javascript sama kek bootstrap kalo boottrap kan framework css, dan bisa di gabung juga ya penggunaanya scr bersamaan sesuai yg di bawah -->
<script src="bootstrap-5.1.3-dist/js/jquery-3.6.4.min.js"></script>
<!-- diatas adalah file import jquery dan js -->
<script>
    $(Document).ready(function(){
        function getdata() {
        console.log("form telah disubmit");
    })
    $("form").submit(function(even){
        console.log("form telah disubmit");
    })
       $(".btn-hilang").click(function(){
        // $("h1").hide();
        // $("h1").fadeOut();
        $("h1").slideUp(5000);

        })
            $(".btn-muncul").click(function(){
            // $("h1").show();
            // $("h1").slideIn();
            $("h1").slideDown();

            })
                $(".btn-toggle").click(function(){
                $("h1").slideToggle(1000);

                })
    })
    // $ di sebutnya fungsi
</script>
</body>
</html>