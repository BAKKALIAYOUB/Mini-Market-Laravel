

function addToCard(elt){
    $numCommande = $(".badge ").text();
    $commande  = $(".badge")
    $nouveau = parseInt($numCommande) + 1;

    $commande.text($nouveau);


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


    }