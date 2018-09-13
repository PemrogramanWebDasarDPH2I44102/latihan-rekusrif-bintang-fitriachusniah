<?php
      /////////////Piramida Bintang/////////////
        function cetakBaris($bil1)
        {

          if ($bil1 < 1)
            return;
          echo "* ";
          cetakBaris($bil1-1);
        }

        function cetakPola($bil2)
        {
          if ($bil2 < 1)
            return;
          cetakBaris($bil2);
          echo "<br>";
          cetakPola($bil2-1);

        }
          cetakPola(5);

echo "<br><br>";

        /////////////Piramida angka/////////////
        $awal = 1;
        $batas = 5;
        function piramid_angka ($i = 1){
          global $awal;
          global $batas;
            echo $awal;
              $awal++;
          if ($awal<=$i){
            piramid_angka($i);
          }else{
            echo "<br>";
            $i++;
            $awal = 1;
              if($i<=$batas){
                  piramid_angka($i);
              }

          }
        }
        piramid_angka();
?>
