<div class="container">
<div class="row justify-content-center">
      
        <div class="col-md-8 p-3 mt-5" id="form-div">

        <?php if( isset( $_SESSION['password'] ) ) { ?>
            <div class="alert alert-danger">
                register danger
            </div>
        <?php ?>
        <form action="" class="form" method="POST">
                <input type="hidden" name="login" value="register">
                <div class="form-group">
                    <input type="email" name="email" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="name" placeholder="name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password_1" placeholder="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password_2" placeholder="repeat password" class="form-control">
                </div>
            
            <input type="submit" class="btn btn-block">
        </form>
    </div>
</div>
</div>