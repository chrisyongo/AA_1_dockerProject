<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Azubi signin</title>
    </head>
<body>

    <?php 
            if(isset($_POST['submit'])){
                $userName = $_POST['name'];
                $password = $_POST['password'];
                $folder_path = 'signup.php';

                if ($userName !== 'johndoe' && $password !== '12345'){

                    print('Invalid username or password');
                    echo '<p><a href="' . $folder_path . '">Log in</a></p>';
                    
                }else{
                    print('Welcome, This is admin!');
                    echo '<p><a href="' . $folder_path . '">Log out</a></p>';
                }
            }
    ?>
    
    
</body>
</html>