<?php

echo "Program Pendaftaran\n";
echo "===================\n\n";

$a = readline("Nama: ");

echo "Data Fakultas"."\n";
echo "1. Fasilkom"."\n";
echo "2. Kedokteran"."\n";
echo "3. Teknik"."\n";

$b = readline("Input nomor[1-3]: ");

switch ($b) {
	case '1':
		echo "Data Jurusan"."\n";
        echo "1. Sistem Informasi"."\n";
        echo "2. Teknik Informatika"."\n";
        echo "3. Sistem Komputer"."\n";
        $c = readline("Input nomor[1-3]: ");
        
        switch ($b) {
	        case '1':
        		echo "Data yang diinput\n";
                echo "=================\n\n";
                echo "Nama: ".$a."\n";
                echo "Fakultas: Fasilkom"."\n";
                echo "Jurusan: Sistem Informasi "."\n";
	        break;
	        
	        case '2':
        		echo "Data yang diinput\n";
                echo "=================\n";
                echo "Nama: ".$a."\n";
                echo "Fakultas: Fasilkom"."\n";
                echo "Jurusan: Teknik Informatika"."\n";
	        break;
	        
	        case '3':
        		echo "Data yang diinput\n";
                echo "=================\n";
                echo "Nama: ".$a."\n";
                echo "Fakultas: Fasilkom"."\n";
                echo "Jurusan: Sistem Komputer"."\n";
	        break;
        }
	break;
	
	case '2':
		echo "Data Jurusan"."\n";
        echo "1. Kedokteran"."\n";
        echo "2. Kedokteran Gigi"."\n";
        echo "3. Psikologi"."\n";
        $c = readline("Input nomor[1-3]: ");
        
        switch ($b) {
	        case '1':
        		echo "Data yang diinput\n";
                echo "=================\n";
                echo "Nama: ".$a."\n";
                echo "Fakultas: Kedokteran"."\n";
                echo "Jurusan: Kedokteran"."\n";
	        break;
	        
	        case '2':
        		echo "Data yang diinput\n";
                echo "=================\n";
                echo "Nama: ".$a."\n";
                echo "Fakultas: Kedokteran"."\n";
                echo "Jurusan: Kedokteran Gigi"."\n";
	        break;
	        
	        case '3':
        		echo "Data yang diinput\n";
                echo "=================\n";
                echo "Nama: ".$a."\n";
                echo "Fakultas: KKedokteran"."\n";
                echo "Jurusan: Psikologi"."\n";
	        break;
        }
	break;
	
	case '3':
		echo "Data Jurusan"."\n";
        echo "1. Teknik Sipil"."\n";
        echo "2. Teknik Arsitektur"."\n";
        echo "3. Teknik Elektro"."\n";
        $c = readline("Input nomor[1-3]: ");
        
        switch ($b) {
	        case '1':
        		echo "Data yang diinput\n";
                echo "=================\n";
                echo "Nama: ".$a."\n";
                echo "Fakultas: Teknik"."\n";
                echo "Jurusan: Teknik Sipil"."\n";
	        break;
	        
	        case '2':
        		echo "Data yang diinput\n";
                echo "=================\n";
                echo "Nama: ".$a."\n";
                echo "Fakultas: Teknik"."\n";
                echo "Jurusan: Teknik Arsitektur"."\n";
	        break;
	        
	        case '3':
        		echo "Data yang diinput\n";
                echo "=================\n";
                echo "Nama: ".$a."\n";
                echo "Fakultas: Teknik"."\n";
                echo "Jurusan: Teknik Elektro"."\n";
	        break;
        }
	break;
		
}
