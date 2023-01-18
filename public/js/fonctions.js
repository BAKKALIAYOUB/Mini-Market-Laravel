

function addToCard(elt){



    $id = parseInt($(elt).attr("id"));

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
        }
    });
    
    $.ajax({
        type: "POST",
        url: "test",
        data: { 
            id: $id,
        }
    });

    window.location.reload();
    }