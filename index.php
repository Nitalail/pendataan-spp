<?php
include 'connect.php';
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>belajar php</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">
</head>
<style>
    table, th, td{
        border:1px solid black;
    }
    th, td{
    }
    body{
        background-image:url('asset/bg.jpg');
        background-position:center;
        background-repeat:no-repeat;
        background-size:100% 100%;
    }
    .container{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%, -50%);
    }
</style>
<body style="min-height:100vh; font-family: 'Poppins', sans-serif;">
<div class="container bg-light bg-opacity-75 p-5 rounded-5 "> 
    <div class="row">
    <h1 class="text-black text-uppercase text-center fw-bold">Table Spp Murid</h1>
        <div class="d-flex align-items-center justify-content-between">  
            <a class="btn btn-success" href="create.php">Tambah Data +</a>
            <form action="index.php" method="GET">
                <div class="d-flex align-items-center gap-2">
                    <input type= "text" class="form-control" placeholder="Cari" name="search">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
</form>
        </div>      
            <div class="col-lg-12">
                <table class="table mx-auto text-center">
                    <thead>
                        <tr>
                            <th scope="col" class="bg-body-secondary bg-opacity-75">NO</th>
                            <th scope="col" class="bg-body-secondary bg-opacity-75">nama</th>
                            <th scope="col" class="bg-body-secondary bg-opacity-75">kelas</th>
                            <th scope="col" class="bg-body-secondary bg-opacity-75">harga spp</th>
                            <th scope="col" class="bg-body-secondary bg-opacity-75">Password</th>
                            <th scope="col" class="bg-body-secondary bg-opacity-75 ">options</th>
                            
                        </tr>
                    </thead>
                
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM spp";

                        if(isset($_GET['search'])){
                            $search = $_GET['search'];
                            $query2 = "SELECT * FROM spp WHERE (nama LIKE '%$search%') OR (kelas LIKE '%$search%') OR (harga LIKE '%$search%')";
                            $query = mysqli_query($connect, $query2);
                        }else{
                            $query = mysqli_query($connect, $sql);
                        }
                        

                        $plus =1;

                        while($data = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <th scope="row" class="bg-light bg-gradient border"><?= $plus++?></th>
                            <td class="bg-light bg-gradient border"><?php echo $data['nama']; ?></td>
                            <td class="bg-light bg-gradient border"><?php echo $data['kelas']; ?></td>
                            <td class="bg-light bg-gradient border">Rp <?php echo number_format( $data['harga'],0,'','.') ?></td>
                            <td class="bg-light bg-gradient border"><?php echo $data['password']; ?></td>
                            <td class="bg-light bg-gradient border">
                                <div class="d-flex align-items-start justify-content-evenly">
                                <a class="btn btn-warning text-white" href="edit.php?id=<?= $data['id'] ?>">edit</a>

                                    <form action='delete_proses.php' method="POST" class="">
                                        <input type="hidden" value="<?php echo $data['id']; ?>" name="id">
                                        <button class="btn btn-danger ">hapus</button>
                                    </form> 
                                </div>  
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>                        
            </div>                  
    </div>  
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
