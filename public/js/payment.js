function totalCost() {
    let parts = document.getElementById('parts').value;
    let services = document.getElementById('services').value;
    let total = parseFloat(parts) + parseFloat(services);
    document.getElementById('total').textContent = total;
    document.getElementById('total-amount').value = total;
}
