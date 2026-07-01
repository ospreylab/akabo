function openModal() {
    document.getElementById('simpleModal').classList.add('active');
    document.getElementById('simpleOverlay').classList.add('active');
}

function closeModal() {
    document.getElementById('simpleModal').classList.remove('active');
    document.getElementById('simpleOverlay').classList.remove('active');
}

function getCoupon() {
    const coupons = {
        0: "CЕПТИК24",
        1: "МАСТЕР72",
        2: "СЕРВИС36",
        3: "АКАБО47",
        4: "ДРЕНАЖ64",
        5: "ФИЛЬТР88",
        6: "КИРПИЧИ95"
    }

    const date = new Date();

    return coupons[date.getDay()];
}
