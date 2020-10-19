function stripCheckin(id){
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: `POST`,
        url: `https://paginaswebedwin.com/stripe`,
        data: { 'id': id },
        success: function(response){
            let stripe = Stripe("pk_test_51He2eMHaxFDwtU7SQ3elekbYab9CYhXVnW5F1vg6rdhTrWno1FwiJ1z8vxOSuioqeEiNzVSEMBGFLnLAhACBCK5600hmPqb6RJ");
            stripe.redirectToCheckout({ sessionId: response['ID'] });
        }
    });
}