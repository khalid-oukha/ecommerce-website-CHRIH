$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).on('click', '#deleteFromCart', function (e) {
    e.preventDefault(); // Prevent the default form submission behavior

    var productId = $(this).data('product-id'); // Assuming you set a data-product-id attribute

    // Make AJAX request to remove product from cart
    $.ajax({
        url: '/remove-product-cart',
        type: 'DELETE',
        data: {
            id: productId
        },
        success: function(response) {
            if (response.success) {
                var productContainer = $('[data-product-id="' + productId + '"]');
        
                productContainer.remove();
            }
            console.log(response);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});