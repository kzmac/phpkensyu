<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" type="text/css" href="../css/index.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src='../js/nowDatetime.js'></script>
<script src='../js/salaryDate.js'></script>
<head>
  <meta charset="UTF-8" /> </head>
<div class="frame1"> <input class="custom-btn btn-1" type="button" value="現在の時間は?" onclick="nowDatetime();" /> <output class="outPutToDate" id="nowDate" /> </div>
<div class="frame2"> <input class="custom-btn btn-2" type="button" value="次の給料日は？" onclick="salaryDate();" /> <output class="outPutSalaryDate" id="salaryDate" /> </div>
</html>