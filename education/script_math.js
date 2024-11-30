var userNumber;
var randomNumber;
var randomNumber1;
var sum;
var sum1; 
var sum2;  

function init() {
    var additionButton = document.getElementById("button"); 
    var submitButton = document.getElementById("button1"); 
    var minusButton = document.getElementById("buttonminus")
    var ggrButton = document.getElementById("buttonggr")
    additionButton.addEventListener("click", onclickedAddition);
    minusButton.addEventListener("click", onclickedMinus);
    ggrButton.addEventListener("click", onclickedGGR);
    submitButton.addEventListener("click", onClickedSubmit);
    window.addEventListener("keydown", onPressedKey);
    document.getElementById("question").innerHTML = "";

    randomNumber = 0;
    randomNumber1 = 0; 
    userNumber = 1;  
}

function onclickedAddition() {  

         randomNumber = Math.floor((Math.random() * 100) + 1);  
    randomNumber1 = Math.floor((Math.random() * 100) + 1); 

    document.getElementById("question").innerHTML = "What is " + (randomNumber + " + " + randomNumber1);  
    document.getElementById("answer").innerHTML = " ";
}  


function onclickedMinus() {  
    randomNumber = Math.floor((Math.random() * 100) + 1);  
    randomNumber1 = Math.floor((Math.random() * 100) + 1); 
    randomNumber2 = Math.floor((Math.random() * 100) + 1); 

    if (randomNumber > randomNumber1) {  
        document.getElementById("question").innerHTML = "What is " + (randomNumber + " - " + randomNumber1 + "?");  
        document.getElementById("answer").innerHTML = " ";
    }
    if (randomNumber1 > randomNumber) { 
        document.getElementById("question").innerHTML = "What is " + (randomNumber1 + " - " + randomNumber + "?");  
        document.getElementById("answer").innerHTML = " ";
    }
}  

function onclickedGGR() {  
    randomNumber = Math.floor((Math.random() * 10) + 1);  
    randomNumber1 = Math.floor((Math.random() * 10) + 1);

    document.getElementById("question").innerHTML = "What is " + (randomNumber + " x " + randomNumber1 + "?");  
    document.getElementById("answer").innerHTML = " ";
}  



function onclickedGGR() {  

    randomNumber = Math.floor((Math.random() * 10) + 1);  

    randomNumber1 = Math.floor((Math.random() * 10) + 1);

    document.getElementById("question").innerHTML = "What is " + (randomNumber + " x " + randomNumber1 + "?");  

        document.getElementById("answer").innerHTML = 
        " ";
}  


function onClickedSubmit() { 

    userNumber = document.getElementById("inputNumber").value;    
    
    

    sum = randomNumber + randomNumber1;   
    sum1 = randomNumber1 - randomNumber;
    sum2 = randomNumber - randomNumber1; 
    sum3 = randomNumber * randomNumber1; 

     printAnswer();

}   


function printAnswer() { 
var answerText;
        
    if (userNumber !== sum || userNumber !== sum1 || userNumber !== sum2 || userNumber !== sum3) { 

        // document.getElementById("answer").innerHTML = 
        // "Incorrect! The answer is not " + userNumber;  

        // document.getElementById("answer").style.color = "#F00";

         answerText = "Incorrect! The answer is not " + userNumber;  
        document.getElementById("answer").innerHTML = answerText;
        document.getElementById("answer").style.color = "#F00";
        
    }
    
    if (userNumber == sum) {
    
        // document.getElementById("answer").innerHTML = 
        // "Correct! The answer is: " + sum;     

        // document.getElementById("answer").style.color = "#0F0";

         answerText = "Correct! The answer is: " + sum;
        document.getElementById("answer").innerHTML = answerText;
        document.getElementById("answer").style.color = "#0F0";
    } 
    

    if (userNumber == sum1) { 

        // document.getElementById("answer").innerHTML = 
        // "Correct! The answer is: " + sum1;  

        // document.getElementById("answer").style.color = "#0F0";

         answerText = "Correct! The answer is: " + sum1;
        document.getElementById("answer").innerHTML = answerText;
        document.getElementById("answer").style.color = "#0F0";
        }     

    if (userNumber == sum2) { 
            // document.getElementById("answer").innerHTML = 
            // "Correct! The answer is: " + sum2;  
    
            // document.getElementById("answer").style.color = "#0F0";


             answerText = "Correct! The answer is: " + sum2;
        document.getElementById("answer").innerHTML = answerText;
        document.getElementById("answer").style.color = "#0F0";
            }  

    if (userNumber == sum3) { 
                // document.getElementById("answer").innerHTML = 
                // "Correct! The answer is: " + sum3;  
        
                // document.getElementById("answer").style.color = "#0F0";

                 answerText = "Correct! The answer is: " + sum3;
        document.getElementById("answer").innerHTML = answerText;
        document.getElementById("answer").style.color = "#0F0";
            }  

// Call the function to insert into the database
             insertIntoDatabase(answerText, document.getElementById("question").innerHTML);

}   



        function insertIntoDatabase(answer, question) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "math_insert.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("answer=" + encodeURIComponent(answer) + "&question=" + encodeURIComponent(question));
}



window.addEventListener("load", init);  

