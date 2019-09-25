function detailAppear(identifier){
  var div = document.getElementById('details' + identifier);
  var result = document.getElementById('results' + identifier);
  var cross = document.getElementById('cross' + identifier);
  var trash = document.getElementById('trash' + identifier);
  div.className = 'detail-visible';
  result.className = 'result-left';
  cross.className = 'cross-detail-visible';
  trash.className = 'trash-detail-visible';
}

function detailDisappear(identifier){
  var div = document.getElementById('details' + identifier);
  var result = document.getElementById('results' + identifier);
  var cross = document.getElementById('cross' + identifier);
  var trash = document.getElementById('trash' + identifier);
  div.className = 'detail-hidden';
  result.className = 'result';
  cross.className = 'cross-detail';
  trash.className = 'cross-detail';
}

function suppressAppear(artistId, artistName, divId, index){
  var div = document.getElementById('supressConfirm');
  var background = document.getElementById('backgroundSuppress');
  div.className = 'suppress-confirm-appear';
  background.className = 'background-suppress-appear';
  var txt = document.createTextNode("Etes-vous sur de vouloir supprimer: " + artistName + " ?");
  document.getElementById("groupeName").appendChild(txt);
  document.getElementById('suppressYes').setAttribute('onclick','deleteArtist('+artistId+','+divId+',\''+index+'\')')
}

function suppressDisappear(){
  var div = document.getElementById('supressConfirm');
  var background = document.getElementById('backgroundSuppress');
  div.className = 'suppress-confirm';
  background.className = 'background-suppress';
  var txt = document.getElementById('groupeName');
  txt.removeChild(txt.childNodes[0]);
}

function deleteArtist(artistId, divId, index){
  var url = "../../functions/delete"+index+".php";
  if (index == "Artist") {
    var data = {
        'artist_id' : artistId
      };
  }else if (index == "Bar") {
    var data = {
        'bar_id' : artistId
      };
  }else if (index == "Sponsor") {
    var data = {
        'sponsor_id' : artistId
      };
  }
  $.ajax({
        url: "../../functions/delete"+index+".php",
        type: "POST",
        data: data,
        success: function(data, test){
          var results = document.getElementById('results'+divId);
          var details = document.getElementById('details'+divId);
          results.style.display = "none";
          details.style.display = "none";
          suppressDisappear();
        }
  });
}
