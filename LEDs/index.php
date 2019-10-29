<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mando de LEDs</title>
</head>
<body>
    <!--GPIO 4-->
    <form action="" method="post">
        GPIO 4 <input type="submit" name="encender4" value="Encender">
        <input type="submit" name="apagar4" value="Apagar">
    </form>
    <!--GPIO 7-->
    <form action="" method="post">
        GPIO 7 <input type="submit" name="encender7" value="Encender">
        <input type="submit" name="apagar7" value="Apagar">
    </form>
    <!--GPIO 8-->
    <form action="" method="post">
        GPIO 8 <input type="submit" name="encender8" value="Encender">
        <input type="submit" name="apagar8" value="Apagar">
    </form>
    <!--GPIO 9-->
    <form action="" method="post">
        GPIO 9 <input type="submit" name="encender9" value="Encender">
        <input type="submit" name="apagar9" value="Apagar">
    </form>
    <!--GPIO 10-->
    <form action="" method="post">
        GPIO 10 <input type="submit" name="encender10" value="Encender">
        <input type="submit" name="apagar10" value="Apagar">
    </form>
    <!--GPIO 11-->
    <form action="" method="post">
        GPIO 11 <input type="submit" name="encender11" value="Encender">
        <input type="submit" name="apagar11" value="Apagar">
    </form>
    <!--GPIO 17-->
    <form action="" method="post">
        GPIO 17 <input type="submit" name="encender17" value="Encender">
        <input type="submit" name="apagar17" value="Apagar">
    </form>
    <!--GPIO 18-->
    <form action="" method="post">
        GPIO 18 <input type="submit" name="encender18" value="Encender">
        <input type="submit" name="apagar18" value="Apagar">
    </form>
    <!--GPIO 22-->
    <form action="" method="post">
        GPIO 22 <input type="submit" name="encender22" value="Encender">
        <input type="submit" name="apagar22" value="Apagar">
    </form>
    <!--GPIO 23-->
    <form action="" method="post">
        GPIO 23 <input type="submit" name="encender23" value="Encender">
        <input type="submit" name="apagar23" value="Apagar">
    </form>
    <!--GPIO 24-->
    <form action="" method="post">
        GPIO 24 <input type="submit" name="encender24" value="Encender">
        <input type="submit" name="apagar24" value="Apagar">
    </form>
    <!--GPIO 25-->
    <form action="" method="post">
        GPIO 25 <input type="submit" name="encender25" value="Encender">
        <input type="submit" name="apagar25" value="Apagar">
    </form>

    <?php
        /*GPIO 4*/
        if ($_POST[encender4]) { 
            $a= exec("sudo python /var/www/html/encender4.py");
             echo $a;
            }
          
         if ($_POST[apagar4]) { 
             $a- exec("sudo python3 /var/www/html/apagar4.py");
             echo $a;
             }
             
        /*GPIO 7*/
        if ($_POST[encender7]) { 
            $a= exec("sudo python /var/www/html/encender7.py");
             echo $a;
            }
          
         if ($_POST[apagar7]) { 
             $a- exec("sudo python3 /var/www/html/apagar7.py");
             echo $a;
             }
             
        /*GPIO 8*/
        if ($_POST[encender8]) { 
            $a= exec("sudo python /var/www/html/encender8.py");
             echo $a;
            }
          
         if ($_POST[apagar8]) { 
             $a- exec("sudo python3 /var/www/html/apagar8.py");
             echo $a;
             }
             
        /*GPIO 9*/
        if ($_POST[encender9]) { 
            $a= exec("sudo python /var/www/html/encender9.py");
             echo $a;
            }
          
         if ($_POST[apagar9]) { 
             $a- exec("sudo python3 /var/www/html/apagar9.py");
             echo $a;
             }
             
        /*GPIO 10*/
        if ($_POST[encender10]) { 
            $a= exec("sudo python /var/www/html/encender10.py");
             echo $a;
            }
          
         if ($_POST[apagar10]) { 
             $a- exec("sudo python3 /var/www/html/apagar10.py");
             echo $a;
             }
             
        /*GPIO 11*/
        if ($_POST[encender11]) { 
            $a= exec("sudo python /var/www/html/encender11.py");
             echo $a;
            }
          
         if ($_POST[apagar11]) { 
             $a- exec("sudo python3 /var/www/html/apagar11.py");
             echo $a;
             }
             
        /*GPIO 17*/
        if ($_POST[encender17]) { 
            $a= exec("sudo python /var/www/html/encender17.py");
             echo $a;
            }
          
         if ($_POST[apagar17]) { 
             $a- exec("sudo python3 /var/www/html/apagar17.py");
             echo $a;
             }
             
        /*GPIO 18*/
        if ($_POST[encender18]) { 
            $a= exec("sudo python /var/www/html/encender18.py");
             echo $a;
            }
          
         if ($_POST[apagar18]) { 
             $a- exec("sudo python3 /var/www/html/apagar18.py");
             echo $a;
             }             
        /*GPIO 22*/
        if ($_POST[encender22]) { 
            $a= exec("sudo python /var/www/html/encender22.py");
             echo $a;
            }
          
         if ($_POST[apagar22]) { 
             $a- exec("sudo python3 /var/www/html/apagar22.py");
             echo $a;
             }
             
        /*GPIO 23*/
        if ($_POST[encender23]) { 
            $a= exec("sudo python /var/www/html/encender23.py");
             echo $a;
            }
          
         if ($_POST[apagar23]) { 
             $a- exec("sudo python3 /var/www/html/apagar23.py");
             echo $a;
             }
             
        /*GPIO 24 */
        if ($_POST[encender24]) { 
            $a= exec("sudo python /var/www/html/encender24.py");
             echo $a;
            }
          
         if ($_POST[apagar24]) { 
             $a- exec("sudo python3 /var/www/html/apagar24.py");
             echo $a;
             }
             
             /*GPIO 25 */
             if ($_POST[encender25]) { 
                 $a= exec("sudo python /var/www/html/encender25.py");
                  echo $a;
                 }
               
              if ($_POST[apagar25]) { 
                  $a- exec("sudo python3 /var/www/html/apagar25.py");
                  echo $a;
                  }

    ?>
</body>
</html>
