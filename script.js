function updateRange() {
    let minValue = parseFloat(document.getElementById('rangeMin').value);
    let maxValue = parseFloat(document.getElementById('rangeMax').value);

    // Pastikan nilai minValue tidak lebih besar dari maxValue
    minValue = Math.min(minValue, maxValue);
    maxValue = Math.max(minValue, maxValue);
    
    document.getElementById('rangeMin').value = minValue;
    document.getElementById('rangeMax').value = maxValue;
    
    document.getElementById('minRangeValue').textContent = minValue.toFixed(2);
    document.getElementById('maxRangeValue').textContent = maxValue.toFixed(2);
}

// Panggil updateRange untuk mengatur nilai awal saat halaman dimuat
updateRange();