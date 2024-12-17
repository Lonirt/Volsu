function updateDonationText() {
    const amountInput = document.getElementById('customAmountMonthly');
    const donationText = document.getElementById('donation-text');
    
    let amount = parseFloat(amountInput.value);
    if (isNaN(amount) || amount <= 0) {
      amount = 40;
    }
    const people = Math.floor(amount / 3.33);    
    donationText.innerHTML = `Your <span class="fw-bold">$${amount.toFixed(2)}</span> monthly donation can give <span class="fw-bold">${people} people</span> clean water every year. 100% funds water projects.`;
  }
  document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll('.custom-btn');
    buttons.forEach(button => {
      button.addEventListener('click', function () {
        buttons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
      });
    });
  });
 document.addEventListener('DOMContentLoaded', function() {
            const amountButtons = document.querySelectorAll('.btn.custom-btn');
            const donationText = document.getElementById('donation-text');
            
            amountButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const amount = this.getAttribute('data-amount');
                    const people = this.getAttribute('data-people');
                    const amountText = amount ? `$${amount}.00` : '';
                    const peopleText = people ? `${people} people` : '0 people';
                    donationText.querySelector('span.fw-bold').textContent = amountText;
                    donationText.querySelectorAll('span.fw-bold')[1].textContent = peopleText;
                });
            });
        });
        var isTextChanged = false;

        var isTextChanged = false;

document.getElementById('sponsor-btn').addEventListener('click', function() {
    var sponsorText = document.getElementById('sponsor-text');
    sponsorText.innerHTML = 'Bring clean water to an entire community or school. To learn more, <a href="#" style="color: black;" >click here</a>.';
    isTextChanged = true;
});

var amountButtons = document.querySelectorAll('[id^="amount-"]');
amountButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var sponsorText = document.getElementById('sponsor-text');
        if (isTextChanged) {
            sponsorText.innerHTML = 'It only takes $40 to bring 1 person reliable access to the clean water they deserve.';
            isTextChanged = false;
        }
    });
});

document.getElementById('other-amount-btn').addEventListener('click', function() {
    var sponsorText = document.getElementById('sponsor-text');
    if (isTextChanged) {
        sponsorText.innerHTML = 'It only takes $40 to bring 1 person reliable access to the clean water they deserve.';
        isTextChanged = false;
    }
});А;   