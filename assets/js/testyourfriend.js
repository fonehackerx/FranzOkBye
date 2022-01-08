 var options = ["",
 "What Food Did "+testof+" Miss the most?", 
 "Is "+testof+" A Movie or Web Series Person?", 
 "Which App Does "+testof+" Miss The Most?",
 "How did "+testof+" spend their lockdown?",
 "What fitness activities has "+testof+" done in the lockdown?", 
 "Has "+testof+" Become A Night or Morning Person", 
 ];
 k=j=prog=m=0;
 zz=1;
 x=0;
 nx="";
 currans=0;
 skore=0;

function pad(n, width, z) {
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}
 document.getElementById('submix').addEventListener('click', function() {
  naxe.value= naxe.value.replace(/[^A-Za-z0-9 ]/g, '');
    if(naxe.value.length>0)
  {
  letsstart();
}
else{
  alert("Please enter valid name.")
}
});
 var anx = [
  [""],
   ["Burger 🍔","Pizza 🍕","Main Course 🍛","Street Food 🍟"],
   ["MOVIES 🎥","WEB SERIVES 📹","YoUTuBE 📺"],
   ["PUBG 🎮","TIKTOK 🤳","NONE LOL! 👎"],
   ["Movies 🎥","Sleeping 😴","Social Media 👻","Productive! 👨‍💼"],
   ["Running/Walking 🏃‍♂️","Playing Sports 🏏","Home Gym 🏋","None 🧘‍♂️"],
   ["MORNING 🌞","NIGHT 🌜","MORNING AFTER PUBG BAN 😂😂"]
];
function nextimg(){
  zz++;
  newimg="../"+zz+".jpg"
  document.getElementById("changelol").src=newimg;
}
function letsstart(){
            window.scrollTo({ top: 0, behavior: 'smooth' });
      document.getElementById("intro").style="display:none";
                  document.getElementById("score").style="display:inline-block";
            document.getElementById("tix").style="display:none";
                                         document.getElementById("changelol").style="display:inline-block";
          document.getElementById("seeans").style="display:none";
            document.getElementById("naxe").style="display:none";
  document.getElementById("submix").style="display:none";
    document.getElementById("allbuttons").style="display:table";
    document.getElementsByClassName("table-users")[0].style = "display:none";
  document.getElementById("que").innerHTML = "Which App Did "+testof+" the most in lockdown?";
    x=pad(cheatcodes,7);

    currans=x.charAt(0);
}
function enableall(){
	i=0;
	while(i<4)
	{
	document.getElementsByClassName('background-button')[i].style.display = 'inline-block';
	i++;
}
}
var renable = document.querySelectorAll('#id2, #id3, #id5');
var userSelection = document.getElementsByClassName('button-wrapper');
for(var i = 0; i < userSelection.length; i++) {
  (function(index) {
    userSelection[index].addEventListener("click", function() {
            score.style.marginRight = "-50vw";
            score.style.opacity = "0";
                   setTimeout(function(){
                        score.style.display = "none";
                      }, 300);
       console.log("Clicked index: " + index);
       console.log(m);
       m++;
              if(m<=options.length){
       setTimeout(function(){
       if(index==currans){
        skore++;
                 document.getElementById("livescore").innerHTML = skore;
       document.getElementById("love").style="display:inline-block";
     }
       else{
              document.getElementById("wrong").style="display:inline-block";
       }
}, 300);
   }
       prog=prog+14.28;
       nextimg();
       setTimeout(() => {
document.getElementById("progr").style.width=prog+'%';
}, 800)
       if(m>options.length-1)
{
          window.scrollTo({ top: 0, behavior: 'smooth' });
           document.getElementById('submix').addEventListener('click', function() {
  postRefreshPage();
});
                  setTimeout(() => {
                     document.getElementById("love").style="display:none";
                                          document.getElementById("wrong").style="display:none";
                                            document.getElementById("changelol").style="display:none";
  document.getElementById("allbuttons").style="display:none";
  document.getElementById("submix").style="display:inline-block";
  document.getElementById("que").innerHTML = "SEE HOW GOOD FRIEND YOU ARE! 😋";  
  document.getElementById("submix").innerHTML="CHEK YOUR SCORE &#127894;";
  console.log("DONE");
                                          }, 300)

	//submitit();
}
else{
	console.log("NEXT EXIST");
           k++;j=0;
        document.getElementById("que").innerHTML = options[k];  
       document.getElementById("allbuttons").style="display:none";
              document.getElementById("que").style="opacity:0";
                     document.getElementById("changelol").style="display:none";
              document.querySelectorAll('button.background-button').forEach(elem => {
    elem.disabled = true;
});
       setTimeout(function(){
                             document.getElementById("changelol").style="display:inline-block";
                     document.getElementById("love").style="display:none";
                                                 score.style.display = "inline-block";

                   setTimeout(function(){
                                             score.style.marginRight = "0";
                                                         score.style.opacity = "1";
                      }, 200);
                                          document.getElementById("wrong").style="display:none";
       document.getElementById("allbuttons").style="display:table";
                             document.getElementById("que").style="opacity:1";
    enableall();
  document.getElementById("first").title = anx[k][j];
  if(anx[k][j]==undefined){document.getElementById("first").style="display:none"};
  j++;
 document.getElementById("second").title = anx[k][j];
   if(anx[k][j]==undefined){document.getElementById("second").style="display:none"};
 j++;
 document.getElementById("third").title = anx[k][j];
   if(anx[k][j]==undefined){document.getElementById("third").style="display:none"};
 j++;
 document.getElementById("fourth").title = anx[k][j];
  if(anx[k][j]==undefined){document.getElementById("fourth").style="display:none"};
   nx=nx.concat(index);
   currans=x.charAt(m);
 }, 1500);
              }

     })
  }

  )(i);
}
function postRefreshPage () {
  var theForm, newInput1, newInput2,newInput3;
  	nameperson=(document.getElementById('naxe').value);
  // Start by creating a <form>
  theForm = document.createElement('form');
  theForm.action = '../testtaken.php';
  theForm.method = 'post';
  // Next create the <input>s in the form and give them names and values
    newInput1 = document.createElement('input');
  newInput1.type = 'hidden';
  newInput1.name = 'invitedby';
  newInput1.value = testofid;
  newInput2 = document.createElement('input');
  newInput2.type = 'hidden';
  newInput2.name = 'namexx';
  newInput2.value = nameperson;
  newInput3 = document.createElement('input');
  newInput3.type = 'hidden';
  newInput3.name = 'score';
  newInput3.value = skore;
  // Now put everything together...
  theForm.appendChild(newInput1);
  theForm.appendChild(newInput2);
    theForm.appendChild(newInput3);
  // ...and it to the DOM...
  document.getElementById('hidden_form_container').appendChild(theForm);
  // ...and submit it
  theForm.submit();
}