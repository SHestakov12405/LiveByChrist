
Alpine.data('init', () => ({
  ready: false,
  init() {
    this.ready = true;
    console.log('init() component initialized');
    // любые глобальные стартовые задачи можно положить сюда
  }
}));