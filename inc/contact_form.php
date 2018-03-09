
<?php 
if(isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['password'])){
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($email) && !empty($password)){
        echo '<p class="alert alert-success">Successfully inserted...</p>';
    }else{
        echo '<p class="alert alert-danger">You must fill all the fields...</a>';
    }
}
?>
<div class="container login">
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo $current_file; ?>" method="POST" >
                <h2>Login form</h2>
                <div class="form-group">
                    <input type="text" id="Name" class="form-control" name="name" placeholder="Name"/>
                </div>
                <div class="form-group">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Email"/>
                </div>
                <div class="form-group">
                    <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject"/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>
</div>
