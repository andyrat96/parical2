<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Operación</title>
    </head>
    <body>



<?php    

function general(){
    
    $estructura = $_POST['estructura'];
    switch($estructura){
        case "elwhile":
            $n  = 1; 
            $i = 1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }
        
            $n  = 2; 
            $i=1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                }
        
            $n  = 3; 
            $i=1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                }

            $n  = 4; 
            $i=1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                }
        
            $n  = 5; 
            $i=1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                }
        
            $n  = 6; 
            $i=1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                }
        
            $n  = 7; 
            $i=1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                }
        
            $n  = 8; 
            $i=1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                }
        
            $n  = 9; 
            $i=1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                }
        
            $n  = 10; 
            $i=1;
            while ($i<=10) {
                echo "$n x $i = ".$n*$i."<br/>";
                    $i++;
                }

        break;
        case "eldowhile":
        
            $n = 1;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
            
                
            $n = 2;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
                
            $n = 3;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
                
            $n = 4;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
                
            $n = 5;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
                
            $n = 6;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
                
            $n = 7;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
                
            $n = 8;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
                
            $n = 9;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
                    
            $n = 10;
            $i = 1;
            do{                 
                echo "$n x $i = ".$n*$i."<br/>";
                $i++;
            }while($i<=10);
            
        break;
        
        case "elfor":
        
        echo "<table border=1>";
        
        for($i=1;$i<=10;$i++){
        for($j=1;$j<=10;$j++){
            echo "<tr><td>"."$i x $j = "."</td>"."<td>".$i*$j."</td>"."</tr>"."<br/>";
            
        }
        echo "<br/>";
        }
        echo "</table>";
        
        break;
        
        
        
        
        
        
            }

}
if(isset($_POST['estructura']))
    {
        general();
    }
?>


</body>

</html>