<?php
    $link=mysqli_connect('localhost','root','','module_syte')  or die(mysqli_connect_error());

  
  $names=$_POST['name'];
     $codes=$_POST['code'];
     $b_name=$_POST['book_name'];
     $avtor=$_POST['author'];
    $count=$_POST['count_book'];
 

 $query="INSERT INTO `chit_bilet`(`Номер`, `ФИО`, `S_code`, `Название`, `Автор`, `Кол_во_экземпляров_на_руках`) VALUES ('','{$names}','{$codes}','{$b_name}','{$avtor}','{$count}')";


	echo '<br>';
echo $names;
	echo '<br>';
echo $codes;
	echo '<br>';
echo $b_name;
	echo '<br>';
echo $avtor;
	echo '<br>';
echo $count;
	echo '<br>';

	
 $r = mysqli_query($link,$query);
    

    if($r)
    {
        echo "Запись добавлена!";
     echo "<HTML><HEAD>
 <META HTTP-EQUIV='Refresh' CONTENT='0; URL=chit_bilit.php'>
 </HEAD>";
    }
    else 
    { echo "Запись не добавлена! Ошибка";

}
	
    
?>
</body>
</html>