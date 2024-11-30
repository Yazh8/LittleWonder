const section = document.querySelector("section"); 
const playerLivesCount = document.querySelector("span");  
const playerTriesCount = document.querySelector(".playerTriesCount");
let playerLives = 0;  
let playerTries = 0;

playerLivesCount.textContent = playerLives;  
playerTriesCount.textContent = playerTries; 
//Generate the object 

const getData = () => [ 

{ imgSrc: "./Animals/A1.png", name: "A1" },
{ imgSrc: "./Animals/A2.png", name: "A2" },
{ imgSrc: "./Animals/A3.png", name: "A3" },
{ imgSrc: "./Animals/A4.png", name: "A4" },
{ imgSrc: "./Animals/A5.png", name: "A5" },
{ imgSrc: "./Animals/A6.png", name: "A6" },


{ imgSrc: "./AnimalsName/A1.png", name: "A1" }, 
{ imgSrc: "./AnimalsName/A2.png", name: "A2" },
{ imgSrc: "./AnimalsName/A3.png", name: "A3" },
{ imgSrc: "./AnimalsName/A4.png", name: "A4" },
{ imgSrc: "./AnimalsName/A5.png", name: "A5" },
{ imgSrc: "./AnimalsName/A6.png", name: "A6" },


] 

// Randomize  

const randomize = () => {  

    const cardData = getData(); 
    console.log(cardData); 
    cardData.sort(() => Math.random() - 0.5); 
    return cardData; 
} 

// card generator function  

const cardGenerator = () => { 

    const cardData = randomize(); 
    console.log(cardData);  

    //generate HTML  

    cardData.forEach((item) => { 
    const card = document.createElement("div");
    const face = document.createElement("img");
    const back = document.createElement("div");  

    card.classList = "card"; 
    face.classList = "face"; 
    back.classList = "back";    
    //attach the info to the cards  

    face.src = item.imgSrc;  
    card.setAttribute("name", item.name);
    // attach the card to section 
    section.appendChild(card); 
    card.appendChild(face); 
    card.appendChild(back);  

    card.addEventListener ("click", (e) => { 
        card.classList.toggle("toggleCard"); 
        checkCards(e);
    });
    });


};  

//check if cards match

const checkCards = (e) => { 
    
    const clickedCard = e.target   
    clickedCard.classList.add("flipped"); 
    const flippedCards = document.querySelectorAll(".flipped"); 
    const toggleCard = document.querySelectorAll(".toggleCard");
    console.log(clickedCard);  
    
    if (flippedCards.length === 2) { 
        if (flippedCards[0].getAttribute("name") === flippedCards[1].getAttribute("name")) { 
            console.log("match"); 

            flippedCards.forEach((card) => { 
                card.classList.remove("flipped");  
                card.style.pointerEvents = "none"; 
            }); 
            playerLives++; 
            playerLivesCount.textContent = playerLives;    
            playerTries++; 
            playerTriesCount.textContent = playerTries;
            
        } 
        else { 
            console.log("wrong"); 
            flippedCards.forEach((card) => { 
                card.classList.remove("flipped"); 
                setTimeout(() => card.classList.remove("toggleCard"), 1000); 
            });   
            playerTries++; 
            playerTriesCount.textContent = playerTries;
            
        }
    } 

    if (toggleCard.length === 12) { 
     alert("Congratulations, you have completed the game. It took you " + playerTries + " tries!");
       // Insert playerTries and playerLives into the database
    insertIntoDatabase(playerTries, playerLives);

redirectToOtherPage();
}

function redirectToOtherPage() {
    // Replace 'other-page.html' with the actual URL you want to redirect to
    window.location.href = 'memory.php';
}

function insertIntoDatabase(tries, lives) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "memory_insert.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    var data = "tries=" + encodeURIComponent(tries) + "&lives=" + encodeURIComponent(lives);
    xhr.send(data);
}


}; 

// restart 

const restart = (text) => { 

    let cardData = randomize(); 
    let faces = document.querySelectorAll(".face"); 
    let cards = document.querySelectorAll(".cards");  

    cardData.forEach((item, index) => { 
    }); 
    playerLivesCount.textContent = playerLives;  
    playerTriesCount.textContent = playerTries;
    
    setTimeout(() => window.alert(text), 100);
    }


cardGenerator();  


