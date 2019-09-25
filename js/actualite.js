function buttonAppear(id){
  var button = document.getElementById('button'+id);
  button.className = 'button-hovered';
  var news = document.getElementById('news'+id);
  news.classList.add("news-hovered");
}

function buttonHide(id){
  var button = document.getElementById('button'+id);
  button.className = 'button';
  var news = document.getElementById('news'+id);
  news.classList.remove("news-hovered");
}

function hoverTopButton(id){
  var button = document.getElementById(id+"-button");
  button.classList.add('title-button-hovered');
  var arrow = document.getElementById(id+"-arrow");
  arrow.classList.add("arrow-button-hovered");
}

function unhoverTopButton(id){
  var button = document.getElementById(id+'-button');
  button.classList.remove('title-button-hovered');
  var arrow = document.getElementById(id+"-arrow");
  arrow.classList.remove("arrow-button-hovered");
}
