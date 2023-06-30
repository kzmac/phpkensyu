//時間を取得してリアルタイムに表示するjs
$(document).on("click", ".custom-btn btn-1", function () {
  setInterval('nowDatetime()');
});

function nowDatetime() {
  $.ajax({
    url: 'getDateTime.php',
    type: 'GET',
    timeout: 10000,
  })
    .done(function (result) {
      showNowDateTime(result);
    });
}

function showNowDateTime(date) {
  document.getElementById('nowDate').textContent = date;
  console.log(date);
}
