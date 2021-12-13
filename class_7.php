<?php
    require_once('header.php');
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto mt-3">
                <div class="card">
                    <div class="card-header text-uppercase bg-info">
                        <h4 class="mb-0 text-white">register form</h4>
                    </div>
                    <div class="card-body">
                        <form action="class7_post.php" method="post">
                            <div class="mb-3">
                                <label class="form-label text-capitalize">user name</label>
                                <input type="text" class="form-control" name="user_name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-capitalize">user email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-capitalize">user phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-capitalize">user password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary text-uppercase">register</button>
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