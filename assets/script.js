function openSimpleModal() {
    document.getElementById('simpleModal').classList.add('active');
    document.getElementById('simpleOverlay').classList.add('active');
}

function closeSimpleModal() {
    document.getElementById('simpleModal').classList.remove('active');
    document.getElementById('simpleOverlay').classList.remove('active');
}