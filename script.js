function getPendingStatus() {
  $.ajax({

    url:"getPending.php",
    method: "GET",
    success:function(inData) {

      var statusPagamenti = JSON.parse(inData);
      console.log(statusPagamenti);

      //handlebars
      var contStatus = $('.container-status');
      var template = $('#templateStatus').html();
      var compiled = Handlebars.compile(template);

      for(var i = 0; i < statusPagamenti.length; i++){

      //Esiste anche l'altra variante dove posso cambiare il nome alla colonna ma ora non mi ricordo
      var data = {
          status: statusPagamenti[i]["status"],
          price: statusPagamenti[i]["price"]
          }

      var finalHTML = compiled(data);

        //appendo il tutto
      contStatus.append(finalHTML);
      }

    }, //end success
    error:function() {

    }//end error

  });//end ajax
}

function init(){
  getPendingStatus();
}

$(document).ready(init);
