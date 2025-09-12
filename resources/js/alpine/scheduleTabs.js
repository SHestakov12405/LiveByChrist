export default function registerScheduleTabs(){
  Alpine.data('scheduleTabs', () => ({
    // состояние/методы
    active: 0,
    days: ['Пятница','Суббота','Воскресенье'],
    init() {
      console.log('scheduleTabs inited');
    },
    // ...
  }));
}

if (window.Alpine) {
  // если Alpine уже доступен — регистрируем сразу
  registerScheduleTabs();
} else {
  // если Alpine ещё не доступен (редкий кейс) — отложим регистрацию
  window.addEventListener('alpine:initializing', registerScheduleTabs);
}