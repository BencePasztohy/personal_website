var funct = displayTime();
window.onload = funct;

function displayTime() {
    cycleSeconds();
    cycleMinutes();
    cycleHours();
    setInterval(displayTime, 1000);
}
function cycleSeconds() {
    var time = new Date();
    var hours = time.getHours();
    var minutes = time.getMinutes();
    var seconds = time.getSeconds();
    hours = addZero(hours);
    minutes = addZero(minutes);
    seconds = addZero(seconds);
    document.getElementById("time").innerHTML =
        hours + ":" + minutes + ":" + seconds;

    var seconds_digits = [0, 0];
    seconds_digits[0] = getDigits(seconds, 0);
    seconds_digits[1] = getDigits(seconds, 1);
    seconds_digits[0] = decToBin(seconds_digits[0]);
    seconds_digits[1] = decToBin(seconds_digits[1]);
    seconds_digits[0] = addLeadingZeroes(seconds_digits[0]);
    seconds_digits[1] = addLeadingZeroes(seconds_digits[1]);
    var seconds_digits_bin_1 = [0, 0, 0, 0];
    var seconds_digits_bin_2 = [0, 0, 0, 0];
    for (var i = 0; i < 4; i++) {
        seconds_digits_bin_1[i] = getDigits(seconds_digits[0], i);
    }
    for (var i = 0; i < 4; i++) {
        seconds_digits_bin_2[i] = getDigits(seconds_digits[1], i);
    }
    for (var i = 1; i < 5; i++) {
        cell = "1-" + i;
        fillSquare(seconds_digits_bin_2[i - 1], cell);
    }
    for (var i = 1; i < 5; i++) {
        cell = "2-" + i;
        fillSquare(seconds_digits_bin_1[i - 1], cell);
    }
}
function cycleMinutes() {
    var time = new Date();
    var hours = time.getHours();
    var minutes = time.getMinutes();
    var seconds = time.getSeconds();
    hours = addZero(hours);
    minutes = addZero(minutes);
    seconds = addZero(seconds);
    document.getElementById("time").innerHTML =
        hours + ":" + minutes + ":" + seconds;

    var minutes_digits = [0, 0];
    minutes_digits[0] = getDigits(minutes, 0);
    minutes_digits[1] = getDigits(minutes, 1);
    minutes_digits[0] = decToBin(minutes_digits[0]);
    minutes_digits[1] = decToBin(minutes_digits[1]);
    minutes_digits[0] = addLeadingZeroes(minutes_digits[0]);
    minutes_digits[1] = addLeadingZeroes(minutes_digits[1]);
    var minutes_digits_bin_1 = [0, 0, 0, 0];
    var minutes_digits_bin_2 = [0, 0, 0, 0];
    for (var i = 0; i < 4; i++) {
        minutes_digits_bin_1[i] = getDigits(minutes_digits[0], i);
    }
    for (var i = 0; i < 4; i++) {
        minutes_digits_bin_2[i] = getDigits(minutes_digits[1], i);
    }
    for (var i = 1; i < 5; i++) {
        cell = "3-" + i;
        fillSquare(minutes_digits_bin_2[i - 1], cell);
    }
    for (var i = 1; i < 5; i++) {
        cell = "4-" + i;
        fillSquare(minutes_digits_bin_1[i - 1], cell);
    }
}
function cycleHours() {
    var time = new Date();
    var hours = time.getHours();
    var minutes = time.getMinutes();
    var seconds = time.getSeconds();
    hours = addZero(hours);
    minutes = addZero(minutes);
    seconds = addZero(seconds);
    document.getElementById("time").innerHTML =
        hours + ":" + minutes + ":" + seconds;

    var hours_digits = [0, 0];
    hours_digits[0] = getDigits(hours, 0);
    hours_digits[1] = getDigits(hours, 1);
    hours_digits[0] = decToBin(hours_digits[0]);
    hours_digits[1] = decToBin(hours_digits[1]);
    hours_digits[0] = addLeadingZeroes(hours_digits[0]);
    hours_digits[1] = addLeadingZeroes(hours_digits[1]);
    var hours_digits_bin_1 = [0, 0, 0, 0];
    var hours_digits_bin_2 = [0, 0, 0, 0];
    for (var i = 0; i < 4; i++) {
        hours_digits_bin_1[i] = getDigits(hours_digits[0], i);
    }
    for (var i = 0; i < 4; i++) {
        hours_digits_bin_2[i] = getDigits(hours_digits[1], i);
    }
    for (var i = 1; i < 5; i++) {
        cell = "5-" + i;
        fillSquare(hours_digits_bin_2[i - 1], cell);
    }
    for (var i = 1; i < 5; i++) {
        cell = "6-" + i;
        fillSquare(hours_digits_bin_1[i - 1], cell);
    }
}
function addZero(i) {
    if (i < 10) i = "0" + i;
    return i;
}
function decToBin(number) {
    number = parseInt(number).toString(2);
    return number;
}
function getDigits(number, digit) {
    number = number.toString()[digit];
    return number;
}
function addLeadingZeroes(number) {
    switch (number.length) {
        case 1:
            number = "000" + number;
            break;
        case 2:
            number = "00" + number;
            break;
        case 3:
            number = "0" + number;
            break;
        default:
            break;
    }
    return number;
}

function fillSquare(value, cell) {
    if (value == 1) document.getElementById(cell).classList.add("fill");
    else document.getElementById(cell).classList.remove("fill");
}
