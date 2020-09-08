console.log("here__")

class Test{
    constructor(){
        this.elem = document.querySelector(".content-inner__title")
        this.turnColor1 = this.turnColor.bind(this)
        this.submit1 = this.submit2.bind(this)
        this.init()
    }
    init(){
        this.go()
    }

    go(){
        this.elem.addEventListener("click", this.turnColor1)
        this.elem.addEventListener("click", this.submit1)
    }

    turnColor(){
        if(this.elem.style.color == "orange"){
            this.elem.style.color = "red" 
            return
        } 
        this.elem.style.color = "orange" 
    }

//TestController->actionTest_fetching
    async submit2() {
        loader.renderDiv();
        let some2 = {
            one_key: "from 1 key",
            two_key: this.elem.textContent + "<---"
        };
        some2 = JSON.stringify(some2)

        let some = "fetch_from_js";
        let response = await fetch('/test/test_fetching/'+some, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json;charset=utf-8'
            },
            body: some2
          });
          
        let result = await response.text();
        loader.removeDiv()
        
        //   let result = await response.json();
          console.log(result);

        //   document.querySelector(".content-inner__title").innerHTML = result['one_key']; //if  response.json();
          document.querySelector(".content-inner__title").innerHTML = result; //if  response.text();

      }

      submit() {
        let some = "ajax_from_js";
        let some2 = {
            one_key: "from 1 key val",
            two_key: this.elem.textContent
        };
        some2 = JSON.stringify(some2)

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".content-inner__title").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "/test/test_fetching/"+some, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("fname="+some2+"&lname=Ford");
    }

}

let test = new Test()