<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <title>今日运势与 TOTO 推荐</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #loading {
            display: none;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-4">
            <h3 class="text-muted">🔮 Today Fortune & TOTO Number Guess for you</h3>
            <p class="text-muted">根据你的出生日期 DateBirth ，智能推荐今日运势与幸运号码, Around 20 seconds</p>
        </div>

        <div class="card p-4 shadow-sm">
            <form id="fortuneForm">
                <div class="mb-3">
                    <label for="birthdate" class="form-label">你的出生日期 Birth Date YYYY/MM/DD</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">生成运势 Calculating</button>
            </form>

            <div id="loading" class="text-center text-secondary mt-4">⏳ 正在为你计算今日运势，请稍候...Trying hard to Calculate</div>
            <div id="result" class="mt-4"></div>
        </div>
    </div>

    <script>
        document.getElementById('fortuneForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var birthdate = document.getElementById('birthdate').value;
            if (!birthdate) return;

            document.getElementById('loading').style.display = 'block';
            document.getElementById('result').innerHTML = '';

            // 1️⃣ 请求 TOTO（快速返回）
            var xhrToto = new XMLHttpRequest();
            xhrToto.open('POST', 'views/home/api_toto.php', true);
            xhrToto.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhrToto.onreadystatechange = function() {
                if (xhrToto.readyState === 4 && xhrToto.status === 200) {
                    var data = JSON.parse(xhrToto.responseText);
                    document.getElementById('result').innerHTML =
                        '<div class="card mb-3"><div class="card-body">' +
                        '<h5 class="card-title">🎯 Today TOTO </h5>' +
                        '<p class="card-text fs-4 text-primary">' + data.toto.join(' - ') + '</p>' +
                        '</div></div>';
                }
            };
            xhrToto.send('birthdate=' + encodeURIComponent(birthdate));

            document.getElementById('loading').innerHTML = '⏳ 正在为你计算今日运势，请稍候... (<span id="countdown">18</span>s)';

            var counter = 21;
            var countdownInterval = setInterval(function() {
                counter--;
                if (counter >= 0) {
                    document.getElementById('countdown').innerText = counter;
                } else {
                    clearInterval(countdownInterval);
                    document.getElementById('loading').style.display = 'none';
                }
            }, 1000);
            // 2️⃣ 请求运势（较慢）
            var xhrFortune = new XMLHttpRequest();
            xhrFortune.open('POST', 'views/home/api_fortune.php', true);
            xhrFortune.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhrFortune.onreadystatechange = function() {
                if (xhrFortune.readyState === 4) {
                    document.getElementById('loading').style.display = 'none';
                    if (xhrFortune.status === 200) {
                        var data = JSON.parse(xhrFortune.responseText);
                        document.getElementById('result').innerHTML +=
                            '<div id="loading" class="text-center text-secondary mt-4" style="display:none;">' +
                            ' ⏳ 正在为你计算今日运势，请稍候... (<span id="countdown">21</span>s)' +
                            '</div>' +
                            '<div class="card"><div class="card-body">' +
                            '<h5 class="card-title">📅 今日运势</h5>' +
                            '<p class="card-text">' + data.fortune.replace(/\n/g, '<br>') + '</p>' +
                            '</div></div>';
                    } else {
                        document.getElementById('result').innerHTML += '<div class="alert alert-danger">❌ 运势获取失败。</div>';
                    }
                }
            };
            xhrFortune.send('birthdate=' + encodeURIComponent(birthdate));
        });
    </script>

</body>

</html>