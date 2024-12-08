function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    if (input.type === "password") {
      input.type = "text";
    } else {
      input.type = "password";
    }
  }

 //clock and date time

function displayTime() {
  const now = new Date();
  const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
  const formattedTime = now.toLocaleDateString('en-US', options);

  document.getElementById('clock').textContent = formattedTime;
}

// Update the time every second
setInterval(displayTime, 1000);