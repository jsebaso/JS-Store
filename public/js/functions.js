function deleteProduct(){
    swal({
        title: "Delete product",
        text: "are you sure you want to delete this product",
        icon: "warning",
        buttons: ['Cancel','Confirm'],
        dangerMode: true,
    })    
    .then((willDelete) => {
        if(willDelete){
            $.ajax({
                url:`/product/${id}`,
                type: 'POST',
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                    '_method': 'DELETE',
                },
                success: function(result){
                    swal("the product has been eliminated", {
                        icon: "success",
                    });
                    setTimeout( function (){
                        location.reload()
                    },1000)
                }
            })
            
        } else{
            swal("Your imaginary file is safe!")
        }
    })
}