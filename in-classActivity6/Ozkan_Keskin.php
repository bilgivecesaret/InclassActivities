<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Forms </title>
        
    </head>
    <?php
		 $background = "";
         if(empty($_POST['theme'])==false)
         {
            $background =$_POST['theme'];
         }
    ?>
    <body style="font-style:italic; background-color:<?php echo $background; ?>;">
        <h1>Preview</h1>
        <p>
            <?php
                if(empty($_POST['name'])==false)
                {
                    echo $_POST['name'];
                }
                else 
                {
                    echo "Name: Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['uname'])==false)
                {
                    echo $_POST['uname'];
                }
                else 
                {
                    echo "Username: Not provided";
                }
            ?>
        </p>
        <p>
           <?php 
                if(empty($_POST['pass'])==false)
                {
                    if(strlen($_POST['pass'])>=8)
                        echo "Your password is stored";
                    else
                        echo "Your password must be longer than 8 characters.";
                    
                }
                else 
                {
                    echo "Password: Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['address'])==false)
                {
                    echo $_POST['address'];
                }
                else 
                {
                    echo "Address: Not provided";
                }
            ?>
        </p>
        <p>
           
            <?php
               
                if(empty($_POST['country'])==false)
                {
                    $dashPosition = strpos($_POST['country'],"-")+1;
                    $cityName = substr($_POST['country'],$dashPosition);
                    echo "$country";
  
                }
                else 
                {
                    echo "Country: Not provided";
                }
            ?>
        </p>
        <p>
            <?php
                if(empty($_POST['zip'])==false)
                {
                    echo $_POST['zip'];
                }
                else 
                {
                    echo "Zip: Not provided";
                }
            ?>
        </p>
        <p>           
            <?php
                if(empty($_POST['email'])==false)
                {
                    if(is_bool($isThereA = strpos($_POST['email'],"@")))
                    {
                        echo "Your email must contain the '@' character";
                    }
                    else
                    {
                        $afterA = substr($_POST['email'],$isThereA);
                        $istThereDot = str_contains($afterA,".");
                        if($istThereDot)
                        {
                            echo "Your email is recorded";
                        }
                        else
                        {
                            echo "Your email must contain . after the @ sign";
                        }
                    }
                    
                }
                else 
                {
                    echo "Email: Not provided";
                }
            ?>
        </p>
        <p>  
           <?php
               if(empty($_POST['sex'])==false)
               {
                   switch($_POST['sex'])
                   {
                        case "male":
                            echo "Male";
                            break; 
                        case "female":
                            echo "Female";
                            break; 
                        default:
                            echo "Sex: Not provided";
                   }
               }
               else 
               {
                   echo "Sex: Not provided";
               }
           ?>
       </p> 
        
        <p>  
           <?php
               if(empty($_POST['language'])==false)
               {
                   for($i=0;$i<sizeof($_POST['language']);$i++)
                   {
                        echo $_POST['language'][$i].", ";
                   } 
                   echo "<br>";
               }
               else 
               {
                   echo "Language: Not provided";
               }
           ?>
       </p>
       </p> 
            <?php
                if(empty($_POST['comment'])==false)
                {
                     echo "Thanks for your comment <br/>";
                     echo $_POST['comment'];
                }else{
                    echo "About: Not provided";
                }
            ?>
       <p>
    </body>
</html>