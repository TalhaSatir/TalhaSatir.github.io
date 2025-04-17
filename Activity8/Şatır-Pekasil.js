var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };

window.onload = function () {
    $("display_results").onclick = displayResults;
    $("display_scores").onclick = displayScores;
    $("add").onclick = addScore;
    document.getElementById("name").focus();
    document.getElementById("name").select();

};

function displayResults()
{
	var average = 0;
	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);
	}
	
	document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score =  "+average + "<br \> "
	document.getElementById("results").innerHTML+="Highest score = "+names[scores.indexOf(Math.max(...scores))]+" with a score of "+Math.max(...scores)+"<br \>"
}


function displayScores() {
    let output = `
        <h2>Scores</h2>
        <table style="width:200px; border-collapse: collapse;">
            <tr>
                <th style="text-align:left; border-bottom: 1px solid black;">Name</th>
                <th style="text-align:left; border-bottom: 1px solid black;">Score</th>
            </tr>
    `;

    for (let i = 0; i < names.length; i++) {
        output += `
            <tr>
                <td>${names[i]}</td>
                <td>${scores[i]}</td>
            </tr>
        `;
    }

    output += `</table>`;
    document.getElementById("scores_table").innerHTML = output;
}

function addScore() {
    var name = $("name").value.trim();
    var score = parseInt($("score").value);

    if (name === "" || isNaN(score) || score < 0 || score > 100) {
        alert("You must enter a name and a valid score");
        return;
    }

    names.push(name);
    scores.push(score);

    $("name").value = "";
    $("score").value = "";
}