const display = document.getElementById("display");
const container = document.getElementById("buttons");

const btns = [
    7,8,9,"/",
    4,5,6,"*",
    1,2,3,"-",
    0,".","=","+"
];

let currentNumber = 0;      
let previousNumber = null;  
let operator = null;        

function updateDisplay(value) {
    display.value = value;
}

btns.forEach(x => {
    const t = document.createElement("button");
    t.innerText = x;
    t.className = "btn";

    t.onclick = () => {

        if (typeof x === "number") {
            currentNumber = currentNumber * 10 + x;
            updateDisplay(currentNumber);
        }

        
        else if (x === "+" || x === "-" || x === "*" || x === "/") {
            previousNumber = currentNumber;
            currentNumber = 0;
            operator = v;
        }

       
        else if (x === "=") {
            if (operator === "+") currentNumber = previousNumber + currentNumber;
            if (operator === "-") currentNumber = previousNumber - currentNumber;
            if (operator === "*") currentNumber = previousNumber * currentNumber;
            if (operator === "/") currentNumber = previousNumber / currentNumber;

            updateDisplay(currentNumber);
            operator = null;
        }
    };

    container.appendChild(t);
});
