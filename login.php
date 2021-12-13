<?php
    require_once('header.php');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-lg-auto">
                <div class="card mt-4">
                    <div class="card-header bg-info">
                        <h4 class="mb-0 text-uppercase">log in form</h4>
                    </div>
                    <div class="card-body">
                    <form action="login_post.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary text-capitalize">log in</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
    require_once('footer.php');
?>