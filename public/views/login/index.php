<div class="container">    
    <div class="row justify-content-center">
        <div class="col-md-8 p-3 mt-5" id="form-div">

    <?php if( isset( $_SESSION['login_error'])) { ?>
        <div class="alert alert-danger text-center">
           <?= $_SESSION['login_error']  ?>  
        </div>

    <?php } 
        Session::session_unset( 'login_error' ); 
    ?>


            <form action="" class="form" method="POST">
                <input type="hidden" name="login" value="login">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="password">
                </div>

                <input type="submit" class="btn btn-success btn-block" value="Login">
            </form>
        </div>
    </div>
</div>