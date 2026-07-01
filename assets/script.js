function openModal() {
    document.getElementById('simpleModal').classList.add('active');
    document.getElementById('simpleOverlay').classList.add('active');
}

function closeModal() {
    document.getElementById('simpleModal').classList.remove('active');
    document.getElementById('simpleOverlay').classList.remove('active');
}

function getCoupon() {
    const coupons = [
        'CЕПТИК24',
        'МАСТЕР72',
        'СЕРВИС36',
        'АКАБО47',
        'ДРЕНАЖ64',
        'ФИЛЬТР88',
        'КИРПИЧИ96'
    ]

    const date = new Date();

    return coupons[date.getDay()];
}
