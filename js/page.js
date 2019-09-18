
function sponsorsFormAppear(){
  var form = document.getElementById('sponsors-form');
  var background = document.getElementById('sponsors-form-background');
  background.className = 'form-background';
  form.className = 'formulaire';
  window.scrollTo(0,350);
}

function sponsorsFormDisappear(){
  var form = document.getElementById('sponsors-form');
  var background = document.getElementById('sponsors-form-background');
  form.className = 'formulaire hidden';
  background.className = 'form-background hidden';
}

$("#form-artist").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
    url: "../functions/sendArtistData.php",
    type: "POST",
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
  });
}));
//
// var sendArtistInfos = function(){
//   var artist_name = document.getElementById('artistName').value;
//   // var member_number = parseInt(document.getElementById('memberNumber').value);
//   // var artist_phone = document.getElementById('phone').value;
//   var artist_mail = document.getElementById('mail').value;
//   // var artist_youtube = document.getElementById('youtube').value;
//   // var artist_soundcloud = document.getElementById('soundcloud').value;
//   var artist_musictype = document.getElementById('musicType').value;
//   // var artist_adress = document.getElementById('adress').value;
//   // var artist_demo = $("#demo").prop("files")[0];
//   var form_data = new FormData($('form-artist')[0]);
//   // form_data.append('file', artist_demo);
//   // form_data.append('artistName', artist_name);
//   // form_data.append('memberNumber', member_number);
//   // form_data.append('phone', artist_phone);
//   // form_data.append('mail', artist_mail);
//   // form_data.append('youtube', artist_youtube);
//   // form_data.append('soundcloud', artist_soundcloud);
//   // form_data.append('musicType', artist_musictype);
//   // form_data.append('adress', artist_adress);
//
//   if (artist_name == "" || artist_mail == "" || artist_musictype == "") {
//     if (document.getElementById('titre-form').innerHTML == "") {
//       var errormsg = document.createTextNode("Merci de bien vouloir remplir tous les champs.");
//       document.getElementById("titre-form").appendChild(errormsg);
//     }
//     window.scrollTo(0,430);
//   }else{
//     $.ajax({
//       url: "../functions/sendArtistData.php",
//       type: "POST",
//       dataType: 'script',
//       cache: false,
//       contentType: false,
//       processData: false,
//       data: form_data,
//       success: function(data, test){
//         confirmFormAppear();
//       }
//     });
//   }
// }

var sendBarInfos = function(){
  salle_gerant = document.getElementById('gerantName').value;
  salle_mail = document.getElementById('mail').value;
  salle_phone = document.getElementById('phone').value;
  salle_name = document.getElementById('barName').value;
  salle_musicType = document.getElementById('musicType').value;

  if (document.getElementById('sceneTrue').checked) {
    scene = document.getElementById('sceneTrue').value
  }else if (document.getElementById('sceneFalse').checked){
    scene = document.getElementById('sceneFalse').value
  }else{
    scene = "";
  }

  if (document.getElementById('materielTrue').checked) {
    materiel = document.getElementById('materielTrue').value
  }else if(document.getElementById('materielFalse').checked){
    materiel = document.getElementById('materielFalse').value
  }else{
    materiel = "";
  }

  if (salle_gerant == "" || salle_mail == "" || salle_name == "" || salle_musicType == "" || scene == "" || materiel == "") {
    if (document.getElementById('titre-form').innerHTML == "") {
      var errormsg = document.createTextNode("Merci de bien vouloir remplir tous les champs.");
      document.getElementById("titre-form").appendChild(errormsg);
    }
    window.scrollTo(0,430);
  }else{
    $.ajax({
          url: "../functions/sendBarData.php",
          type: "POST",
          data: {gerantName: salle_gerant,
                mail: salle_mail,
                phone: salle_phone,
                barName: salle_name,
                scene: scene,
                musicType: salle_musicType,
                materiel: materiel},
          success: function(data, test){
            confirmFormAppear();
          }
    });
  }
}

var sendSponsorInfos = function(){
  brand_name = document.getElementById('brandName').value;
  brand_mail = document.getElementById('mail').value;
  brand_phone = document.getElementById('phone').value;
  brand_motivation = document.getElementById('motivation').value;

  if (brand_name == "" || brand_mail == "" || brand_phone == "" || brand_motivation == "") {
    if (document.getElementById('titre-form').innerHTML == "") {
      var errormsg = document.createTextNode("Merci de bien vouloir remplir tous les champs.");
      document.getElementById("titre-form").appendChild(errormsg);
    }
    window.scrollTo(0,430);
  }else{
    $.ajax({
        url: "../functions/sendSponsorData.php",
        type: "POST",
        data: {brandName: brand_name,
              mail: brand_mail,
              phone: brand_phone,
              motivation: brand_motivation},
        success: function(data, test){
          confirmFormAppear();
        }
    });
  }
}

function confirmFormAppear(){
  var form = document.getElementById('confirm-form');
  var background = document.getElementById('confirm-form-background');
  form.className = 'confirm-form';
  background.className = 'confirm-form-background';
  window.scrollTo(0,520);
}
