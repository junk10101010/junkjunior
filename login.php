<?php
$error = '';
if(isset($_POST['login'])) {
    if($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        header('Location: list.php');
        return;
    }
    $error = 'Invalid username or password';
}
?>
<html>
    <head><title>Login</title></head>
    <body>
        <?php echo $error; ?>
        <form method='POST'>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type='text' name='username' placeholder='Username'></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='password' name='password' placeholder='Password'></td>
                </tr>
                <tr>
                    <td colspan='2'><input type='submit' name='login' value='Login'></td>
                </tr>
            </table>
        </form>
    </body>
</html>
