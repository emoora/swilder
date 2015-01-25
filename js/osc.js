/* This is a program to make some oscilatting sounds happen */

var function osc() {

var context = new AudioContext();
oscillator = context.createOscillator();
gainNode = context.createGain();


oscillator.connect(gainNode);
gainNode.connect(context.destination);
gainNode.gain.value = 0.3;
osciallator.start();

};