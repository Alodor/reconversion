$().ready(() => {
    
    function cacular() {
        var valor = parseInt($('#valor').val())        
        var respuesta = $('#response')
        var resultado
        
        resultado = valor / 100000  
        
        respuesta.text(resultado + ' BsS')
        respuesta.slideDown()
    }
    
    $('#valor').keyup(() => {
        cacular()        
    })
    
    $('#calcular').click(() => {
        cacular()
    })
    
})