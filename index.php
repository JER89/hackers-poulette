<?php 
    include('./asset/php/filter.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="favicon" href="./asset/img/hackers-poulette-logo.png">
    <link rel="stylesheet" href="./asset/css/style.css">

    <title>Hackers Poulette</title>
</head>
<body>
    <header class="container text-center col-8">
        <img src="./asset/img/hackers-poulette-logo.png" alt="hackers poulette's logo" height="125">
        <nav>
            <ul class="navLeft">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
            </ul>
            <ul class="navRight">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <h1 class="text-center">Contact Us</h1>
        <form method="post" action="index.php">
            <section class="row">
                <div class="container col-6">
                    <label for="firstname">Firstname<?php echo "<em style='color:red;'>" . $errors['firstname']."</em>"; ?></label>
                    <input name="firstname" id="firstname" class="control" type="text" value="<?php echo isset ($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
                    <label for="lastname">Lastname<?php echo "<em style='color:red;'>" . $errors['lastname']."</em>"; ?></label>
                    <input name="lastname" id="lastname" class="control" type="text" value="<?php echo isset ($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
                    <label for="gender">Gender<?php echo "<em style='color:red;'>" . $errors['gender']."</em>"; ?></label>
                    <select name="gender" id="gender" class="control">
                        <option value="Man" <?php echo ($_POST['gender'] == "Man") ? "selected" : "" ?>Man></option>
                        <option value="Woman" <?php echo ($_POST['gender'] == "Woman") ? "selected" : "" ?>Woman></option>
                    </select>
                </div>
                <div class="container col-6">
                    <label for="email">E-mail<?php echo "<em style='color:red;'>" . $errors['email']."</em>"; ?></label>
                    <input name="email" id="email" class="control" type="email" placeholder="name@example.com" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    <label for="country">Country<?php echo "<em style='color:red;'>" . $errors['country']."</em>"; ?></label>
                    <input name="country" id="country" class="control" type="text" value="<?php echo isset($_POST['country']) ? $_POST['country'] : '' ?>">
                    <label for="subject">Subject</label>
                    <select name="subject" id="subject" class="control">
                        <option value="other" selected>Other</option>
                        <option value="question">Question</option>
                        <option value="sav">Sav</option>
                    </select>
                </div>        
                <div class="container col-12">
                    <label for="message"><?php echo "<em style='color:red;'>".$errors['message']."</em>"; ?></label>
                    <textarea name="message" id="message" class="control col-8" rows="8"<?php echo isset($_POST['message']) ? ">".$_POST['message'] :"placeholder='Enter your message....'>"?></textarea>
                    <input id='sendform' name='sendform' type=''/>
                    <div class="text-center">
                        <input type="button" name="submit" class="btn center-block" value="Submit">
                        <?php echo $submit;?>
                    </div>
                </div>
            </section>
        </form>
    </main>
</body>
</html>