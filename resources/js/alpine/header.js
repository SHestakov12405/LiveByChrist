// resources/js/alpine/header.js
Alpine.data('header', () => ({
  headerVisible: false,
  init() {
    // Показываем шапку после инициализации (или добавь логику скролла)
    this.headerVisible = true;

    // Пример: прячем шапку при скролле вниз, показываем при скролле вверх
    let lastY = window.scrollY;
    window.addEventListener('scroll', () => {
      const cur = window.scrollY;
      this.headerVisible = (cur < lastY) || (cur < 100);
      lastY = cur;
    });
  }
}));
