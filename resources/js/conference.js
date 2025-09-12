//Speakers
const speakers = document.querySelectorAll('.speaker');

function checkVisibility() {
    const triggerPoint = window.innerHeight * 0.5; // половина экрана

    speakers.forEach(el => {
    const rect = el.getBoundingClientRect();
    if(rect.top <= triggerPoint) {
        el.style.opacity = 1; // делаем видимым
    }
    });
}

window.addEventListener('scroll', checkVisibility);
window.addEventListener('load', checkVisibility);


// Schedule functionality
function showDay(day) {
    // Hide all schedule days
    document.querySelectorAll('.schedule-day').forEach(el => el.classList.add('hidden'));
    
    // Show selected day
    document.getElementById(`day${day}-schedule`).classList.remove('hidden');
    
    // Update button styles
    document.querySelectorAll('[id$="-btn"]').forEach(btn => {
        btn.classList.remove('bg-confprimary', 'text-white');
        btn.classList.add('text-gray-600', 'hover:text-gray-900');
    });
    
    document.getElementById(`day${day}-btn`).classList.add('bg-confprimary', 'text-white');
    document.getElementById(`day${day}-btn`).classList.remove('text-gray-600', 'hover:text-gray-900');
}

// Registration form functionality
let currentStep = 1;
const totalSteps = 13;

function updateProgress() {
    const progress = (currentStep / totalSteps) * 100;
    document.getElementById('progress-bar').style.width = progress + '%';
    document.getElementById('current-step').textContent = currentStep;
    document.getElementById('progress-percent').textContent = Math.round(progress);
}

function showStep(step) {
    // Hide all steps
    document.querySelectorAll('.form-step').forEach(el => el.classList.add('hidden'));
    
    // Show current step
    document.getElementById(`step-${step}`).classList.remove('hidden');
    
    // Update navigation buttons
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const submitBtn = document.getElementById('submit-btn');
    
    if (step === 1) {
        prevBtn.classList.add('hidden');
    } else {
        prevBtn.classList.remove('hidden');
    }
    
    if (step === totalSteps) {
        nextBtn.classList.add('hidden');
        submitBtn.classList.remove('hidden');
    } else {
        nextBtn.classList.remove('hidden');
        submitBtn.classList.add('hidden');
    }
    
    updateProgress();
}

function nextStep() {
    if (validateCurrentStep() && currentStep < totalSteps) {
        currentStep++;
        showStep(currentStep);
    }
}

function previousStep() {
    if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
    }
}

function validateCurrentStep() {
    const currentStepEl = document.getElementById(`step-${currentStep}`);
    const inputs = currentStepEl.querySelectorAll('input[required], select[required], textarea[required]');

    let isValid = true;

    inputs.forEach(input => {
        if (input.type === 'radio') {
            // Проверяем всю группу
            const groupName = input.name;
            const checked = currentStepEl.querySelector(`input[name="${groupName}"]:checked`);
            if (!checked) {
                isValid = false;
            }
        } else if (input.type === 'checkbox') {
            if (!input.checked) {
                isValid = false;
            }
        } else {
            if (!input.value.trim()) {
                isValid = false;
            }
        }
    });

    if (!isValid) {
        // Подсветка ошибки (например, красная рамка)
        currentStepEl.classList.add('animate-shake');
        setTimeout(() => currentStepEl.classList.remove('animate-shake'), 500);
    }

    return isValid;
}

    // Handle radio button styling
document.addEventListener('change', function(e) {
    if (e.target.type === 'radio') {
        // Reset all options in the same group
        const groupName = e.target.name;
        document.querySelectorAll(`input[name="${groupName}"]`).forEach(radio => {
            const option = radio.parentElement.querySelector('.gender-option, .age-option, .maritalstatus-option, .sleep-option');
            if (option) {
                option.classList.remove('border-confprimary', 'bg-blue-50');
                option.classList.add('border-gray-300');
            }
        });
        
        // Highlight selected option
        const selectedOption = e.target.parentElement.querySelector('.gender-option, .age-option, .maritalstatus-option, .sleep-option');
        if (selectedOption) {
            selectedOption.classList.add('border-confprimary', 'bg-blue-50');
            selectedOption.classList.remove('border-gray-300');
        }
    }
});

// Handle form submission
function collectFormData() {
    const formData = new FormData();
    
    // Получаем все шаги формы
    document.querySelectorAll('.form-step').forEach(step => {
        // Ищем все input, select, textarea
        step.querySelectorAll('input, select, textarea').forEach(input => {
            if (!input.name) return; // пропускаем, если нет name
            if (input.type === 'radio') {
                if (input.checked) formData.append(input.name, input.value);
            } else if (input.type === 'checkbox') {
                formData.append(input.name, input.checked ? 1 : 0);
            } else {
                formData.append(input.name, input.value.trim());
            }
        });
    });

    return formData;
}

