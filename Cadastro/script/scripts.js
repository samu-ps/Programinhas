// função de máscara cpf/telefone

// Máscara CPF
document.getElementById('cpf').addEventListener('input',function (e) {
    let value=e.target.value.replace(/\D/g,''); // Remove letras
    
    if(value.length>11) {
        value=value.slice(0,11); // 11 dígitos
    }

    // Adiciona os pontos e o traço
    value=value.replace(/^(\d{3})(\d)/, '$1.$2');
    value=value.replace(/^(\d{3})\.(\d{3})(\d)/, '$1.$2.$3');
    value=value.replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d)/, '$1.$2.$3-$4');
    
    e.target.value=value;
});
// Máscara Telefone
document.getElementById('telefone').addEventListener('input',function (e) {
    let value=e.target.value.replace(/\D/g,''); // Remove letras

    if (value.length>11) {
        value=value.slice(0,11); // 11 dígitos
    }
    // Máscara nos números
    value=value.replace(/^(\d{2})(\d)/, '($1) $2');
    value=value.replace(/^(\(\d{2}\) )(\d{5})(\d)/, '$1$2-$3');
    
    e.target.value = value;
});
