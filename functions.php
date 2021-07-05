add_action( 'woocommerce_cart_calculate_fees', 'codeithub_add_checkout_fee' );
  
function codeithub_add_checkout_fee() {

   WC()->cart->add_fee( 'Fee', 7 );
}
