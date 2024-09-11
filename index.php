<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realtime Chat App | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First name" name="first_name" required>
                    </div>
                    <div class="field">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last name" name="last_name" required>
                    </div>
                </div>
                <div class="field">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" name="email" required>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter new Password" name="password" required>
                    <i class="fas fa-eye"></i> 
                </div>
                <div class="field image">
                  <label>Select image</label>
                  <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="Login.php">Login now</a></div>
        </section>
    </div>
    <script src="./main.js"></script>
    <script src="./singup.js"></script>
</body>
</html>