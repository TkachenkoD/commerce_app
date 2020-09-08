class Loader{

// Displaying a css spinner on ajax calls with fetch api
    renderDiv(){
        console.log("hi from loader")
        let newDiv = document.createElement('div');
        let newDiv2 = document.createElement('div');

        newDiv.classList.add('popup');
        newDiv2.setAttribute("id", 'spinner');

        newDiv.innerHTML += '<h3>' + "please wait, loading...." + '</h3>';

        document.body.appendChild(newDiv);
        newDiv.appendChild(newDiv2);

      };


    removeDiv(){
        let newDiv = document.querySelector('.popup')
        document.body.removeChild(newDiv);
        console.log("exit from loader")
      };

}

let loader = new Loader();