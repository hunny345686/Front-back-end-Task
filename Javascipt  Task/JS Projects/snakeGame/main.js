//declare variables and constent
let inputDir = { x: 0, y: 0 };
let speed = 5;
let lastPaintTime = 0;
let snakeAree = [{ x: 13, y: 15 }];
let food = { x: 8, y: 9 };
let score = 0;

const gameStart = () => {
  // update the snake array and food
  function iscollide(sarr) {
    //  if snake touch himself the code here

    for (let i = 1; i < snakeAree.length; i++) {
      if (sarr[i].x === sarr[0].x && sarr[i].y === sarr[0].y) {
        return true;
      }
    }
    // if u will Touch the corner of box code here
    if (
      sarr[0].x >= 18 ||
      sarr[0].x <= 0 ||
      sarr[0].y >= 18 ||
      sarr[0].y <= 0
    ) {
      return true;
    }
  }
  if (iscollide(snakeAree)) {
    inputDir = { x: 0, y: 0 };
    alert("Gmae Over: Press Any Key To Start !");
    snakeAree = [{ x: 13, y: 15 }];
    score = 0;
  }

  // if u have food so increament the score & snake and recreate the food in ramdom place

  if (snakeAree[0].y === food.y && snakeAree[0].x === food.x) {
    score += 1;
    if (score > hiscoreval) {
      hiscoreval = score;
      localStorage.setItem("hiscore", JSON.stringify(hiscoreval));
      HiscoreBox.innerHTML = "High Score: " + hiscoreval;
    }
    scoreBox.innerHTML = "Score:-" + score;
    snakeAree.unshift({
      x: snakeAree[0].x + inputDir.x,
      y: snakeAree[0].y + inputDir.y,
    });
    let a = 2;
    let b = 16;
    food = {
      x: Math.round(a + (b - a) * Math.random()),
      y: Math.round(a + (b - a) * Math.random()),
    };
  }

  // now moving the snake here
  for (let i = snakeAree.length - 2; i >= 0; i--) {
    snakeAree[i + 1] = { ...snakeAree[i] };
  }

  snakeAree[0].x += inputDir.x;
  snakeAree[0].y += inputDir.y;

  // Display food and snake
  // board is id which is an HTML id

  //  display snake here
  board.innerHTML = "";
  snakeAree.forEach((e, indx) => {
    snakeElement = document.createElement("div");
    snakeElement.style.gridRowStart = e.y;
    snakeElement.style.gridColumnStart = e.x;
    if (indx === 0) {
      snakeElement.classList.add("head");
    } else {
      snakeElement.classList.add("snake");
    }
    board.appendChild(snakeElement);
  });

  //  display food here
  foodElement = document.createElement("div");
  foodElement.style.gridRowStart = food.y;
  foodElement.style.gridColumnStart = food.x;
  foodElement.classList.add("food");
  board.appendChild(foodElement);
};

// this is game function
const main = (cur_time) => {
  window.requestAnimationFrame(main);
  if ((cur_time - lastPaintTime) / 1000 < 1 / speed) {
    return;
  }
  lastPaintTime = cur_time;
  gameStart();
};

//main logic start here this function will loop main function()
let hiscore = localStorage.getItem("hiscore");
if (hiscore === null) {
  let hiscoreval = 0;
  localStorage.setItem("hiscore", JSON.stringify(hiscoreval));
} else {
  hiscoreval = JSON.parse(hiscore);
  HiscoreBox.innerHTML = "High Score:- " + hiscore;
}
window.requestAnimationFrame(main);

window.addEventListener("keydown", (e) => {
  inputDir = { x: 0, y: 1 }; //any btn press snake will move and start game
  switch (e.key) {
    case "ArrowUp":
      inputDir.x = 0;
      inputDir.y = -1;
      break;

    case "ArrowDown":
      inputDir.x = 0;
      inputDir.y = 1;
      break;

    case "ArrowLeft":
      inputDir.x = -1;
      inputDir.y = 0;
      break;

    case "ArrowRight":
      inputDir.x = 1;
      inputDir.y = 0;
      break;
  }
});
