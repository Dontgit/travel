const toggleButton = document.getElementById('toggleButton');
const collapseContent = document.getElementById('collapseContent');

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
    collapseContent.addEventListener('shown.bs.collapse', function () {
        toggleButton.innerHTML = '<i class="fa-solid fa-angle-down"></i> See Less';
    });
    collapseContent.addEventListener('hidden.bs.collapse', function () {
        toggleButton.innerHTML = '<i class="fa-solid fa-angle-right"></i> See More';
    });
// Panggil updateRange untuk mengatur nilai awal saat halaman dimuat
updateRange();