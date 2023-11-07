<?php
	//komentar 1 baris
	
	/*
		komentar lebih dari satu baris
	*/

	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$pesan=$_POST['pesan'];

	//msg = massage
	$msg='
	<p>Hi admin web, berikut adlaah data pengunjung web yang sudah memasukkan komentar melalui formulir</p>

<table>
	<tr>
		<td><strong>Nama</strong></td>
		<td>:</td>
		<td>'.$nama.'</td>
	</tr>
	
	<tr>
		<td><strong>email</strong></td>
		<td>:</td>
		<td>'.$email.'</td>
	</tr>
	
</table>

<p>Adapun pesan pengunjung adalah</p>
<p>
	'.$pesan.'
</p>

<p>
	Sistem Web
</p>
	';
//semua di atas itu akan menajdi text

/*	ini utk latihan klo ga ada email, utk nampilin di web ketika di submit
echo $nama; echo '<br>';
	echo $email; echo '<br>';
	echo $pesan; echo '<br>';
	*/

//proses mengirimkan ke email
//siapkan variable
$to="tjokyuda98@myskincare-bali.my.id";
$subject="Info Pesan";
$from = "From: ".$nama."<".$email.">" . "\r\n";
$from .= "Reply-to: ".$email. "\r\n";
$from .= "Content-type: text/html" . "\r\n";


//function utk mengiirim email 
$kirim=mail($to,$subject,$msg,$from);
	//utk ngecek apakah udh kekirim
	if($kirim)
	{
		header("location:sukses.html");
	}

	else
	{
		header("location:gagal.html");
	}
?>



