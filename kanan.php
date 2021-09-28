<?php
if($_GET['modul']=='home'){
?>

<link href="styles.css" rel="stylesheet" />
<div class="container-fluid">
    <h1>Selamat Datang</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="media.php?modul=home"><i>Beranda</i></a></li>
        <li class="breadcrumb-item active"><i>Dashboard</i></li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <p class="rere">
                Anda berada di halaman Admin.
            </p>
        </div>
    </div>
</div>

<?php
                                                    //tambah menu di bawah ini
}else if($_GET['modul']=='user'){
    include "modul/user/user.php";  


}else if($_GET['modul']=='dtumum'){
    include "modul/dtumum/dataumum.php";

}else if($_GET['modul']=='dtperades'){
    include "modul/dtperades/dataperades.php"; 
}
?>