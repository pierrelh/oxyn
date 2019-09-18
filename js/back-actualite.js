function createNewElement(number){
  var id = 'element' + number;
  var inputId = 'input'+number;
  var newId = 'createNewElement(' + parseInt(number +1) +')';
  var div = document.getElementById("subForm");
  var select= document.createElement('select');
  var br1= document.createElement('br');
  var br2= document.createElement('br');
  var label= document.createElement('label');
  label.setAttribute('id', 'label' + number);
  var labelElement= document.createElement('label');
  labelElement.innerHTML = 'Element';
  select.setAttribute('onchange', newId);
  select.setAttribute('id', 'element'+parseInt(number+1));

  var option = document.createElement('option');

  var option1 = document.createElement('option');
  option1.value = 'sous-titre';
  option1.innerHTML = 'Sous-Titre';

  var option2 = document.createElement('option');
  option2.value = 'image';
  option2.innerHTML = 'Image';

  var option3 = document.createElement('option');
  option3.value = 'paragraphe';
  option3.innerHTML = 'Paragraphe';

  var option4 = document.createElement('option');
  option4.value = 'vidéo';
  option4.innerHTML = 'Vidéo';

  select.appendChild(option);
  select.appendChild(option1);
  select.appendChild(option2);
  select.appendChild(option3);
  select.appendChild(option4);

  if (document.getElementById(id).value == 'sous-titre') {
    if (document.getElementById('element'+parseInt(number+1)) != null) {
          textbox = document.createElement('input');
          textbox.setAttribute('name', 'S'+number);
          textbox.setAttribute('id', inputId);
          textbox.setAttribute('type', 'text');
          var replaceLabel = document.getElementById('label'+number);
          replaceLabel.innerHTML = 'Le Sous-Titre';
        $(document.getElementById('input'+parseInt(number))).replaceWith(textbox);
    }else {
      var input= document.createElement('input');
      input.setAttribute('name', 'S' +number);
      input.setAttribute('id', inputId);
      input.setAttribute('type', 'text');
      label.innerHTML = 'Le Sous-Titre';
      div.appendChild(label);
      div.appendChild(input);
      div.appendChild(br1);
      div.appendChild(labelElement);
      div.appendChild(select);
      div.appendChild(br2);
    }


  }else if (document.getElementById(id).value == 'image') {
    if (document.getElementById('element'+parseInt(number+1)) != null) {
          textbox = document.createElement('input');
          textbox.setAttribute('name', 'I'+number);
          textbox.setAttribute('id', inputId);
          textbox.setAttribute('type', 'file');
          var replaceLabel = document.getElementById('label'+number);
          replaceLabel.innerHTML = 'l\'image';
        $(document.getElementById('input'+parseInt(number))).replaceWith(textbox);
    }
    else {
      var input= document.createElement('input');
      input.setAttribute('name', 'I'+number);
      input.setAttribute('id', inputId);
      input.setAttribute('type', 'file');
      label.innerHTML = 'l\'image';
      div.appendChild(label);
      div.appendChild(input);
      div.appendChild(br1);
      div.appendChild(labelElement);
      div.appendChild(select);
      div.appendChild(br2);
    }


  }else if (document.getElementById(id).value == 'paragraphe') {
    if (document.getElementById('element'+parseInt(number+1)) != null) {
          textbox = document.createElement('textarea');
          textbox.setAttribute('name', 'P'+number);
          textbox.setAttribute('id', inputId);
          var replaceLabel = document.getElementById('label'+number);
          replaceLabel.innerHTML = 'Le Paragraphe';
        $(document.getElementById('input'+parseInt(number))).replaceWith(textbox);
    }
    else {
      var input= document.createElement('textarea');
      input.setAttribute('name', 'P'+number);
      input.setAttribute('id', inputId);
      label.innerHTML = 'Le paragraphe';
      input.setAttribute('cols',80);
      input.setAttribute('rows', 10);
      div.appendChild(label);
      div.appendChild(input);
      div.appendChild(br1);
      div.appendChild(labelElement);
      div.appendChild(select);
      div.appendChild(br2);
    }


  }else if (document.getElementById(id).value == 'vidéo') {
    if (document.getElementById('element'+parseInt(number+1)) != null) {
          textbox = document.createElement('input');
          textbox.setAttribute('name', 'V'+number);
          textbox.setAttribute('id', inputId);
          textbox.setAttribute('type', 'url');
          var replaceLabel = document.getElementById('label'+number);
          replaceLabel.innerHTML = 'URL';
        $(document.getElementById('input'+parseInt(number))).replaceWith(textbox);
    }
    else {
      var input= document.createElement('input');
      input.setAttribute('name', 'V'+number);
      input.setAttribute('id', inputId);
      input.setAttribute('type', 'url');
      label.innerHTML = 'Le lien de la vidéo';
      div.appendChild(label);
      div.appendChild(input);
      div.appendChild(br1);
      div.appendChild(labelElement);
      div.appendChild(select);
      div.appendChild(br2);
    }
  }
}
