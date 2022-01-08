 var options = [ "","What Food Did You Miss the most?", 
 "Are you Movie or Web Series Person?", 
 "Which App Have You Missed The Most?",
 "How did you spend the lockdown?",
 "What fitness activities have you done in the lockdown?", 
 "Have You Become A Night or Morning Person", 
 ];
 k=j=m=prog=0;
 zz=0;
 skore=1;
 var anx = ["",
   ["Burger 🍔","Pizza 🍕","Main Course 🍛","Street Food 🍟"],
   ["MOVIES 🎥","WEB SERIVES 📹","YoUTuBE 📺"],
   ["PUBG 🎮","TIKTOK 🤳","NONE LOL! 👎"],
   ["Movies 🎥","Sleeping 😴","Social Media 👻","Productive! 👨‍💼"],
   ["Running/Walking 🏃‍♂️","Playing Sports 🏏","Home Gym 🏋","None 🧘‍♂️"],
   ["MORNING 🌞","NIGHT 🌜","MORNING AFTER PUBG BAN 😂😂"]
];
var nx="";
console.log(nx);
function nextimg(){
  zz++;
  newimg="../"+zz+".jpg"
  document.getElementById("changelol").src=newimg;
}
function enableall(){
  i=0;
  while(i<4)
  {
  document.getElementsByClassName('background-button')[i].style.display = 'inline-block';
  i++;
}
}
 document.getElementById("begin").addEventListener("click", function(){
  nextimg();
                               document.getElementById("changelol").style="display:inline-block";
                     document.getElementById("livescore").innerHTML = skore;
                    document.getElementById("score").style="display:inline-block";
  document.getElementById("begin").style="display:none";
      document.getElementById("wrapup").style="display:none";
            document.getElementById("how2play").style="display:none";
                        document.getElementById("lowimg").style="display:none";
document.getElementById("allbuttons").style="display:table";
  document.getElementById("que").innerHTML = "Which App Do You Use The Most?";
    document.getElementById("que").style = "display:block";
}); 
 var userSelection = document.getElementsByClassName('button-wrapper');
for(var i = 0; i < userSelection.length; i++) {
  (function(index) {
    userSelection[index].addEventListener("click", function() {
        skore++;
                           document.getElementById("livescore").innerHTML = skore;
          score.style.marginRight = "-50vw";
            score.style.opacity = "0";
                   setTimeout(function(){
                        score.style.display = "none";
                      }, 100);
       console.log("Clicked index: " + index);
       console.log(m);
       m++;
              prog=prog+14.28;
     //  nextimg();
       setTimeout(() => {
document.getElementById("progr").style.width=prog+'%';
}, 800)
       if(m>=options.length)
{
  emojis.style.display="inline-block";
  changelol.style.display="none";
document.getElementById("que").innerHTML = '<span style="color: #abff7b">Enter your name 🖋 </span><span style="color:white">& Click the button 🔽</span>' ;  
document.getElementById("allbuttons").style="display:none";
  document.getElementById("naxe").style="display:inline-block";
  document.getElementById("submix").style="display:inline-block";
  console.log("DONE");
  //submitit();
}
else{
  console.log("NEXT EXIST");
      doneit.style.display="inline-block"
           k++;j=0;
           document.getElementById("que").innerHTML = options[k];  
       document.getElementById("allbuttons").style="display:none";
              document.getElementById("que").style="opacity:0";
                     document.getElementById("changelol").style="display:none";
              document.querySelectorAll('button.background-button').forEach(elem => {
    elem.disabled = true;
  });
              nextimg();
                //    thisFunctionDoesNotExistAndWasCreatedWithTheOnlyPurposeOfStopJavascriptExecutionOfAllTypesIncludingCatchAndAnyArbitraryWeirdScenario();

              setTimeout(function(){
                        doneit.style.display="none";
                             document.getElementById("changelol").style="display:inline-block";
                 //    document.getElementById("love").style="display:none";
                   //                       document.getElementById("wow").style="display:none";
                     //                     document.getElementById("wrong").style="display:none";
score.style.display = "inline-block";

                   setTimeout(function(){
                                             score.style.marginRight = "0";
                                                         score.style.opacity = "1";
                      }, 100);
document.getElementById("allbuttons").style="display:table";
                             document.getElementById("que").style="opacity:1";
   enableall();
            document.getElementById("first").title = anx[k][j];
  if(anx[k][j]==undefined){document.getElementById("first").style="display:none"};
  j++;
  console.log("BSDK");
 document.getElementById("second").title = anx[k][j];
   if(anx[k][j]==undefined){document.getElementById("second").style="display:none"};
 j++;
 document.getElementById("third").title = anx[k][j];
   if(anx[k][j]==undefined){document.getElementById("third").style="display:none"};
 j++;
 document.getElementById("fourth").title = anx[k][j];
  if(anx[k][j]==undefined){document.getElementById("fourth").style="display:none"};

         }, 1000);
              }
       nx=nx.concat(index);
   console.log("ADDED");     
     })

  }
  )(i);
}
function precheck(){
      nameperson=naxe.value.replace(/[^A-Za-z0-9 ]/g, '');
      if(nameperson.length>0){
             // alert(nameperson);
      postRefreshPage();
    }
    else{
     document.getElementById("naxe").style = "border:7px solid red";
     alert("Please enter your name");
    }
}
function postRefreshPage () {
  var theForm, newInput1, newInput2;
  // Start by creating a <form>
  theForm = document.createElement('form');
  theForm.action = 'middlegen.php';
  theForm.method = 'post';
  // Next create the <input>s in the form and give them names and values
  newInput1 = document.createElement('input');
  newInput1.type = 'hidden';
  newInput1.name = 'name';
  newInput1.value = nameperson;
  newInput2 = document.createElement('input');
  newInput2.type = 'hidden';
  newInput2.name = 'sendnumber';
  newInput2.value = nx;
  // Now put everything together...
  theForm.appendChild(newInput1);
  theForm.appendChild(newInput2);
  // ...and it to the DOM...
  document.getElementById('hidden_form_container').appendChild(theForm);
  // ...and submit it
  theForm.submit();
}