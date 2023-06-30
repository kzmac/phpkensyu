//時間を取得してリアルタイムに表示するjs
$(document).on("click", ".custom-btn btn-2", function () {
    setInterval('salaryDate()');
});

function salaryDate() {
    $.ajax({
        url: 'nextSalaryDate.php',
        type: 'GET',
        timeout: 10000,
    })
        .done(function (result) {
            showSalaryDate(result);
        });
}

function showSalaryDate(date) {
    document.getElementById('salaryDate').textContent = date;
    console.log(date);
}
