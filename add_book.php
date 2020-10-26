<?php
    $link=mysqli_connect('localhost','root','','module_syte')  or die(mysqli_connect_error());

  
  $names=$_POST['name'];
  $b_name=$_POST['book_name'];
  $avtor=$_POST['author'];
    $dates=$_POST['date'];
 

 $query="INSERT INTO `record`(`id`, `ФИО`, `Название_книги`, `Автор`, `Дата`) VALUES ('','$names','$b_name','$avtor','$dates')";


	echo '<br>';
echo $names;
	echo '<br>';
echo $b_name;
	echo '<br>';
echo $avtor;
	echo '<br>';
echo $dates;
	echo '<br>';

	
 $r = mysqli_query($link,$query);
    

    if($r)
    {
        echo "Вы записаны на выдачу книг!";
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