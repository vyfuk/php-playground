/**
 * A simple JS code to be used as an example of CSS including in complex.php
 */

document.getElementById("counterButton").addEventListener("click", function () {
    console.log("CLICK!")
    let num = parseInt(document.getElementById("counter").innerHTML);
    num++;
    document.getElementById("counter").innerHTML = num;
});

console.log("JS loaded!")