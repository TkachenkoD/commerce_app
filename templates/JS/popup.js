function Popup(options){
  var content = {
    shaker1:{
      title1: "Shaker N001",
      article1: "<img src='./templates/images//shaker1.png '>",
      descpiption: "Made of high quality plastic and fiberglass.  Designed specialy for tourists and sportsmen."
  },
    shaker2:{
      title1: "Shaker N002 zen",
      article1: "<img src='./templates/images//shaker4.png '>",
      descpiption: "Designed specialy for tourists and sportsmen.  Extra quality. For HOT Driks. Made of high quality plastic and fiberglass."
  },
    shaker3:{
      title1: "Shaker  Hercules",
      article1: "<img src='./templates/images//shaker3.png '>",
      descpiption: "BIG SIZE! 1.2 l volume Designed specialy for long-long trip"
  },
    shaker4:{
      title1: "Shaker Star",
      article1: "<img src='./templates/images//shaker2.png '>",
      descpiption: "Beatiful PRINT with a STAR. Super cute."
  }
  };

  var newDiv; // div for a popup window

  var htmlEl = options.targetedNode;
  htmlEl.addEventListener('click', setListner);

  function setListner(event){
    var clickedDiv = event.target;
    var dI = clickedDiv.getAttribute('data-item');
    if(!dI)return;
    renderDiv(dI);
  }

  function renderDiv(atr){
    newDiv = document.createElement('div');
    var newDiv2 = document.createElement('div');
    // var newP = document.createElement('p');
    newDiv.classList.add('popup');
    newDiv2.classList.add('popup-inner');
    newDiv2.innerHTML += '<iframe id="myFrame" src="/products/9" style="height:380px;width:100%"></iframe>';
    newDiv2.innerHTML += '<h3>' + content[atr]['title1'] + '</h3>';
    newDiv2.innerHTML += '<p>' +content[atr]['article1']+ '</p>';
    newDiv2.innerHTML += '<p>' + content[atr]['descpiption'] + '</p>';
    // htmlEl.appendChild(newDiv);
    document.body.appendChild(newDiv);
    newDiv.appendChild(newDiv2);
    newDiv.addEventListener('click', function(){
      document.body.removeChild(newDiv);
    })
  };

}
