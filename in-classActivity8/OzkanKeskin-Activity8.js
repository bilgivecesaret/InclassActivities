var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };

window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;	
	$("name").focus();	
};

function displayResults()
{
	let index = highest();
	var average = 0;
	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);
	}
	
	document.getElementById("results").innerHTML
		= "<h2> Results </h2> <p>Average score is " + average + "</p> "
		+ "<p>High score = " + names[index] + " with a score of " + scores[index] + "</p>";
}

function displayScores(){
	document.getElementById("scores_table").innerHTML =
    "<thead><h2> Scores </h2></thead><tbody id='body'><tr><td>Name</td><td>Score</td></tr></tbody>";

	for (var i = 0; i < names.length; i++) {
		document.getElementById("body").innerHTML +=
		"<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
	}
}
		
function addScore(){
	var name = document.getElementById("name").value;
	let score = document.getElementById("score").value;
	
	if (name == "" || score < 0 || score > 100 || !isNaN(name) || score === "" || isNaN(score)) {
		document.getElementById("errorMessage").innerHTML = "You must enter a name or a valid score";
	} else {
		document.getElementById("errorMessage").innerHTML = "";
		names.push(name);
		scores.push(parseInt(score));
	}
	
	document.getElementById("name").value = "";
	document.getElementById("score").value = "";
	document.getElementById("name").focus();

}

function highest(){
	let i;
	let max = 0;
	let index;
	for (i = 0; i < scores.length; i++) {
		if(scores[i]> max){
			max = scores[i];
			index = i;
		}			
	}
	return parseInt(index);
}