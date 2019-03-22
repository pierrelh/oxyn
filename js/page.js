function sponsorsFormAppear(){
  var form = document.getElementById('sponsors-form');
  var background = document.getElementById('sponsors-form-background');
  form.className = 'formulaire';
  background.className = 'form-background';
}

function sponsorsFormDisappear(){
  var form = document.getElementById('sponsors-form');
  var background = document.getElementById('sponsors-form-background');
  form.className = 'formulaire hidden';
  background.className = 'form-background hidden';
}

function confirmFormAppear(){
  var form = document.getElementById('confirm-form');
  var background = document.getElementById('confirm-form-background');
  form.className = 'confirm-form';
  background.className = 'confirm-form-background';
}
