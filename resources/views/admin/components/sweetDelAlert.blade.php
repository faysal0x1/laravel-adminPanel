<script>
    function deleteAlert(event, id){
        event.preventDefault();
        swal("Are You Sure Wou want to delete?","You cannot revert the process after deletion!","warning", {
        buttons: {
            no: true,
            delete: true
        },
        })
        .then((value) => {
        switch (value) {
            case "no":
                swal("Phew! That was a close call"," ","error",{
                    buttons: false,
                    timer: 1250,
                    });
                break;

            case "delete":
                swal("Delete Successful"," ", "success",{
                    buttons: false,
                    timer: 1200,
                });
                setTimeout(function() {
                    document.querySelector('#del'+id).submit();
                }, 750);
                break;
        
            default:
                swal("Deletion Failed"," ","error",{
                    buttons: false,
                    timer: 1250,
                });
        }
        });
    }
</script>