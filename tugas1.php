<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <!-- bootstrap intinya suatu sistem yang memiliki rule sendiri yg mencakup css dam js, dengan tujuan agar lebih simple dan efisien dalam coding namun ingat tetap mengikuti rule yg ada yg bisa diliat di web bootstrap -->
    <div class="container mt-3">
        <!-- diatas adalah carapenulisan di bootstrap dengan menambahkn ===an class bedanya di situ dari tugas yg sebelumnya yg bu nilam, dan juga ada bahasa rules sendiri spt mt 3 yaitu margin top -->
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Form Pendaftaran</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                        <!-- Ini akan berisi halaman form-->
                        <div class="form-floating mb-1">
                            <input type="text" name="nama" class="form-control" id="fiNama" placeholder="name@example.com">
                            <label for="fiNama">Nama</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="email" name="email" class="form-control" id="fiEmail" placeholder="name@example.com">
                            <label for="fiEmail">Email</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea" name="alamat"></textarea>
                            <label for="floatingTextarea" >Alamat</label>
                        </div>

                        <div class="form-floating mt-2">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="program">
                                <option selected disabled>Pilih</option>
                                <option value="Junior Web Developer">Junior Web Developer</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Content Creator">Content Creator</option>
                                <option value="Desainer Multimedia Muda">Desainer Multimedia Muda</option>
                            </select>
                            <label for="floatingSelect">Program Pelatihan</label>
                        </div>

                        <div class="form-floating mt-2">
                            <select class="form-select" id="fsTahun" aria-label="Floating label select example" name="tahun">
                                <option selected disabled>Pilih Tahun</option>
                                <?php
                                  for($a=2000;$a<=2023;$a++):?>
                                  <option value="<?= $a;?>">
                                    <?= $a;?>
                                  </option>
                                <?php endfor;?>
                            </select>
                            <label for="fsTahun">Tahun Daftar</label>
                        </div>

                       
                        <input type="submit" class="btn btn-success mt-3 col-12" value="Daftar" name="submit">
                        <!-- inget yg di panggil dan di sesuaikan adalah tag name bukan type atau apapun yaaa, case disini tadi salah kaprah pada submit di type dan name -->
                        
                        </form>
                    </div>

                    <div class="card-footer text-center">
                        <!-- coding isset  sebelumnya -->
                            <!-- iiset artinya terisi jd kalo ada isinya dia akan muncul -->
                            <div class="spinner-border text-info" role="status" style="display:none;">
                            <!-- tag di atas untuk memunculkan efek loading ada di web boostrap tinggal copas tapi tambahin css inline style display supaya dia ngumpet dulu pas di enter input baru muncul, gitu ya -->
                            <span class="visually-hidden">Loading...</span>
                            </div>
                        <div class="table-responsive">
                        <table class="table">
                        <thead class="table-dark">
                        <tr>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Alamat</th>
                          <th>Program</th>
                          <th>Tahun</th>
                          </tr>
                        </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                        </div>
                        <!-- end if coding ada disini sebelumnya -->
                            <!-- gunanya end if untuk mengakhiri  -->
                      <!-- <h5>copyright @2023</h5> -->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="bootstrap-5.1.3-dist/js/jquery-3.6.4.min.js">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function(){   
                $("form").submit(function(event){
                     event.preventDefault();
                    //  console.log("form telah disubmit");
                    var nama= $("#fiNama").val();
                    var email= $("#fiEmail").val();
                    var alamat= $("#floatingTextarea").val();
                    var program= $("#floatingSelect").val();
                    var tahun= $("#fsTahun").val();
// var untuk variabel, val untuk value, jadi di atas inggin memanggil sebuah variabel yang memiliki nilai .... dan kenapa make hasrag bukan titik karena saat membuat variabel tag nya berupa id bukan class, inget lah ya kalo tag isinya id maka kalo di panggil make # 
                    var formData = {
                        nama: nama,
                        email: email,
                        alamat: alamat,
                        program: program,
                        tahun: tahun
// sebelumnya nama email dll di kanan yg di atas ini di kasih kutip dua ya alias sedang di panggil, krn buat pemanggil baru tuh var di atasnya lagi makanya di ilangin kutipnya supaya gak bingung manggilnya dan tetap berjalan
                    }
                    $.ajax ({
                        type:"POST",
                        url: "process.php",
                        data: formData,
                        beforeSend: function(result) {
                            $(".spinner-border").show()
                        },
                        success: function(result){
                            $(".spinner-border").hide(10000)
                            $("tbody").append(result);
                            $("form")[0].reset(result);
                        // tag di atas di gunakan agar saat mengisi dan menginput data, akan kembali ter reset alias kosong di dan dapat langsung di isi kembali untuk data yg baru
                            // append artinya menambahkan, yg berarti menambahkan si tbody yg memuat bbrp data di atas yg mencakup t body itu yg sdh di ketik sebelumnya, dan untuk 0 knp gunanya untuk mempengaruhi jumblah form yg ada kalo 0 berarti untuk form yg ke 1
                                // $("table").hide();

                                 }
                            })
                    })
       
                    })
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>