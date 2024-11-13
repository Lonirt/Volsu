<?php
require_once 'auth.php';
$user = getUser();
?>
<?php include('header.php'); ?>
        <?php if ($user): ?>
          Вы авторизованы как <?= htmlspecialchars($user['name']) ?>. 
            <a href="logout.php">Выйти</a>
        <?php else: ?>
          Вы не авторизованы. 
            <a href="login.php">Войти</a> или 
            <a href="register.php">Зарегистрироваться</a>.
        <?php endif; ?>
    </div>
        </div>  
    </div>  
</nav>

<div class="background">
  <div class="container">
    <div class="content-box">
      <h1>ㅤㅤㅤㅤ</h1>
      </div>
    <div class="content-box custom-bg p-4 rounded shadow text-center custom-rectangle">
      <h1>100% of your gift funds clean and safe drinking water</h1>
      <h6>We're on a mission to bring clean water to the 703 million</h6>
      <h6>people living without it. You can join us. No matter how much you give</h6>
      <h6>every cent funds clean water projects around the world.</h6>
      <div class="tabs-container">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="give-once-tab" data-bs-toggle="tab" data-bs-target="#give-once" type="button" role="tab" aria-controls="give-once" aria-selected="true">Give Once</button>
          </li>
          
          <li class="nav-item" role="presentation">
            <button class="nav-link custom-bg2" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="false">Monthly</button>
          </li>
        </ul>
        <div class="tab-content mt-3">
          <div class="tab-pane fade show active" id="give-once" role="tabpanel" aria-labelledby="give-once-tab">
            <p class=" custom-bg2 fw-bold text-center border my-0" style="line-height: 4;">Choose an amount to give</p>
            <div class="card border-0">
              <div class="card-body p-4">
                <div class="container-fluid">
              </div>
                <div class="d-grid gap-2 ">
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100" data-amount="50" data-people="6" id="amount-50">$50 USD</button>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100" data-amount="100" data-people="12" id="amount-100">$100 USD</button>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100" data-amount="150" data-people="18" id="amount-150">$150 USD</button>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100" data-amount="200" data-people="24" id="amount-200">$200 USD</button>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100 btn-other-amount" id="other-amount-btn" data-amount="0" data-people="0" onclick="toggleOtherAmount('give-once')">
                        Other amount
                        <input type="number" class="form-control" id="customAmountGiveOnce" placeholder="Other">
                      </button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100" id="sponsor-btn">Sponsor an entire water project</button>
                    </div>
                    <button type="button" class="btn btn-warning w-100 mt-4 custom-width">GIVE</button>
                    <div class="form-footer mt-4">
                      <a class="text" href="#" style="color: black;">Give by check or stock</a>
                      <a class="text" href="#" style="color: black;">Donate crypto</a>
                    </div>
                    <div class="horizontal-line"></div> 
                    <div class="container">
                      <p id="sponsor-text" class="mt-3 text-muted small text">It only takes $40 to bring 1 person reliable access to the clean water they deserve.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
            <p class="custom-bg2 fw-bold text-center border my-0" style="line-height: 4;">Choose a amount to give per month</p>
            <div class="card border-0">
              <div class="card-body p-4">
                <div class="d-grid gap-2">
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100" data-amount="10" data-people="3">$10 USD/mo</button>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100" data-amount="20" data-people="6">$20 USD/mo</button>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100" data-amount="40" data-people="12">$40 USD/mo</button>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100" data-amount="100" data-people="30">$100 USD/mo</button>
                    </div>
                    <div class="col">
                      <button type="button" class="btn btn-light custom-btn w-100 btn-other-amount" id="other-amount-monthly" data-amount="0" data-people="0">
                        Other amount
                        <input type="number" class="form-control" id="customAmountMonthly" placeholder="Other" oninput="updateDonationText()">
                      </button>
                    </div>
                  </div>
                  <button type="button" class="btn btn-warning w-100 mt-4">Join Today</button>
                  <div class="horizontal-line"></div> 
                  <p id="donation-text" class="mt-3 text-muted small text">
                    Your <span class="fw-bold">$40.00</span> monthly donation can give <span class="fw-bold">12 people</span> clean water every year. 100% funds water projects.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
         <img src="img/234.png"> Secure Payment · This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.
      </div>
    </div>
    <div class="col-md-12" custom;">
      <div class="row"> 
        <div class="col-4 ml-auto mr-3" style="height: 100px;"></div>
      
    </div>
  </div>
  <div class="content-box">
    <h1>ㅤㅤㅤㅤ</h1>
    </div>
</div>
<?php include('footer.php'); ?>
</html>