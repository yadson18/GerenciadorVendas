$(document).ready(function() {
	$.fn.extend({
		alert: function(type, message)
	    {
	        var $alert = $('<div></div>', {
	            class: 'alert alert-dismissable',
	            role: 'alert',
	            html: [
	                $('<button></button>', {
	                    html: $('<i></i>', { class: 'fas fa-times fa-xs' }),
	                    'data-dismiss': 'alert',
	                    'aria-label': 'Close',
	                    type: 'button',
	                    class: 'close'
	                }),
	                $('<div></div>', {
	                    class: 'message-content text-center',
	                    html: [
	                    	$('<i></i>', { class: 'fas' }),
	                    	$('<span></span>', { text: ' ' + message })
	                    ]
	                })
	            ]
	        });

	        switch (type) {
	            case 'success':
	                $alert.addClass('alert-success').find('i').addClass('fa-check-circle');
	                break;
	            case 'error':
	                $alert.addClass('alert-danger').find('i').addClass('fa-exclamation-circle');
	                break;
	            case 'info':
	                $alert.addClass('alert-info').find('i').addClass('fa-info-circle');
	                break;
	            case 'warning':
	                $alert.addClass('alert-warning').find('i').addClass('fa-exclamation-triangle');
	                break;
	        }

	        $(this).empty().append($alert);
	    }
	});
	
	function dinheiroParaFloat(money) {
		return parseFloat(money.replace('.', '').replace(',', '.'));
	}

	function calculaPrecoSugerido(precoCompra, lucro) {
		var precoFinal = precoCompra + (precoCompra * (lucro / 100));

		return precoFinal.toFixed(2).replace(/[.]/g, ',');
	}

	function urlAtual() {
		return $(location).attr('href').split('?').shift();
	}

	function buscaProduto(evento) {
		var url = urlAtual();
    	var $busca = $('.search input[name=busca]');

    	if (evento.type === 'click' ||
    		evento.type === 'keypress' && evento.charCode === 13
    	) {
	    	if ($busca.val().replace(/\s/g, '') !== '') {
		    		$(location).attr('href', url + '?' + $busca.serialize());    	
	    	}
	    	else {
	    		$('.message-box').alert('error', 'Por favor, digite sua busca.');
	    	}
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