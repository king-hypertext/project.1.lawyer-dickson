function showDate() {
    var _date = document.querySelectorAll('.showDate');
    var date = new Date();
    var y = date.getFullYear();
    var m = date.getMonth();
    var d = date.getDay();
    var f = new Date().getUTCDate();
    f < 10 ? f = "0" + f : f;
    let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    let days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    var CurrentDate = days[d] + " " + " " + f + " " + months[m] + " " + y;
    _date.forEach(elem => {
        elem.innerText = CurrentDate;
    })

}
showDate();