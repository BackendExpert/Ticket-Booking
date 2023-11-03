<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/app.css">

<div class="container">
    <section class="booking-section">
        <h2>Book A ticket</h2>
        <hr>

        <form action="<?php echo($_SERVER['PHP_SELF']);?>" method="POST">
            <div class="row">
                <div class="col-lg-5">
                    <label for="nic">NIC : </label>
                    <input type="text" name="user_nic" id="" class="form-control" placeholder="NIC Number">
                </div>
                <div class="col-lg-1">&nbsp;</div>
                <div class="col-lg-6">
                    <label for="eamil">Email : </label>
                    <input type="email" name="user_email" id="" class="form-control" placeholder="Email">
                </div>
            </div>
        </form>


    </section>
</div>

<?php include("../layouts/footer.php"); ?>

<script src="../../js/script.js"></script>