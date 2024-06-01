<html>
<head>
<style>
    body {
        background-color: #e6e6fa; 
        color: #6f42c1; 
    }

    a {
        color: #6f42c1; 
    }

    a:hover {
        color: #4b2a7d; 
    }

    table {
        background-color: #ffffff; 
        color: #6f42c1; 
    }

    th, td {
        border-color: #6f42c1; 
    }

    .btn {
        background-color: #6f42c1; 
        color: #ffffff; 
    }

    .btn:hover {
        background-color: #4b2a7d; 
    }

    .btn-danger {
        background-color: #dc3545; 
    }

    .btn-danger:hover {
        background-color: #bd2130; 
    }

    .cari {
        background-color: #f8f9fa; 
        padding: 10px; 
    }
    .butn{
        margin-top: 20px;
        margin-left: 10px;
    }
    .botn{
        margin-left:10px;
        margin-top:5px;                  
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="jquery.toast.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<title>Data Siswa 2024</title>
</head>
<body>
<a href = "tambah.php"><button type="button" class="butn btn-warning btn-sm"> Tambah Data </button></a><br>
<a href = "logout.php"><button type="button" class="botn btn-danger btn-sm"> Log Out </button></a><br>

<table>
<center><form method="GET" action="index.php" class="cari">
Cari berdasarkan Nama dan NIS
<input type="text" name="search" value="<?=@$search ?>"></input>
<button type="submit" class="btn btn-secondary">Cari</button></center>
</form></table>

    <table border = "1" class=" table table-responsive table-striped table-sm" >
        <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>NIS
                    <a href="index.php?sort=nis&order=asc"> ↑ </a>
                    <a href="index.php?sort=nis&order=desc"> ↓ </a>
                </th>

                <th>Nama Lengkap
                    <a href="index.php?sort=nama_lengkap&order=asc"> ↑ </a>
                    <a href="index.php?sort=nama_lengkap&order=desc"> ↓ </a>
                </th>

                <th>Jenis Kelamin
                    <a href="index.php?sort=nama_lengkap&order=asc"> ↑ </a>
                    <a href="index.php?sort=nama_lengkap&order=desc"> ↓ </a>
                </th>

                <th>Kelas
                    <a href="index.php?sort=nama_lengkap&order=asc"> ↑ </a>
                    <a href="index.php?sort=nama_lengkap&order=desc"> ↓ </a>
                </th>

                <th>Jurusan
                    <a href="index.php?sort=nama_lengkap&order=asc"> ↑ </a>
                    <a href="index.php?sort=nama_lengkap&order=desc"> ↓ </a>
                </th>

                <th>Alamat
                    <a href="index.php?sort=nama_lengkap&order=asc"> ↑ </a>
                    <a href="index.php?sort=nama_lengkap&order=desc"> ↓ </a>
                </th>

                <th>Golongan Darah
                    <a href="index.php?sort=nama_lengkap&order=asc"> ↑ </a>
                    <a href="index.php?sort=nama_lengkap&order=desc"> ↓ </a>
                </th>

                <th>Ibu Kandung
                    <a href="index.php?sort=nama_lengkap&order=asc"> ↑ </a>
                    <a href="index.php?sort=nama_lengkap&order=desc"> ↓ </a>
                </th>
                
                <th> Aksi </th>
            </tr>
        </thead>
        <tbody>
        <?php
$i = 1;
while ($siswa = $listSiswa->fetch_array()) {
?>

            <tr>
                <td><?= $i ++ ?></td>
                <td>
                    <?php if (!empty($siswa ['file'])) { ?>
                    <img widht="90" height="90" src="<?php echo base_url() ?>/Assets/img/<?php echo $siswa['file'] ?>">
                    <?php } else { ?>
                        <img width="90" height="90" src="Assets/img/ava.png">
                    <?php } ?>
                </td>

                <td><?= $siswa ['nis'] ?></td>
                <td><?= $siswa ['nama_lengkap'] ?></td>
                <td><?= $siswa ['jenis_kelamin'] ?></td>
                <td><?= $siswa ['nama_kelas'] ?></td>
                <td><?= $siswa ['jurusan'] ?></td>
                <td><?= $siswa ['alamat'] ?></td>
                <td><?= $siswa ['golongan_darah'] ?></td>
                <td><?= $siswa ['ibu_kandung'] ?></td>
                <td>
                <a href="edit.php?nis=<?= $siswa['nis'] ?>" class="btn btn-warning"><i class="bi bi-feather"></i></a>
                <a href="delete.php?nis=<?= $siswa['nis'] ?>" class="btn btn-danger btnDelete "><i class="bi bi-trash3-fill"></i></a>

            </td>
            </tr>
            <?php } ?>
</tbody>
</table>
<div class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" class="ml-auto"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                    </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-primary btnYa">Ya</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
            $(function() {
            $(".btnDelete").on("click", function(e){
            e.preventDefault();

            var nama = $(this).parent().parent().children()[3];
            nama = $(nama).html();

            var tr = $(this).parent().parent();

            $(".modal").modal('show');
            $(".modal-title").html('Konfirmasi');
            $(".modal-body").html('Anda ingin menghapus data <b>'+ nama + '</b> ?')
            var href = $(this).attr('href');

            $('.btnYa').off().on('click', function(){
            $.ajax({
            'url' : href,
            'type' : 'POST',
            'success' : function(result){
                if(result == 1){
                    $(".modal").modal('hide');
                    tr.fadeOut();
                    toastr.success(' Data '+ nama + ' berhasil dihapus', 'Informasi');
                }
                else{
                    $(".modal").modal('hide');
                    toastr.error('Data tidak berhasil dihapus', 'Informasi');
                }
            }
         });
     });
});
});
</script>
</body>
</html>