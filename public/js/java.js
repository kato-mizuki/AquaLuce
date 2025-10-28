document.addEventListener("DOMContentLoaded", function() {
  const faders = document.querySelectorAll(".fade-in, .slide-left, .slide-right");

  const appearOptions = {
    threshold: 0.2, // 画面に20%入ったら発動
    rootMargin: "0px 0px -50px 0px"
  };

  const appearOnScroll = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add("show");
      observer.unobserve(entry.target);
    });
  }, appearOptions);

  faders.forEach(fader => {
    appearOnScroll.observe(fader);
  });
});

// 商品カードのアニメーション設定 + ボタン操作
document.addEventListener('DOMContentLoaded', function() {
  const cards = Array.from(document.querySelectorAll('.product-card'));
  const cardsPerPage = 3;
  let currentIndex = 0;
  const intervalTime = 5000; // 5秒ごとに切り替え
  let autoSlide;

  // 表示更新
  function showCards() {
    cards.forEach((card, i) => {
      card.classList.remove('active');
      card.style.display = 'none';
    });

    for (let i = currentIndex; i < currentIndex + cardsPerPage; i++) {
      const card = cards[i % cards.length];
      card.style.display = 'block';
      setTimeout(() => card.classList.add('active'), 50);
    }
  }

  // 次へ
  function nextSlide() {
    currentIndex = (currentIndex + cardsPerPage) % cards.length;
    showCards();
  }

  // 前へ
  function prevSlide() {
    currentIndex = (currentIndex - cardsPerPage + cards.length) % cards.length;
    showCards();
  }

  // 自動スライド
  function startAutoSlide() {
    autoSlide = setInterval(nextSlide, intervalTime);
  }

  function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
  }

  // ボタンイベント
  const nextBtn = document.querySelector('.next-btn');
  const prevBtn = document.querySelector('.prev-btn');

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      nextSlide();
      resetAutoSlide();
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      prevSlide();
      resetAutoSlide();
    });
  }

  showCards();
  startAutoSlide();
});
//カート内計算設定
document.querySelectorAll('.quantity').forEach(input => {
  input.addEventListener('input', () => {
    const id = input.dataset.id;
    const quantity = input.value;

    fetch('{{ route("cart.update") }}', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ id, quantity })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        // 小計と合計を更新
        input.closest('tr').querySelector('.subtotal').textContent = data.subtotal;
        document.getElementById('total').textContent = data.total;
      }
    });
  });
});

document.getElementById('purchaseBtn').addEventListener('click', () => {
  fetch('{{ route("cart.purchase") }}', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': '{{ csrf_token() }}'
    }
  })
  .then(res => res.json())
  .then(data => {
    if (data.success) {
      alert('購入処理が完了しました！');
      window.location.href = '/thanks';
    }
  });
});
// お気に入り機能設定
document.addEventListener('DOMContentLoaded', function() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    document.querySelectorAll('.favorite-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = this.dataset.id;
            const isFavorited = this.classList.contains('favorited');

            const url = isFavorited
                ? `/favorites/remove/${productId}`
                : `/favorites/add/${productId}`;

            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
            })
            .then(res => res.ok ? res.json().catch(() => ({})) : Promise.reject())
            .then(data => {
                if ((data.status === 'added' && !isFavorited) || (data.status === 'removed' && isFavorited)) {
                    this.classList.toggle('favorited');
                    const icon = this.querySelector('i');
                    icon.classList.toggle('fas');
                    icon.classList.toggle('far');
                }
            })
            .catch(err => console.error('お気に入り更新失敗:', err));
        });
    });
});
// 星評価のJavaScript
document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.stars .star');
    const ratingInput = document.getElementById('rating');

    stars.forEach((star, index) => {
        // クリックで評価セット
        star.addEventListener('click', function() {
            const value = parseInt(this.dataset.value);
            ratingInput.value = value;

            stars.forEach((s, i) => {
                s.textContent = i < value ? '★' : '☆';
            });
        });

        // ホバー時に一時的に★にする
        star.addEventListener('mouseover', function() {
            const value = parseInt(this.dataset.value);
            stars.forEach((s, i) => {
                s.textContent = i < value ? '★' : '☆';
            });
        });

        // ホバーアウトで実際の評価に戻す
        star.addEventListener('mouseout', function() {
            const currentValue = parseInt(ratingInput.value) || 0;
            stars.forEach((s, i) => {
                s.textContent = i < currentValue ? '★' : '☆';
            });
        });
    });
});
// 自動住所入力設定
document.getElementById('auto_fill').addEventListener('click', function() {
    const postal = document.getElementById('postal_code').value.replace('-', '');
    if (!postal) return alert('郵便番号を入力してください');

    // 郵便番号APIにリクエスト
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
// ボタンクリック時
document.getElementById('auto_fill').addEventListener('click', fetchAddress);

// Enterキー押下時
document.getElementById('postal_code').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault(); // フォーム送信防止
        fetchAddress();
    }
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
