// 自動住所入力設定
document.addEventListener('DOMContentLoaded', function() {
    // 自動住所入力設定
    document.getElementById('auto_fill').addEventListener('click', function() {
        const postal = document.getElementById('postal_code').value.replace('-', '');
        if (!postal) return alert('郵便番号を入力してください');

        fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${postal}`)
            .then(res => res.json())
            .then(data => {
                if (data.results) {
                    const result = data.results[0];
                    document.getElementById('prefecture').value = result.address1;
                    document.getElementById('city').value = result.address2;
                    document.getElementById('town').value = result.address3;
                } else {
                    alert('郵便番号から住所が見つかりませんでした');
                }
            })
            .catch(() => alert('住所の自動取得に失敗しました'));
    });

    // バリデートをJavascriptで設定
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form'); // 最初の<form>を取得

        form.addEventListener('submit', function(e) {
            // 各入力値を取得
            const name = document.querySelector('[name="name"]').value.trim();
            const email = document.querySelector('[name="email"]').value.trim();
            const phone = document.querySelector('[name="phone"]').value.trim();
            const postal = document.querySelector('[name="postal_code"]').value.trim();
            const prefecture = document.querySelector('[name="prefecture"]').value.trim();
            const city = document.querySelector('[name="city"]').value.trim();
            const town = document.querySelector('[name="town"]').value.trim();

            // エラーメッセージを入れる配列
            let errors = [];

            // バリデーション条件
            if (!name) errors.push("お名前を入力してください。");

            // メールアドレス形式チェック
            if (!email) {
                errors.push("メールアドレスを入力してください。");
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                errors.push("メールアドレスの形式が正しくありません。");
            }

            // 電話番号：数字とハイフンのみ許可、10～11桁想定
            if (!phone) {
                errors.push("電話番号を入力してください。");
            } else if (!/^[0-9\-]+$/.test(phone) || phone.replace(/-/g, '').length < 10) {
                errors.push("電話番号の形式が正しくありません。");
            }

            // 郵便番号：数字7桁
            if (!postal) {
                errors.push("郵便番号を入力してください。");
            } else if (!/^\d{7}$/.test(postal.replace('-', ''))) {
                errors.push("郵便番号は7桁の数字で入力してください（例：1000001）。");
            }

            if (!prefecture) errors.push("都道府県を入力してください。");
            if (!city) errors.push("市区町村を入力してください。");
            if (!town) errors.push("町域・番地を入力してください。");

            // エラーがあれば送信を止める
            if (errors.length > 0) {
                e.preventDefault(); // フォーム送信を中止
                alert(errors.join("\n"));
            }
        });
    });
});
