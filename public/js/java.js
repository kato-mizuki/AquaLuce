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

//商品カードのアニメーション設定
document.addEventListener('DOMContentLoaded', function() {
  const cards = Array.from(document.querySelectorAll('.product-card'));
  const cardsPerPage = 3;
  let currentIndex = 0;
  const intervalTime = 5000; // 5秒ごとに切り替え

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

  function nextSlide() {
    currentIndex = (currentIndex + cardsPerPage) % cards.length;
    showCards();
  }

  showCards();
  setInterval(nextSlide, intervalTime);
});