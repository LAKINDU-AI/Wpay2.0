function generatePaymentLink() {
    
    alert("Payment link generated! Redirecting to payment page.");
    window.location.href = "https://examplepaymentgateway.com/checkout";
}

function sendPaymentLinkViaSMS() {
    const phoneNumber = document.getElementById("phoneNumber").value;

    
    alert(`Payment link sent to ${phoneNumber} via SMS.`);
}
