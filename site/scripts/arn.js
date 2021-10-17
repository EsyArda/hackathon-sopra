

var currentTask = 0;
var tasks = [
  {
    statement:" ",
    description: "Un mail de Luke Jhonson ?",
    correctAnswer: true,
    answer:null
  },
  {
    statement:" ",
    description: "Dropbox font du fishing ?",
    correctAnswer: false,
    answer:null
  },
  {
    statement:"J'aime ma banque !",
    description: "J'ai confiance en ma banque",
    correctAnswer: false,
    answer:null
  }
]

function selectTask(id){
  if(id < 0 || id >= tasks.length) return; //Invalid ID entered.
  
  currentTask = id;
  
  document.getElementById("statement").innerText = tasks[currentTask].statement
  document.getElementById("description").innerText = tasks[currentTask].description      
}



function answer(value){
  tasks[currentTask].answer = value;
  console.log(value, currentTask)
  for(var task in tasks){
    if(tasks[task].answer === null){ /* do nothing*/}        
    else if(tasks[task].answer === tasks[task].correctAnswer)
      document.getElementById("task"+task).style.backgroundColor = "green"   
    else if(tasks[task].answer !== tasks[task].correctAnswer)
      document.getElementById("task"+task).style.backgroundColor = "red"   
  }
  
  if(currentTask < tasks.length-1){
    selectTask(currentTask+1)
  }
  
}

selectTask(0);