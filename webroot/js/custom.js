function addToCart(product_id, name, qtd, price, redirect) {
    $.ajax({
        url: "/carts/add/" + product_id + "/" + redirect,
        type: "GET",
        success: function (data, text) {
            var total_carrinho_string = $('#cart_total').text();
            var total = parseFloat(total_carrinho_string.replace(",", ".").replace(" ",""));
            $('#cart_total').text(parseFloat(total + price).toFixed(2));
            Toastify({
                    text: "Produto adicionado no carrinho com sucesso",
                    duration: 5000,
                    className: "bg-success",
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "center", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                }
            ).showToast();
            if($('#cart_'+product_id).length){
                var qtd_old = parseInt($('#cart_qtd_'+product_id).text());
                $('#cart_qtd_'+product_id).text(qtd_old + qtd);
                var total_produto_string = $('#cart_total_'+product_id).text();
                total = parseFloat(total_produto_string.replace(",", ".").replace(" ",""));
                $('#cart_total_'+product_id).text(parseFloat(total + price).toFixed(2));
            }else{
                $('#cart').append(
                    '<div id="cart_'+product_id+'" class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">\n' +
                    '   <div class="d-flex align-items-center">\n' +
                    '       <div class="flex-1">\n' +
                    '           <h6 class="mt-0 mb-1 fs-14">\n' +
                    '               <a id="cart_product_'+product_id+'" href="/products/view/'+product_id+'" class="text-reset">'+name+'</a>\n' +
                    '           </h6>\n' +
                    '           <p class="mb-0 fs-12 text-muted">\n' +
                    '               Quantidade: <span id="cart_qtd_'+product_id+'">1</span> x <span id="cart_price_3">'+parseFloat(price).toFixed(2)+'</span>\n' +
                    '           </p>\n' +
                    '       </div>\n' +
                    '       <div class="px-2">\n' +
                    '           <h5 class="m-0 fw-normal">R$<span id="cart_total_'+product_id+'" class="cart-item-price">'+parseFloat(price).toFixed(2)+'</span></h5>\n' +
                    '       </div>\n' +
                    '       <div class="ps-2">\n' +
                    '           <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary"><i class="ri-close-fill fs-16"></i></button>\n' +
                    '       </div>\n' +
                    '   </div>\n' +
                    '</div>'
                );


                $('#cart_total_itens_1').text(parseInt($('#cart_total_itens_1').text()) + 1);
                $('#cart_total_itens_2').text(parseInt($('#cart_total_itens_2').text()) + 1);
            }
        },
        error: function (request, status, error) {
            alert("Erro ao tentar adicionar produto no carrinho!!");
        }
    });
}