// Пример обработки сабмита формы
document.getElementById('registration-form').addEventListener('submit', async function(e) {
    e.preventDefault();

    // Валидация последнего шага
    if (!validateCurrentStep()) return;

    // Собираем данные
    const data = collectFormData();

    // Пример отправки на сервер через fetch
    
    try {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const response = await fetch('/conference/registration', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: data,
        });

        if (response.ok) {
            const result = await response.json();
            if (result.success) {
                window.location.replace("/conference/success");
            }else{
                window.location.replace("/conference/fial");
            }
        }else if (response.status === 422) {
        // Ошибки валидации
            const errorData = await response.json();
            console.error("⚠️ Ошибки валидации:", errorData.errors);

            // Показываем все ошибки через тосты
            Object.values(errorData.errors).forEach(messages => {
                messages.forEach(msg => showToast(msg, "error"));
            });
        } else {
            const errorText = await response.text();
            console.error("❌ Ошибка:", errorText);
            alert('Ошибка при отправке формы.');
        }
    } catch (err) {
        console.error('Ошибка отправки формы:', err);
        alert('Произошла ошибка, попробуйте еще раз.');
    }
});

// Initialize
showStep(1);

function scrollTrigger() {
    return {
        show: false,
        init() {
            const section = document.querySelector("section");
            const onScroll = () => {
                const rect = section.getBoundingClientRect();
                const triggerPoint = window.innerHeight * 0.6; // 40% экрана
                if (rect.top < triggerPoint) {
                    this.show = true;
                    window.removeEventListener("scroll", onScroll);
                }
            };
            window.addEventListener("scroll", onScroll);
        }
    }
}
        
function scheduleTabs() {
    return {
        headerVisible: false,
        animate: false,
        activeDay: 1,
        days: [
            {
                id: 1,
                label: "31",
                events: [
                    { title: "Регистрация", subtitle: "Кофе-брейк, общение", time: "16:00" },
                    { title: "Сессия 1 - Открытие", subtitle: "Участие молодёжного хора и оркестра Церкви Брянск-1", time: "18:00" },
                    { title: "Свободное время", subtitle: "кофе брейк/время для знакомства, общения", time: "20:00" },
                    // { title: "Lunch Break", subtitle: "Community meal", time: "12:30 PM" },
                ]
            },
            {
                id: 2,
                label: "1",
                events: [
                    { title: "Утреннее общение", subtitle: "За чашечкой кофе", time: "9:00" },
                    { title: "Сессия 2", subtitle: 'Проповедь "Бойся Бога"', time: "10:00" },
                    { title: "Общение", subtitle: "Кофе-брейк", time: "11:30" },
                    { title: "Семминары", subtitle: "По определенным темам", time: "12:00" },
                    { title: "Обед", subtitle: "", time: "13:00" },
                    { title: "Круглый стол", subtitle: "Ответы на ваши вопросы", time: "14:30" },
                    { title: "Общение", subtitle: "Кофе-брейк", time: "16:00" },
                    { title: "Сессия 3", subtitle: 'Проповедь "Место Божьего Слова в моей жизни"', time: "17:00" },
                    { title: "Общение", subtitle: "Кофе-брейк, настолки, спортивные мероприятия(волейбол, каток)", time: "19:00" },
                ]
            },
            {
                id: 3,
                label: "2",
                events: [
                    { title: "Посещение местных церквей", subtitle: "В этот день у всех присутствующих на конференции будет возможность посетить поместные Церкви и поучавствовать в Заповеди Господней.", time: "" },
                    { title: "Обед", subtitle: 'С молодёжью поместной церкви', time: "12:00" },
                    { title: "Выезд в город", subtitle: "Совместный выезд в город / прогулка по городу", time: "14:00" },
                    { title: "Сессия 4", subtitle: "Закрытыие конференции", time: "17:00" },
                    { title: "Ужин", subtitle: "Разъезд участников конференции", time: "19:00" },
                ]
            }
        ],

        init() {
            const section = this.$el;

            const checkScroll = () => {
                const sectionTop = section.getBoundingClientRect().top;
                const triggerPoint = window.innerHeight * 0.5; // верх секции пересек 40% окна
                if (sectionTop < triggerPoint && !this.headerVisible) {
                    this.headerVisible = true;
                    this.startAnimation();
                    window.removeEventListener('scroll', checkScroll);
                    window.removeEventListener('resize', checkScroll);
                }
            };

            window.addEventListener('scroll', checkScroll, { passive: true });
            window.addEventListener('resize', checkScroll);

            // проверяем сразу при загрузке страницы
            checkScroll();
        },

        startAnimation() {
            this.animate = false;
            setTimeout(() => this.animate = true, 50);
        },

        setDay(id) {
            this.activeDay = id;
            this.startAnimation();
        }
    }
}
const phoneInput = document.getElementById('phone');

phoneInput.addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, ''); // оставляем только цифры

    // Если первая цифра — 8 или 7, заменяем на +7
    if (value.startsWith('8')) {
        value = '7' + value.slice(1);
    } else if (!value.startsWith('7')) {
        value = '7' + value;
    }

    // Ограничиваем до 11 цифр
    value = value.slice(0, 11);

    // Форматируем как +7XXXXXXXXXX
    e.target.value = '+' + value;
});