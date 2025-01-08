function normalizarTexto(texto) {
    // Remove acentos, converte para minúsculas e remove espaços extras
    return texto
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "")
        .toLowerCase()
        .replace(/\s+/g, " "); 
}

function pesquisar(event) {
    event.preventDefault(); // Impede o envio do formulário

    // Obtém o termo pesquisado
    const termo = document.getElementById("barraPesquisa").value.trim().toLowerCase();
    if (!termo) {
        alert("Por favor, insira um termo para pesquisar.");
        return;
    }

    // Seleciona todos os telemóveis
    const telemoveis = document.querySelectorAll(".col-md-4");

    // Remove todas as sombras existentes
    document.querySelectorAll(".shadow-lg").forEach(shadow => shadow.remove());

    let encontrado = false;
    let visiveis = 0;

    // Itera sobre os telemóveis e aplica o filtro
    telemoveis.forEach(telemovel => {
        const nome = telemovel.querySelector("h3").textContent.toLowerCase();
        if (nome.includes(termo)) {
            telemovel.style.display = "block"; // Mostra o telemóvel correspondente
            encontrado = true;
            visiveis++; // Incrementa o contador de telemóveis visíveis
        } else {
            telemovel.style.display = "none"; // Esconde os outros
        }
    });

    if (!encontrado) {
        alert("Nenhum resultado encontrado.");
        return;
    }

    // Adiciona sombras após cada grupo de 3 telemóveis visíveis
    const telemoveisVisiveis = Array.from(telemoveis).filter(telemovel => telemovel.style.display === "block");
    telemoveisVisiveis.forEach((telemovel, index) => {
        if ((index + 1) % 3 === 0) {
            const shadow = document.createElement("div");
            shadow.className = "shadow-lg p-3 mb-5 bg-body-tertiary rounded";
            telemovel.parentNode.insertBefore(shadow, telemovel.nextSibling);
        }
    });
}
 //Menu responsivo
 document.addEventListener('DOMContentLoaded', function () {
    var collapseToggle = document.querySelector('[data-bs-toggle="collapse"]');
    if (collapseToggle) {
        collapseToggle.addEventListener('click', function () {
            var target = document.querySelector(this.getAttribute('data-bs-target'));
            if (target) {
                target.classList.toggle('show');
            }
        });
    }
});