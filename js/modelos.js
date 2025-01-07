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
    const termo = document.getElementById("barraPesquisa").value.trim();
    if (!termo) {
        alert("Por favor, insira um termo para pesquisar.");
        return;
    }

    // Normaliza o termo para a pesquisa
    const termoNormalizado = normalizarTexto(termo);

    // Remove destaques anteriores
    document.querySelectorAll("mark.highlight").forEach((highlight) => {
        const parent = highlight.parentNode;
        parent.replaceChild(document.createTextNode(highlight.textContent), highlight);
    });

    // Localiza o termo no documento
    const bodyContent = document.body;
    let encontrado = false;


    const walker = document.createTreeWalker(bodyContent, NodeFilter.SHOW_TEXT, null, false);
    while (walker.nextNode()) {
        
        const node = walker.currentNode;
        const textoNormalizado = normalizarTexto(node.textContent);

        if (textoNormalizado.includes(termoNormalizado)) {
            encontrado = true;
            
            // Substituir o texto pelo destaque
            const parent = node.parentNode;
            const regex = new RegExp(termoNormalizado, "gi");
            const newHTML = node.textContent.replace(
                regex,
                (match) => `<mark class="highlight">${match}</mark>`
            );
            const tempDiv = document.createElement("div");
            tempDiv.innerHTML = newHTML;
            while (tempDiv.firstChild) {
                parent.insertBefore(tempDiv.firstChild, node);
            }
            parent.removeChild(node);
        }
    }

    // Foca no primeiro destaque
    const firstHighlight = document.querySelector("mark.highlight");
    if (firstHighlight) {
        firstHighlight.scrollIntoView({ behavior: "smooth", block: "center" });
    } else {
        alert("Nenhum resultado encontrado.");
    }
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