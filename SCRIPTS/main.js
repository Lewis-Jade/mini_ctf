
window.onload = function(){

    var audio = document.getElementById('background-music');
    audio.muted = false;
}
// audio controll
var music = document.getElementById('background-music');
const audioIcon = document.getElementById('audio');

audioIcon.onclick = function () {
    if (music.paused) { // Check if the music is paused
        music.play();
        audioIcon.src = "./IMG/no-audio.png"; // Change to "muted" icon
    } else {
        music.pause();
        audioIcon.src = "./IMG/audio.png"; // Change to "sound on" icon
    }
};






