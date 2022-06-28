<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Blood Bank System"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>

        <div class="row justify-content-center">
            

            <div class="main-container">
        <div class="heading">
          <h1 class="heading__title">Blood Types</h1>
        </div>
        <div class="cards">
          <div class="card1 card-1">
            <div class="card__icon"><i></i>A+</div>
           
            <h2 class="card__title">
              If you are A+: You can give blood to A+ and AB+. You can receive
              blood from A+, A-, O+ and O-
            </h2>
          </div>
          <div class="card1 card-2">
            <div class="card__icon">A-</div>
           
            <h2 class="card__title">
              If you are A-: You can give blood to A-, A+, AB- and AB+. You can
              receive blood from A- and O-.
            </h2>
          </div>
          <div class="card1 card-3">
            <div class="card__icon">B+</div>
           
            <h2 class="card__title">
              You can give blood to A+ and AB+. You can receive blood from A+,
              A-, O+ and O-.
            </h2>
          </div>
          <div class="card1 card-4">
            <div class="card__icon">B-</div>
           
            <h2 class="card__title">
              If you are B-: You can give blood to B-, B+, AB+ and AB-, You can
              receive blood from B- and O-.You can give blood to B+ and AB+.
            </h2>
          </div>
          <div class="card1 card-5">
            <div class="card__icon">AB+</div>
           
            <h2 class="card__title">
              People with AB+ blood can receive red blood cells from any blood
              type. This means that demand for AB+ can donate with AB only.
            </h2>
          </div>
          <div class="card1 card-6">
            <div class="card__icon">AB-</div>
           
            <h2 class="card__title">
              AB- patients can receive red blood cells from all negative blood
              types. AB- can give red blood cells to both AB- and AB+ blood
              types.
            </h2>
          </div>
          <div class="card1 card-7">
            <div class="card__icon">O+</div>
           
            <h2 class="card__title">
              Blood O+ can donate to A+, B+, AB+ and O+ Blood Group O can donate
              red blood cells to anybody. It's the universal donor.
            </h2>
          </div>
          <div class="card1 card-8">
            <div class="card__icon">O-</div>
           
            <h2 class="card__title">
              O- can donate to A+, A-, B+, B-, AB+, AB-, O+ and O- Blood People
              with O negative blood can only receive red cell donations from O
              negative donors.
            </h2>
          </div>
        </div>
      </div>

        </div>

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>
        </div>

    </div>

    <?php require 'footer.php'; ?>

</body>
</html>













