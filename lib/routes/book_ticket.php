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
                    <input type="text" name="user_nic" id="" class="form-control" placeholder="NIC Number" required> 
                </div>
                <div class="col-lg-1">&nbsp;</div>
                <div class="col-lg-6">
                    <label for="eamil">Email : </label>
                    <input type="email" name="user_email" id="" class="form-control" placeholder="Email" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" id="" class="form-control" placeholder="Surname" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-5">
                    <label for="fn">First Name :</label>
                    <input type="text" name="fn" id="" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col-1">&nbsp;</div>
                <div class="col-6">
                    <label for="ln">Last Name : </label>
                    <input type="text" name="ln" id="" class="form-control" placeholder="Last Name" required>
                </div>
            </div>
        </form>


    </section>
</div>

<?php include("../layouts/footer.php"); ?>

<script src="../../js/script.js"></script>