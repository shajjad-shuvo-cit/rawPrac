    <?php
        require_once('header.php');

        // error_reporting(0);
       
        
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            if($_POST['num1'] == NULL  || $_POST['num2'] == NULL){
                echo 'value nai';
            }else{
                echo $_POST['num1'] + $_POST['num2'];
            }
        }
    ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-lg-auto">
                <div class="card mt-4">
                    <div class="card-header bg-success text-white">
                        goriber calculator
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row mb-3">
                                <input type="number" class="form-control" placeholder="num1" name="num1">
                            </div>

                            <div class="row mb-3">
                                <input type="number" class="form-control" placeholder="num2" name="num2">
                            </div>

                            <div class="row mb-3">
                                <button type="submit" class="btn btn-primary">add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php
        require_once('footer.php');
    ?>