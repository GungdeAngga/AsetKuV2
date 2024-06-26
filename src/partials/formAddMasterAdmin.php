<?php

include 'connect.php';
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="insert into `asetku` (nama, email, username, password) 
    value('$nama', '$email', '$username', '$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data berhasil di input";
    } else {
        die(mysqli_error($con));
    }
}

?>


<div class="rounded-lg border border-stroke bg-white px-3 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-6 xl:pb-5">
    <div class="bg-red-600 w-30 rounded-lg text-center text-xl">
        <a href="masterAdmin.html" class="text-white font-bold">
            Kembali
        </a>
    </div>
    <h4 class="text-black mt-5 dark:text-white mb-6 flex text-xl font-bold">
        Tambah Data Master Akun
    </h4>
    <form class="font-bold space-y-5" method="post">
        <div class="flex space-x-6">
            <div class="basis-1/2 flex flex-col">
                <label>Nama</label>
                <input type="text" id="namaAset" name="namaAset" class="rounded-lg border" name="nama" autocomplete="off">
            </div>

            <div class="basis-1/2 flex flex-col">
                <label>Email</label>
                <input type="email" id="totalBarang" name="totalBarang" class="rounded-lg border" name="email" autocomplete="off">
            </div>
        </div>

        <div class="flex space-x-6">
            <div class="basis-1/2 flex flex-col">
                <label>Username</label>
                <input type="text" id="keterangan" name="keterangan" class="rounded-lg border" name="username" autocomplete="off">
            </div>

            <div class="basis-1/2 flex flex-col">
                <label>Password</label>
                <input type="password" id="status" name="status" class="rounded-lg border" name="password" autocomplete="off">
            </div>
        </div>
        
        <button type="submit" value="submit" name="submit" class="border-2 rounded-lg h-10 w-40 bg-primary text-white">Submit</button>
    </form>
</div>