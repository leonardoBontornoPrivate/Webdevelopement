const enemy = document.querySelector("#enemy");
const player = document.querySelector("#player");
const jumpbtn = document.querySelector("#JumpButton");


function jumpBtn() {
  player.classList.add("Jump");
  setTimeout(function(){
    player.classList.remove("Jump");
  }, 500);
}

var randomInt = parseInt(Math.random() * 10);

console.log(randomInt);

var checkDeath = setInterval(function() {
  var playerTop = parseInt(window.getComputedStyle(player).getPropertyValue("top"));
  var enemyLeft = parseInt(window.getComputedStyle(enemy).getPropertyValue("left"));

  if(enemyLeft < 40 && enemyLeft > 0 && playerTop > 135) {
    alert("u loose!!");
  }
}, 10);
