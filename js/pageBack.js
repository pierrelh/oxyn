function detailAppear(identifier){
  var div = document.getElementById('details' + identifier);
  var result = document.getElementById('results' + identifier);
  var cross = document.getElementById('cross' + identifier);
  div.className = 'detail-visible';
  result.className = 'result-left';
  cross.className = 'cross-detail-visible';
}

function detailDisappear(identifier){
  var div = document.getElementById('details' + identifier);
  var result = document.getElementById('results' + identifier);
  var cross = document.getElementById('cross' + identifier);
  div.className = 'detail-hidden';
  result.className = 'result';
  cross.className = 'cross-detail';
}