#define led1 7
#define led2 8
#define led3 9
#define led4 10
#define led5 11
#define led6 12
char c;
void setup(){
  Serial.begin(9600);
  pinMode(led1,OUTPUT);
  pinMode(led2,OUTPUT);
  }

void loop(){
  if(Serial.available() > 0){
    c = Serial.read();
    Serial.println(c);
    }
  else{
    delay(100);
    }
    //1
    if (c=='n'){
      digitalWrite(led1,HIGH);
      }
     if (c=='f'){
      digitalWrite(led1,LOW);
      c='\0';
      }
     //2
     if (c=='r'){
      digitalWrite(led2,HIGH);
      }
     if (c=='e'){
      digitalWrite(led2,LOW);
      c='\0';
      }
     //3 
     if (c=='i'){
      digitalWrite(led3,HIGH);
      }
     if (c=='m'){
      digitalWrite(led3,LOW);
      c='\0';
      }
     //4 
     if (c=='t'){
      digitalWrite(led4,HIGH);
      }
     if (c=='b'){
      digitalWrite(led4,LOW);
      c='\0';
      }
     //5 
     if (c=='o'){
      digitalWrite(led5,HIGH);
      }
     if (c=='c'){
      digitalWrite(led5,LOW);
      c='\0';
      }
     //6 
     if (c=='w'){
      digitalWrite(led6,HIGH);
      }
     if (c=='x'){
      digitalWrite(led6,LOW);
      c='\0';
      }
  }
