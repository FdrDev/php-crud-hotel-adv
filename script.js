function getPendingStatus() {
  var contStatus = $('.container-status');
  contStatus.find(".pagamenti").remove();
  $.ajax({

    url:"getPending.php",
    method: "GET",
    success:function(inData) {

      var statusPagamenti = JSON.parse(inData);
      console.log(statusPagamenti);

      //handlebars
      contStatus = $('.container-status');
      var template = $('#templateStatus').html();
      var compiled = Handlebars.compile(template);

      for(var i = 0; i < statusPagamenti.length; i++){

      // Esiste anche l'altra variante dove posso cambiare il nome alla colonna ma ora non mi ricordo
      // var data = {
      //     status: statusPagamenti[i]["status"],
      //     price: statusPagamenti[i]["price"]
      //     }

      var data = statusPagamenti[i];

      var finalHTML = compiled(data);

        //appendo il tutto
      contStatus.append(finalHTML);
      }

    }, //end success
    error:function() {

    }//end error

  });//end ajax
}

function priceClick(){

  var me = $(this);
  var id = me.data("id");
  console.log("Id", id);
}

function printCreateAt(){
  var me = $(this);
  var id = me.data("id");
  $.ajax({

    url:"getCreateAt.php",
    method:"POST",
    data : {id:id},
    success:function(data){

      var created_atLi = JSON.parse(data);


      var createLiHtml = me.find(".create_at");
      createLiHtml.text(created_atLi[0]["created_at"]);


    },
    error:function(){}

  });
}

function deletePagamento(){
  var me = $(this);
  var id = me.parent().data("id");

  $.ajax({

    url:"deletePagamenti.php",
    method:"POST",
    data : {id:id},
    success:function(){
    console.log(id);
    getPendingStatus();

    },
    error:function(){}

  });



}

function updatePrice(){
  var me = $(this);
  var id = me.parent().data("id");
  var newPrice = prompt("New Price?");

  $.ajax({

    url:"updatePagamenti.php",
    method:"POST",
    data : {
            id:id,
            price: newPrice
            },
    success:function(){
    console.log(id);
    getPendingStatus();

    },
    error:function(){}

  });

}

function init(){
  getPendingStatus();
  // $(document).on("click", ".pagamenti", priceClick);
  $(document).on("click", ".pagamenti", printCreateAt);
  $(document).on("click", ".pagamenti .delete", deletePagamento);
  $(document).on("click", ".pagamenti .edit", updatePrice);

}

$(document).ready(init);
