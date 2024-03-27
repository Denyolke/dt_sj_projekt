const result1 = document.getElementById("result1")
const result2 = document.getElementById("result2")
const input1 = document.getElementById("input1")
const input2 = document.getElementById("input2")

const submitBtn = document.getElementById("submit")

submitBtn.onclick = function()
{

   const kilogram = Number(input1.value);
   const bmi = parseFloat((Number(input1.value)/(Number(input2.value)/100*Number(input2.value)/100)));

   result1.textContent = bmi.toFixed(2);

   if (bmi<=18)
   {
   result2.textContent = "Thinness";
   }
   else if (bmi>17 && bmi<=25)
   {
   result2.textContent = "Normal";
   }
   else if (bmi>25 && bmi<=30)
   {
   result2.textContent = "Overweight";   
   }
   else if (bmi>30)
   {
  result2.textContent = "Obese";   
   }
}

function showAlert() {
   alert("You will be redirected!");
}

function validateEmail() {
   var emailInput = document.getElementById('form3Example4c').value;

   // Check if the email contains the "@" symbol
   if (emailInput.includes('@')) {
       alert('Email is valid: ' + emailInput);
   } else {
       alert('Please enter a valid email address.');
   }
}

