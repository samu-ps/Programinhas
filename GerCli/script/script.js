document.getElementById('cpfFunc').addEventListener('input',function (e) {
    let value=e.target.value.replace(/\D/g,''); // Remove letras
    
    if(value.length>11) {
        value=value.slice(0,11);
    }
    value=value.replace(/^(\d{3})(\d)/, '$1.$2');
    value=value.replace(/^(\d{3})\.(\d{3})(\d)/, '$1.$2.$3');
    value=value.replace(/^(\d{3})\.(\d{3})\.(\d{3})(\d)/, '$1.$2.$3-$4');
    e.target.value=value;
});
// Máscara Telefone
document.getElementById('foneFunc').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value.length > 11) {
        value = value.slice(0, 11);
    }
    if (value.length > 10) {
        value = value.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
    } else if (value.length > 6) {
        value = value.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
    } else if (value.length > 2) {
        value = value.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
    } else {
        value = value.replace(/^(\d*)/, '($1');
    }
    e.target.value = value;
});