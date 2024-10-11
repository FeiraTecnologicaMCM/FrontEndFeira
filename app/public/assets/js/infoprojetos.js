// Abrir o pop-up ao clicar no botão votar
document.getElementById('btnVo').onclick = function() {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('popupOverlay').style.display = 'block';
};

// Fechar o pop-up ao clicar no botão voltar
document.getElementById('btnVoltar').onclick = function() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('popupOverlay').style.display = 'none';
};

// Função para confirmar o voto
document.getElementById('btnConfirmar').onclick = function() {
    alert('Voto confirmado!'); // Aqui pode ser substituído por uma lógica de votação real
    document.getElementById('popup').style.display = 'none';
    document.getElementById('popupOverlay').style.display = 'none';
};