/* @pjs preload="radio.jpg,tx.jpg"; */

PImage bg;
PImage img;
int y;
int time;
PFont messages;
PFont callsign;
String LastRX;
String LastName;

void setup() {
  size(640, 360);
  bg = loadImage("radio.jpg");
  img = loadImage("tx.jpg");
  callsign = loadFont("Serif");
  messages = createFont("Serif", 12);
  
  
}

void draw() {
     background(bg);
     
    // Load the LastRX Data
    String[] lines = loadStrings("lastrx.data");
    String RX;
    String Name;
    for (String line : lines) {
        String[] tokens = split(line, ',');
       }
      //image(img, 27, 63);
      textFont(callsign,26);
      textAlign(CENTER);
      text(tokens[0],width/2, 100);
      text(tokens[1],width/2, 140); 
    textFont(messages);
    textAlign(LEFT);
    textLeading(20);
   String lines = loadStrings("message.data");
   //String lines = "L1\nL2\nL3";
   text(lines, 27, 265, 600, 80);  // Text wraps within text box
   myDelay(1000);
}

void myDelay(int ms){
  int time = millis();
  while(millis()-time < ms);
}
