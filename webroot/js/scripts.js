$(document).ready(function() {
	function urlAtual() {
		return $(location).attr('href').split('?').shift();
	}
	
	function dinheiroParaFloat(money) {
		return parseFloat(money.replace('.', '').replace(',', '.'));
	}

	function calculaPrecoSugerido(precoCompra, lucro) {
		var precoFinal = precoCompra + (precoCompra * (lucro / 100));

		return precoFinal.toFixed(2).replace(/[.]/g, ',');
	}

	function buscaProduto(evento) {
		var url = urlAtual();
    	var busca = $('.search input[name=busca]').serialize();

    	if (evento.type === 'click' ||
    		evento.type === 'keypress' && evento.charCode === 13
    	) {
    		$(location).attr('href', url + '?' + busca);    
    	}
	}

	$('.thousands').mask('0.000.000.000.00', { reverse: true });

	$('.money').maskMoney({
		thousands: '.', 
		decimal:',',
		suffix: ''
	});

	$('.percent').maskMoney({
		thousands: '', 
		decimal:'.',
		suffix: ''
	});

	$('#lucro, #preco-compra').on('keyup', function() {
        var precoCompra = dinheiroParaFloat($('#preco-compra').val());
        var lucro = parseFloat($('#lucro').val());
		var $precoSugerido = $('#preco-sugerido');

        if (precoCompra > 0 && lucro > 0) {
        	$precoSugerido.val(calculaPrecoSugerido(precoCompra, lucro)).maskMoney('mask');
		}
        else {
        	$precoSugerido.val('');
        }
    });

    $('.browse').on('click', function(){
    	$(this).parent().parent().parent().find('.file').trigger('click');
	});

	$('.file').on('change', function(){
		$('.file-name').val($(this).val().replace(/C:\\fakepath\\/i, ''));
	});

	$('.filter input[type=checkbox]').on('change', function() {
        var url = urlAtual();
        var filtro = $('.filter input:checked').serialize();

        if (filtro) {
            $(location).attr('href', url + '?' + filtro);
        }
        else {
            $(location).attr('href', url);
        }
    });

    $('.search button').on('click', buscaProduto);

    $('.search input[name=busca]').on('keypress', buscaProduto);
});