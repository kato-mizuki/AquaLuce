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
ocument.querySelectorAll('.quantity').forEach(input => {
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