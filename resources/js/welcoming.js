function show() {
  document.querySelector(".desc-screen").style.display = "block";
  document.querySelector(".main").style.display = "none";
}

function hide() {
  document.querySelector(".desc-screen").style.display = "none";
  document.querySelector(".main").style.display = "block";
}

function toggleModal() { 
  document.getElementById('modal').classList.toggle('hidden')
}

function startAnimation() {
anime.timeline({loop: false})
.add({
  targets: '.h3-part1, .h3-part2, .stamp',
  scale: [7,1],
  opacity: [0,1],
  easing: "easeOutCirc",
  duration: 900,
  delay: (el, i) => 1600 * i
})
.add({
  targets: '#h3-text, #stamp',
  opacity: 1,
  duration: 900,
  easing: "easeOutExpo",
  delay: 1600
});
}

document.addEventListener('DOMContentLoaded', function() {
var i = 0;
var txt = 'From the sea to the highest mountain, we strive towards the same goal.\n Heed the warning, Adventurer, no preparation is too long.\n Use every skill you have learned, every experience you have.\n For no obstacle would come without consequences.\n Push through, Adventurer, for no matter how dangerous the dungeons are, there is light at the end of it all.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    if (txt[i] === '\n') {
      document.getElementById("descdlor24").innerHTML += '<br>';
      i++;
    } else {
      document.getElementById("descdlor24").innerHTML += txt.charAt(i);
      document.getElementById("descdlor24").style.textAlign = "justify";
    }

    i++;
    setTimeout(typeWriter, speed);
  } 
  else {
    // The typewriter has completed, now display the <h3>
    setTimeout(function() {
      document.getElementById("h3-text").classList.add('opacity-100');
      startAnimation();
    }, 1000);
  }
}
typeWriter();
});