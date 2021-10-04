<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css">
    <title>philip's dictionary</title>
</head>
<body>
    <div class="header">
        <div class="links">
            <div class="name">
                Philip's dictionary.com
            </div>
           <div class="links-features">
            <div>Thesaurus.com</div>
            <div><p>MEANINGS</p></div>
            <div><p>GAMES</p></div>
            <div><p>LEARN</p></div>
            <div><p>WRITING</p></div>
            <div><p>WORD OF THE DAY</p></div>
          
        </div>
           </div>
        <div class="search">
            <p>Definitions</p>
            <input class="inputSearch" type="search">
            <svg class="btn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.822 20.88l-6.353-6.354c.93-1.465 1.467-3.2 1.467-5.059.001-5.219-4.247-9.467-9.468-9.467s-9.468 4.248-9.468 9.468c0 5.221 4.247 9.469 9.468 9.469 1.768 0 3.421-.487 4.839-1.333l6.396 6.396 3.119-3.12zm-20.294-11.412c0-3.273 2.665-5.938 5.939-5.938 3.275 0 5.94 2.664 5.94 5.938 0 3.275-2.665 5.939-5.94 5.939-3.274 0-5.939-2.664-5.939-5.939z"/></svg>
       
        </div>
     
    </div>

<main>

<div class="synonym">
    <div class="synonym-text">
        <h1>
            Synonym of the day
        </h1>
    </div>
    <div class="synonym-box">
        <p>
            Do you know which one is a synonym for <span>
                standstill?
            </span>
        </p>
        <p>
        <a href="" onclick = "fun();">GET THE ANSWER</a>

        </p>
    </div>
    <div class="container">
        <label for="newComment" name="newComment">Add your comment below-</label>
        <textarea id="newComment"></textarea>
        <button id="addComments">Add Comment</button>
        <div id="allComments"></div>
    </div>
</div>
 


</main>

































    <script>
        let searchMe = document.querySelector(".inputSearch")
        let btn = document.querySelector(".btn")
        
        
        const getEvent = async()=>{
            let dynamic = await searchMe.value;
            const res = await fetch(`https://www.dictionaryapi.com/api/v3/references/collegiate/json/${dynamic}?key=3488cc2c-650d-49f6-a197-08113e68d74b`)
            const data =await res.json();

           if(data){
               data.map(e => {
                   console.log(e.shortdef[0])
                   return e.shortdef
               })
           }
        }

        
        btn.addEventListener("click", () => {
            getEvent()
        })

            
            function fun() {  
  
  
               alert ("This link doesn't work. Philip's still working on it");  
            }  

    </script>
</body>
</html>

