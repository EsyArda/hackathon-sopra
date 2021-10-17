

var currentTask = 0;
var tasks = [
  {
    //statement:"Il faut bien se méfier de l'URL de chaque lien avant de cliquer!",
    //description: "",
    correctAnswer: true,
    answer:null
  },
  {
    //statement:"Il faut bien se méfier de l'URL de chaque lien avant de cliquer! ",
    //description: "",
    correctAnswer: false,
    answer:null
  },
  {
    //statement:"Parfois les scammers envoient des mails avec une adresse similaires à ceux des grandes entreprises. Il faut bien relire l'adresse mail du destinataire a chaque fois qu'on reçoit un mail",
    //description: "L'URL une autre fois ...",
    correctAnswer: false,
    answer:null
  }
]

function selectTask(id){
  if(id < 0 || id >= tasks.length) return; //Invalid ID entered.
  
  currentTask = id;
  
  //document.getElementById("statement").innerText = tasks[currentTask].statement
  //document.getElementById("description").innerText = tasks[currentTask].description      
}



function answer(value){
  tasks[currentTask].answer = value;
  console.log(value, currentTask)
  for(var task in tasks){
    if(tasks[task].answer === null){ /* do nothing*/}        
    else if(tasks[task].answer === tasks[task].correctAnswer)
    {
      document.getElementById("task"+task).style.backgroundColor = "green"
        
    } 
    else if(tasks[task].answer !== tasks[task].correctAnswer)
    {
      document.getElementById("task"+task).style.backgroundColor = "red"  
      if (value == 0) window.alert("Il faut bien se méfier de l'URL de chaque lien avant de cliquer!");
      else if(value == 1) window.alert("Parfois les scammers envoient des mails avec une adresse similaires à ceux des grandes entreprises. Il faut bien relire l'adresse mail du destinataire a chaque fois qu'on reçoit un mail")
      else if (value == 2) window.alert("L'URL une autre fois ...")
    } 
  }
  
  if(currentTask < tasks.length-1){
    selectTask(currentTask+1)
  }
  
}

selectTask(0);